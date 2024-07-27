<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdministratorController;
use Illuminate\Support\Facades\Route;

// Ruta principal que muestra el formulario de inicio de sesión
Route::get('/', function () {
    return view('auth.login');
});

// Rutas para el inicio de sesión y registro
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Grupo de rutas protegidas por middleware 'auth' (usuarios autenticados)
Route::middleware(['auth'])->group(function () {
    // Rutas para roles específicos
    Route::get('/superadmin/home', function () {
        return view('superadmin.home');
    })->name('superadmin.home');

    Route::get('/administrator/home', function () {
        return view('administrator.home');
    })->name('administrator.home');

    Route::get('/administrator/settings', [AdministratorController::class, 'settings'])->name('administrator.settings');
    Route::get('/administrator/instructor', [AdministratorController::class, 'instructor'])->name('administrator.instructor');
    Route::get('/administrator/apprentice', [AdministratorController::class, 'apprentice'])->name('administrator.apprentice');
    Route::get('/administrator/reports', [AdministratorController::class, 'reports'])->name('administrator.reports');
    Route::get('/administrator/graphic', [AdministratorController::class, 'graphic'])->name('administrator.graphic');
    Route::get('/administrator/template', [AdministratorController::class, 'template'])->name('administrator.template');
    Route::get('/administrator/perfil', [AdministratorController::class, 'perfil'])->name('administrator.perfil');
    Route::get('/administrator/perfilInstructor', [AdministratorController::class, 'perfilInstructor'])->name('administrator.perfil-instructor');
    
    
    Route::get('/trainer/home', function () {
        return view('trainer.home');
    })->name('trainer.home');

    Route::get('/apprentice/home', function () {
        return view('apprentice.home');
    })->name('apprentice.home');
});
