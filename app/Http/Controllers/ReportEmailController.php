<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ReportEmailController extends Controller
{
    public function create()
    {
        return view('emails.report');  // Asegúrate de que la vista existe
    }

    public function send(Request $request)
    {
        // Recibir los datos del formulario
        $subject = $request->input('subject');
        $message = $request->input('message');
        $to = $request->input('to');  // Asegúrate de que el campo 'to' esté siendo enviado correctamente

        // Enviar el correo
        Mail::raw($message, function ($mail) use ($subject, $to) {
            $mail->to($to)
                 ->subject($subject);
        });

        // Log para verificar el flujo
        Log::debug('Correo enviado correctamente a: ' . $to);

        // Redirigir con mensaje de éxito
        return redirect()->route('administrator.notificaciones')->with('success', 'Correo enviado exitosamente.');
    }
}
