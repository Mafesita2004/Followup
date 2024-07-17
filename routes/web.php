<?php


use App\Http\Controllers\ApprenticeController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SuperadminController;

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

    // Ruta del botón del home-superadmin a administrador
    Route::get('/superadmin/SuperAdmin-Administrator', [SuperadminController::class, 'SuperAdminAdministrator'])->name('superadmin.SuperAdmin-Administrator');

    // Ruta del botón del home-superadmin a instructor
    Route::get('/superadmin/SuperAdmin-Instructor', [SuperadminController::class, 'SuperAdminInstructor'])->name('superadmin.SuperAdmin-Instructor');

    // Ruta del botón del home-superadmin a aprendiz
    Route::get('/superadmin/SuperAdmin-Aprendiz', [SuperadminController::class, 'SuperAdminAprendiz'])->name('superadmin.SuperAdmin-Aprendiz');

    // Ruta para el perfil del superadmin
    Route::get('/superadmin/profile', [SuperadminController::class, 'profile'])->name('superadmin.SuperAdmin-Perfil');







    Route::get('/administrator/home', function () {
        return view('administrator.home');
    })->name('administrator.home');

    Route::get('/trainer/home', function () {
        return view('trainer.home');
    })->name('trainer.home');

    Route::get('/apprentice/home', function () {
        return view('apprentice.home');
    })->name('apprentice.home');
});


Route::get('/homeaprendiz', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::post('/homeaprendiiz', [ApprenticeController::class, 'homeaprendizStore'])->name('homeaprendiz.store');   
