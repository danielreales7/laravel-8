<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store() {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name') // De esta manera personalizamos los campos aun más
        ]);

        Mail::to('danielreales7@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }
}