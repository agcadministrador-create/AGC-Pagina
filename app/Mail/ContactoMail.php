<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $datos;

    /**
     * Recibe los datos validados del formulario.
     */
    public function __construct(array $datos)
    {
        $this->datos = $datos;
    }

    /**
     * Construye el mensaje de correo.
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($this->datos['email'], $this->datos['nombre'])
                    ->subject('Nueva Solicitud de Cotización / Contacto - AGC Group')
                    ->view('emails.contacto');
    }
}
