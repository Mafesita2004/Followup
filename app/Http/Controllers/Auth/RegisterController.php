<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Department; // Agregar modelo de Department
use App\Models\Municipality; // Agregar modelo de Municipality
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    

    // Maneja la solicitud de registro
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required', 'string', 'max:255'],
            'municipality' => ['required', 'string', 'max:255'], // Validar el municipio
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'exists:roles,guard_name'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'department' => $request->department,
            'municipality' => $request->municipality, // Guardar el municipio
            'password' => Hash::make($request->password),
        ]);

        // Asocia el rol seleccionado al usuario
        $role = Role::where('guard_name', $request->role)->first();
        $user->roles()->attach($role);
        $user->save();

        // Autentica al usuario recién registrado
        Auth::login($user);

        // Redirige al usuario según su rol
        return $this->redirectTo($user);
    }

    // Redirige al usuario según su rol
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

    // Obtener los municipios de un departamento



}
