<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje recibido';

    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }


    public function build()
    {
        return $this->view('emails.message-received'); //Al construir una instancia de este archivo, se envia el contenido de la vista al correo
    }
}
