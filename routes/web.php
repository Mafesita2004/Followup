<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;


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

    Route::get('/trainer/home', function () {
        return view('trainer.home');
    })->name('trainer.home');

    Route::get('/apprentice/home', function () {
        return view('apprentice.home');
    })->name('apprentice.home');
});

//rutas intructor
Route::get('/trainer/icon',[TrainerController::class,'icon']);
Route::get('/trainer/apprentice',[TrainerController::class,'apprentice'])->name('apprentice');
Route::get('/trainer/notification',[TrainerController::class, 'notification'])->name('notification');
Route::get('/trainer/report',[TrainerController::class,'report'])->name('report');
Route::get('/trainer/username',[TrainerController::class,'username'])->name('username');
Route::get('/trainer/iconTrainer',[TrainerController::class,'icon'])->name('icon');

