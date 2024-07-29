<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
   
    public function settings(){
        return view('administrator.settings');
    }
    public function instructor(){
        return view('administrator.instructor');
    }
    public function apprentice(){
        return view('administrator.apprentice');
    }
    public function reports(){
        return view('administrator.reports');
    }
    public function graphic(){
        return view('administrator.graphic');
    }
    public function template(){
        return view('administrator.template');
    }
    public function Notificaciones()
    {
        return view('administrator.notificaciones');
    }
    public function redactar()
    {
        return view('administrator.redactar');
    }

    //VISTAS PERFILES
    public function Adminperfil()
    {
        return view('administrator.Administrator-perfil');
    }

    
    public function perfilAprendiz(){
        return view('administrator.Apprentice-perfil');
    }
    public function perfilInstructor()
    {
        return view('administrator.Instructor-perfil');
    }

    public function AgregarAprendiz()
    {
        return view('administrator.Agregar-aprendiz');
    }
    public function AñadirAprendiz()
    {
        return view('administrator.Añadir-aprendiz');
    }
    public function ReporteAprendiz()
    {
        return view('administrator.Reporte-aprendiz');
    }
    public function Email()
    {
        return view('administrator.email');
    }
}
?>
