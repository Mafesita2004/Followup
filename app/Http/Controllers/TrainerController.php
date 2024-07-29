<?php

namespace App\Http\Controllers;

use App\Models\trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trainer.home');
    }

   //inicio de instructor iconos
    public function icon()
    {
        return view('trainer.icon');
    }

    //icono notificaciones
    public function notification()
    {
        return view('trainer.notification');
    }
    //aprendiz icono

    public function apprentice()
    {
        return view('trainer.apprentice');
    }
     //icono perfil aprendiz
     public function perfilapre()
     {
         return view('trainer.perfilapre');
     }
    //icono reportes
    public function report()
    {
        return view('trainer.report');
    }
    //icono nombre usuario instructor
    public function username()
    {
        return view('trainer.username');
    }
    //icono bitacora
    public function bitacora()
    {
        return view('trainer.bitacora');
    }
    //icono visita
    public function visita()
    {
        return view('trainer.visita');
    }
   












    /**
     * Display the specified resource.
     */
    public function show(trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trainer $trainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trainer $trainer)
    {
        //
    }
}
