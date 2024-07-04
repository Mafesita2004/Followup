<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'exists:roles,guard_name'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::where('guard_name', $request->role)->first();
        $user->roles()->attach($role);
        $user->save();

        Auth::login($user);

        return $this->redirectTo($user);
    }

    protected function redirectTo($user)
    {
        $roleRoutes = [
            'superadmin' => 'superadmin.home',
            'administrator' => 'administrator.home',
            'trainer' => 'trainer.home',
            'apprentice' => 'apprentice.home',
        ];

        $userRole = $user->roles->first();
        if ($userRole) {
            $redirectRoute = $roleRoutes[$userRole->guard_name] ?? '/';
            return redirect()->intended(route($redirectRoute));
        }

        return redirect()->intended('/');
    }
}
