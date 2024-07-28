<?php


use App\Http\Controllers\ApprenticeController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\SuperadminController;

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

    // Ruta del botón del home-superadmin a administrador
    Route::get('/superadmin/SuperAdmin-Administrator', [SuperadminController::class, 'SuperAdminAdministrator'])->name('superadmin.SuperAdmin-Administrator');
    
    Route::get('/superadmin/SuperAdmin-Notificaciones', [SuperadminController::class, 'SuperAdminNotificaciones'])->name('superadmin.SuperAdmin-Notificaciones');

    Route::get('/superadmin/SuperAdmin-AdministratorAñadir', [SuperadminController::class, 'SuperAdminAdministratorAñadir'])->name('superadmin.SuperAdmin-AdministratorAñadir');

    Route::get('/superadmin/SuperAdmin-AdministratorPerfil', [SuperadminController::class, 'SuperAdminAdministratorPerfil'])->name('superadmin.SuperAdmin-AdministratorPerfil');

    // Ruta del botón del home-superadmin a instructor
    Route::get('/superadmin/SuperAdmin-Instructor', [SuperadminController::class, 'SuperAdminInstructor'])->name('superadmin.SuperAdmin-Instructor');

    Route::get('/superadmin/SuperAdmin-InstructorAñadir', [SuperadminController::class, 'SuperAdminInstructorAñadir'])->name('superadmin.SuperAdmin-InstructorAñadir');


    // Ruta del botón del home-superadmin a aprendiz
    Route::get('/superadmin/SuperAdmin-Aprendiz', [SuperadminController::class, 'SuperAdminAprendiz'])->name('superadmin.SuperAdmin-Aprendiz');

    // Ruta para el perfil del superadmin
    Route::get('/superadmin/SuperAdmin-Perfil', [SuperadminController::class, 'SuperAdminPerfil'])->name('superadmin.SuperAdmin-Perfil');

    // Ruta para el actualizar perfil del superadmin
    Route::get('/superadmin/SuperAdmin-PerfilActualizar', [SuperadminController::class, 'SuperAdminPerfilActualizar'])->name('superadmin.SuperAdmin-PerfilActualizar');






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
    })->name('apprentice.index');
});

//RUTAS APRENDIZ

Route::get('/homeaprendiz', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::post('/homeaprendiiz', [ApprenticeController::class, 'homeaprendizStore'])->name('homeaprendiz.store');
Route::get('/calendaraprendiz', [ApprenticeController::class, 'calendar'])->name('apprentice.calendar');

//rutas intructor
Route::get('/trainer/icon',[TrainerController::class,'icon']);
Route::get('/trainer/apprentice',[TrainerController::class,'apprentice'])->name('apprentice');
Route::get('/trainer/notification',[TrainerController::class, 'notification'])->name('notification');
Route::get('/trainer/report',[TrainerController::class,'report'])->name('report');
Route::get('/trainer/username',[TrainerController::class,'username'])->name('username');
Route::get('/trainer/iconTrainer',[TrainerController::class,'icon'])->name('icon');


