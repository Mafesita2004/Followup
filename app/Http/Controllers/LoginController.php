<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('/resources/views/superadmin/home.blade.php');
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

            // Redirigir basado en el rol del usuario
            switch($user->role) {
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

        return back()->withErrors([
            'username' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
