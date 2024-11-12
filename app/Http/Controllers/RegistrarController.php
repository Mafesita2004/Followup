<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    //administrador

    public function AgregarAprendiz()
    {
        return view('administrator.Agregar-aprendiz');
    }
    public function AgregarInstructor()
    {
        return view('administrator.Agregar-instructor');
    }

    //super administardor

    public function SuperAdminAdministratorAñadir()
    {
        return view('superadmin.SuperAdmin-AdministratorAñadir');
    }
    public function SuperAdminAprendizAgregar()
    {
        return view('superadmin.SuperAdmin-AprendizAgregar');
    }
    public function SuperAdminInstructorAñadir()
    {
        return view('superadmin.SuperAdmin-InstructorAñadir');
    }
}
