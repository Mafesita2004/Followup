<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdministratorController;
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

    // Rutas relacionadas con la gestión de administradores en el panel del superadmin
    Route::get('/superadmin/SuperAdmin-Administrator', [SuperadminController::class, 'SuperAdminAdministrator'])->name('superadmin.SuperAdmin-Administrator');
    Route::get('/superadmin/SuperAdmin-Notificaciones', [SuperadminController::class, 'SuperAdminNotificaciones'])->name('superadmin.SuperAdmin-Notificaciones');
    Route::get('/superadmin/SuperAdmin-Redactar', [SuperadminController::class, 'SuperAdminRedactar'])->name('superadmin.SuperAdmin-Redactar');
    Route::get('/superadmin/SuperAdmin-AdministratorAñadir', [SuperadminController::class, 'SuperAdminAdministratorAñadir'])->name('superadmin.SuperAdmin-AdministratorAñadir');
    Route::get('/superadmin/SuperAdmin-AdministratorPerfil', [SuperadminController::class, 'SuperAdminAdministratorPerfil'])->name('superadmin.SuperAdmin-AdministratorPerfil');
    Route::get('/superadmin/SuperAdmin-Permisos', [SuperadminController::class, 'SuperAdminPermisos'])->name('superadmin.SuperAdmin-Permisos');
    Route::get('/superadmin/SuperAdmin-Graficas', [SuperadminController::class, 'SuperAdminGraficas'])->name('superadmin.SuperAdmin-Graficas');

    // Rutas relacionadas con la gestión de instructores
    Route::get('/superadmin/SuperAdmin-Instructor', [SuperadminController::class, 'SuperAdminInstructor'])->name('superadmin.SuperAdmin-Instructor');
    Route::get('/superadmin/SuperAdmin-InstructorPerfil', [SuperadminController::class, 'SuperAdminInstructorPerfil'])->name('superadmin.SuperAdmin-InstructorPerfil');
    Route::get('/superadmin/SuperAdmin-InstructorActualizarPerfil', [SuperadminController::class, 'SuperAdminInstructorActualizarPerfil'])->name('superadmin.SuperAdmin-InstructorActualizarPerfil');
    Route::get('/superadmin/SuperAdmin-InstructorAñadir', [SuperadminController::class, 'SuperAdminInstructorAñadir'])->name('superadmin.SuperAdmin-InstructorAñadir');

    // Rutas relacionadas con la gestión de aprendices
    Route::get('/superadmin/SuperAdmin-Aprendiz', [SuperadminController::class, 'SuperAdminAprendiz'])->name('superadmin.SuperAdmin-Aprendiz');
    Route::get('/superadmin/SuperAdmin-AprendizPerfil', [SuperadminController::class, 'SuperAdminAprendizPerfil'])->name('superadmin.SuperAdmin-AprendizPerfil');
    Route::get('/superadmin/SuperAdmin-AprendizPerfilActualizar', [SuperadminController::class, 'SuperAdminAprendizPerfilActualizar'])->name('superadmin.SuperAdmin-AprendizPerfilActualizar');
    Route::get('/superadmin/SuperAdmin-AprendizAgregar', [SuperadminController::class, 'SuperAdminAprendizAgregar'])->name('superadmin.SuperAdmin-AprendizAgregar');
    Route::get('/superadmin/SuperAdmin-ListaAprendiz', [SuperadminController::class, 'SuperAdminListaAprendiz'])->name('superadmin.SuperAdmin-ListaAprendiz');
    Route::get('/superadmin/SuperAdmin-Cronograma', [SuperadminController::class, 'SuperAdminCronograma'])->name('superadmin.SuperAdmin-Cronograma');

    // Perfil del superadmin
    Route::get('/superadmin/SuperAdmin-Perfil', [SuperadminController::class, 'SuperAdminPerfil'])->name('superadmin.SuperAdmin-Perfil');
    Route::get('/superadmin/SuperAdmin-PerfilActualizar', [SuperadminController::class, 'SuperAdminPerfilActualizar'])->name('superadmin.SuperAdmin-PerfilActualizar');

    // Mensajes
    Route::get('/superadmin/SuperAdmin-MensajeInstructor', [SuperadminController::class, 'SuperAdminMensajeInstructor'])->name('superadmin.SuperAdmin-MensajeInstructor');
    Route::get('/superadmin/SuperAdmin-MensajeAprendiz', [SuperadminController::class, 'SuperAdminMensajeAprendiz'])->name('superadmin.SuperAdmin-MensajeAprendiz');

    // Rutas de administrador
    Route::get('/administrator/home', function () {
        return view('administrator.home');
    })->name('administrator.home');
    Route::get('/administrator/settings', [AdministratorController::class, 'settings'])->name('administrator.settings');
    Route::get('/administrator/instructor', [AdministratorController::class, 'instructor'])->name('administrator.instructor');
    Route::get('/administrator/apprentice', [AdministratorController::class, 'apprentice'])->name('administrator.apprentice');
    Route::get('/administrator/reports', [AdministratorController::class, 'reports'])->name('administrator.reports');
    Route::get('/administrator/graphic', [AdministratorController::class, 'graphic'])->name('administrator.graphic');
    Route::get('/administrator/template', [AdministratorController::class, 'template'])->name('administrator.template');
    Route::get('/administrator/Administrator-perfil', [AdministratorController::class, 'Adminperfil'])->name('administrator.Administrator-perfil');
    Route::get('/administrator/Apprentice-perfil', [AdministratorController::class, 'perfilAprendiz'])->name('administrator.Apprentice-perfil');
    Route::get('/administrator/Instructor-perfil', [AdministratorController::class, 'perfilInstructor'])->name('administrator.Instructor-perfil');
    Route::get('/administrator/Añadir-aprendiz', [AdministratorController::class, 'AñadirAprendiz'])->name('administrator.Añadir-aprendiz');

    // Rutas de instructor
    Route::get('/trainer/icon', function () {
        return view('trainer.icon');
    })->name('icon');

    // Rutas de aprendiz (cambiada la duplicación del nombre)
    Route::get('/apprentice/home', function () {
        return view('apprentice.home');
    })->name('apprentice.home');
});

// RUTAS APRENDIZ (fuera del middleware 'auth')
Route::get('/homeaprendiz', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('/calendaraprendiz', [ApprenticeController::class, 'calendar'])->name('apprentice.calendar');
Route::get('/visitaprendiz', [ApprenticeController::class, 'visit'])->name('apprentice.visit');
Route::get('/registervisitaprendiz', [ApprenticeController::class, 'registervisit'])->name('apprentice.registervisit');
Route::get('/profileaprendiz', [ApprenticeController::class, 'profile'])->name('apprentice.profile');

// RUTAS INSTRUCTOR
Route::get('/trainer/icon', [TrainerController::class, 'icon'])->name('trainer.icon');
Route::get('/trainer/apprentice', [TrainerController::class, 'apprentice'])->name('trainer.apprentice');
Route::get('/trainer/notification', [TrainerController::class, 'notification'])->name('trainer.notification');
Route::get('/trainer/report', [TrainerController::class, 'report'])->name('trainer.report');
Route::get('/trainer/username', [TrainerController::class, 'username'])->name('trainer.username');
Route::get('/trainer/bitacora', [TrainerController::class, 'bitacora'])->name('trainer.bitacora');
Route::get('/trainer/visita', [TrainerController::class, 'visita'])->name('trainer.visita');
Route::get('/trainer/perfilapre', [TrainerController::class, 'perfilapre'])->name('trainer.perfilapre');
Route::get('/trainer/iconTrainer', [TrainerController::class, 'icon'])->name('trainer.icon');

