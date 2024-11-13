<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    //administrador

    public function Notificaciones()
    {
        return view('administrator.notificaciones');
    }

    //aprendiz
    public function notification()
    {
        $notificaciones = [
            ['titulo' => 'Notificación 1', 'asunto' => 'Asunto 1', 'fecha' => '2023-10-30'],
            ['titulo' => 'Notificación 2', 'asunto' => 'Asunto 2', 'fecha' => '2023-10-31'],
            // Agrega más notificaciones aquí
        ];

        return view('apprentice.notification', compact('notificaciones'));
    }
    //superadministrador
    public function SuperAdminNotificaciones()
    {
        return view('superadmin.SuperAdmin-Notificaciones');
    }
    public function notificationtrainer()
    {
        return view('trainer.notification');
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
    public function show(notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notification $notification)
    {
        //
    }
}
