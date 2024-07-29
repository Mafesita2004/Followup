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
    public function perfil(){
        return view('administrator.perfil');
    }
    public function perfilInstructor()
    {
        return view('administrator.perfil-instructor');
    }
     
}
?>
