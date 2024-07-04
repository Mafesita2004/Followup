<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

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

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
