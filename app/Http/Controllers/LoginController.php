<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validar las credenciales
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redireccionar según el rol del usuario
            switch (auth()->user()->role) {
                case 'superadmin':
                    return redirect()->route('superadmin.home');
                case 'administrator':
                    return redirect()->route('administrator.home');
                case 'trainer':
                    return redirect()->route('trainer.home');
                case 'apprentice':
                    return redirect()->route('apprentice.home');
                default:
                    return redirect('/');
            }
        }

        // Si la autenticación falla, redirigir de nuevo al formulario de login con errores
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
