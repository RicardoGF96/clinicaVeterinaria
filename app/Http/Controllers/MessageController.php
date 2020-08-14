<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(){

        $message = request()->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'subject' => 'required',
                    'content' => 'required'
                    ]);

        Mail::to('example@software.com')->queue(new MessageReceived($message)); //Envia un mail al correo establecido y luego usa el archivo del send.

        return view('emails.messagesuccessful');

    }
}
