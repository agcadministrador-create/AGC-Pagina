<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    /**
     * Muestra la vista de contacto.
     */
    public function index()
    {
        return view('pages.contacto');
    }

    /**
     * Procesa la solicitud y envía el correo electrónico.
     */
    public function enviar(Request $request)
    {


        $datos = $request->validate([
            'nombre'   => 'required|string|max:255',
            'empresa'  => 'nullable|string|max:255',
            'email'    => 'required|email|max:255',
            'telefono' => 'nullable|string|max:50',
            'mensaje'  => 'required|string|max:2000',
        ]);

        try {
            // Se utiliza la configuración global de correo cargada desde el .env
            $destinatario = config('mail.from.address', 'agcmexico@agcmex.com.mx');

            Mail::to($destinatario)->send(new ContactoMail($datos));

            return redirect()->back()->with('success', '¡Mensaje enviado correctamente! Nos pondremos en contacto a la brevedad.');
        } catch (\Exception $e) {
            // Muestra el mensaje exacto de error SMTP si ocurre alguna falla de conexión
            dd($e->getMessage());
        }
    }
}
