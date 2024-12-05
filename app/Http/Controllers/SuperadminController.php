<?php

namespace App\Http\Controllers;

use App\Models\superadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SuperadminController extends Controller
{

    public function index()
    {
        return view('superadmin.home');
    }

    public function SuperAdminAdministrator()
    {
        $userData = Http::get('https://apietapaproductivatest-production-af30.up.railway.app/api/user_registers');
        $userDataArray = $userData->json();

        return view('superadmin.SuperAdmin-Administrator', ['users' => $userDataArray]);
    }

    // public function SuperAdminNotificaciones()
    // {
    //     return view('superadmin.SuperAdmin-Notificaciones');
    // }

    public function SuperAdminConfiguracion()
    {
        return view('superadmin.SuperAdmin-Configuracion');
    }

    public function SuperAdminPermisos()
    {
        return view('superadmin.SuperAdmin-Permisos');
    }

    public function SuperAdminGraficas()
    {
        return view('superadmin.SuperAdmin-Graficas');
    }

    public function SuperAdminemail()
    {
        return view('superadmin.email');
    }

    // public function SuperAdminRedactar()
    // {
    //     return view('superadmin.SuperAdmin-Redactar');
    // }


    // public function SuperAdminAdministratorAñadir()
    // {
    //     return view('superadmin.SuperAdmin-AdministratorAñadir');
    // }

    public function SuperAdminAdministratorPerfil()
    {
        return view('superadmin.SuperAdmin-AdministratorPerfil');
    }

    public function SuperAdminInstructor()
    {
        $userData = Http::get('https://apietapaproductivatest-production-af30.up.railway.app/api/user_registers');
        $userDataArray = $userData->json();
            return view('superadmin.SuperAdmin-Instructor', ['users' => $userDataArray]);
    }
    

    // public function SuperAdminInstructorAñadir()
    // {
    //     return view('superadmin.SuperAdmin-InstructorAñadir');
    // }

    public function SuperAdminInstructorPerfil()
    {
        return view('superadmin.SuperAdmin-InstructorPerfil');
    }



    public function SuperAdminAprendiz()
    {
        return view('superadmin.SuperAdmin-Aprendiz');
    }

    // public function SuperAdminAprendizAgregar()
    // {
    //     return view('superadmin.SuperAdmin-AprendizAgregar');
    // }
    public function SuperAdminCronograma()
    {
        return view('superadmin.SuperAdmin-Cronograma');
    }

    public function SuperAdminListaAprendiz()
    {
        return view('superadmin.SuperAdmin-ListaAprendiz');
    }

    public function SuperAdminPerfil()
    {
        return view('superadmin.SuperAdmin-Perfil');
    }

    public function SuperAdminAprendizPerfil()
    {
        return view('superadmin.SuperAdmin-AprendizPerfil');
    }




    public function SuperAdminMensajeInstructor()
    {
        return view('superadmin.SuperAdmin-MensajeInstructor');
    }

    public function SuperAdminMensajeAprendiz()
    {
        return view('superadmin.SuperAdmin-MensajeAprendiz');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(superadmin $superadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(superadmin $superadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, superadmin $superadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(superadmin $superadmin)
    {
        //
    }


}
