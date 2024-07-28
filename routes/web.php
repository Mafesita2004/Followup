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

    // Rutas relacionadas con la gestión de administradores en el panel del superadmin
// Ruta para la vista de administración general de administradores
Route::get('/superadmin/SuperAdmin-Administrator', [SuperadminController::class, 'SuperAdminAdministrator'])->name('superadmin.SuperAdmin-Administrator');

// Ruta para ver notificaciones de superadmin
Route::get('/superadmin/SuperAdmin-Notificaciones', [SuperadminController::class, 'SuperAdminNotificaciones'])->name('superadmin.SuperAdmin-Notificaciones');

// Ruta para redactar nuevas notificaciones
Route::get('/superadmin/SuperAdmin-Redactar', [SuperadminController::class, 'SuperAdminRedactar'])->name('superadmin.SuperAdmin-Redactar');

// Ruta para añadir un nuevo administrador
Route::get('/superadmin/SuperAdmin-AdministratorAñadir', [SuperadminController::class, 'SuperAdminAdministratorAñadir'])->name('superadmin.SuperAdmin-AdministratorAñadir');

// Ruta para ver el perfil de un administrador específico
Route::get('/superadmin/SuperAdmin-AdministratorPerfil', [SuperadminController::class, 'SuperAdminAdministratorPerfil'])->name('superadmin.SuperAdmin-AdministratorPerfil');

// Ruta para gestionar permisos de administradores
Route::get('/superadmin/SuperAdmin-Permisos', [SuperadminController::class, 'SuperAdminPermisos'])->name('superadmin.SuperAdmin-Permisos');

// Ruta para ver gráficos relacionados con la administración
Route::get('/superadmin/SuperAdmin-Graficas', [SuperadminController::class, 'SuperAdminGraficas'])->name('superadmin.SuperAdmin-Graficas');

// Rutas relacionadas con la gestión de instructores en el panel del superadmin
// Ruta para ver la lista de instructores
Route::get('/superadmin/SuperAdmin-Instructor', [SuperadminController::class, 'SuperAdminInstructor'])->name('superadmin.SuperAdmin-Instructor');

// Ruta para ver el perfil de un instructor específico
Route::get('/superadmin/SuperAdmin-InstructorPerfil', [SuperadminController::class, 'SuperAdminInstructorPerfil'])->name('superadmin.SuperAdmin-InstructorPerfil');

// Ruta para actualizar el perfil de un instructor
Route::get('/superadmin/SuperAdmin-InstructorActualizarPerfil', [SuperadminController::class, 'SuperAdminInstructorActualizarPerfil'])->name('superadmin.SuperAdmin-InstructorActualizarPerfil');

// Ruta para añadir un nuevo instructor
Route::get('/superadmin/SuperAdmin-InstructorAñadir', [SuperadminController::class, 'SuperAdminInstructorAñadir'])->name('superadmin.SuperAdmin-InstructorAñadir');

// Ruta para configuración general del superadmin
Route::get('/superadmin/SuperAdmin-Configuracion', [SuperadminController::class, 'SuperAdminConfiguracion'])->name('superadmin.SuperAdmin-Configuracion');

// Rutas relacionadas con la gestión de aprendices en el panel del superadmin
// Ruta para ver la lista de aprendices
Route::get('/superadmin/SuperAdmin-Aprendiz', [SuperadminController::class, 'SuperAdminAprendiz'])->name('superadmin.SuperAdmin-Aprendiz');

// Ruta para ver el perfil de un aprendiz específico
Route::get('/superadmin/SuperAdmin-AprendizPerfil', [SuperadminController::class, 'SuperAdminAprendizPerfil'])->name('superadmin.SuperAdmin-AprendizPerfil');

// Ruta para actualizar el perfil de un aprendiz
Route::get('/superadmin/SuperAdmin-AprendizPerfilActualizar', [SuperadminController::class, 'SuperAdminAprendizPerfilActualizar'])->name('superadmin.SuperAdmin-AprendizPerfilActualizar');

// Ruta para añadir un nuevo aprendiz
Route::get('/superadmin/SuperAdmin-AprendizAgregar', [SuperadminController::class, 'SuperAdminAprendizAgregar'])->name('superadmin.SuperAdmin-AprendizAgregar');

// Ruta para ver la lista de aprendices
Route::get('/superadmin/SuperAdmin-ListaAprendiz', [SuperadminController::class, 'SuperAdminListaAprendiz'])->name('superadmin.SuperAdmin-ListaAprendiz');

// Ruta para ver el cronograma de actividades
Route::get('/superadmin/SuperAdmin-Cronograma', [SuperadminController::class, 'SuperAdminCronograma'])->name('superadmin.SuperAdmin-Cronograma');

// Rutas relacionadas con el perfil del superadmin
// Ruta para ver el perfil del superadmin
Route::get('/superadmin/SuperAdmin-Perfil', [SuperadminController::class, 'SuperAdminPerfil'])->name('superadmin.SuperAdmin-Perfil');

// Ruta para actualizar el perfil del superadmin
Route::get('/superadmin/SuperAdmin-PerfilActualizar', [SuperadminController::class, 'SuperAdminPerfilActualizar'])->name('superadmin.SuperAdmin-PerfilActualizar');

// Rutas para manejar mensajes a instructores y aprendices
// Ruta para enviar un mensaje a un instructor
Route::get('/superadmin/SuperAdmin-MensajeInstructor', [SuperadminController::class, 'SuperAdminMensajeInstructor'])->name('superadmin.SuperAdmin-MensajeInstructor');

// Ruta para enviar un mensaje a un aprendiz
Route::get('/superadmin/SuperAdmin-MensajeAprendiz', [SuperadminController::class, 'SuperAdminMensajeAprendiz'])->name('superadmin.SuperAdmin-MensajeAprendiz');





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


