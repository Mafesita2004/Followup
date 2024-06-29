<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ApprenticeController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/home', [SuperAdminController::class, 'home'])->name('superadmin.home');
});

Route::middleware(['auth', 'role:administrator,superadmin'])->group(function () {
    Route::get('/administrator/home', [AdministratorController::class, 'home'])->name('administrator.home');
});

Route::middleware(['auth', 'role:trainer,administrator,superadmin'])->group(function () {
    Route::get('/trainer/home', [TrainerController::class, 'home'])->name('trainer.home');
});

Route::middleware(['auth', 'role:apprentice,trainer,administrator,superadmin'])->group(function () {
    Route::get('/apprentice/home', [ApprenticeController::class, 'home'])->name('apprentice.home');
});
