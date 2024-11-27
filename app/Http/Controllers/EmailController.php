<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\YourMailClass; // Asegúrate de usar tu clase de Mailable
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request)
{
    // Aquí va la lógica de enviar el correo
    $to = $request->input('to');
    $subject = $request->input('subject');
    $message = $request->input('message');

    try {
        Mail::to($to)->send(new YourMailClass($subject, $message));  // Asegúrate de pasar el mailable correcto
        session()->flash('success', 'Mensaje enviado exitosamente');
    } catch (\Exception $e) {
        session()->flash('error', 'Hubo un error al enviar el mensaje');
    }

    // Redirigir a la página de inicio o donde prefieras
    return redirect()->route('administrator.notificaciones');
}
}

