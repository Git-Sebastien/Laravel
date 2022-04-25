<?php

namespace App\Http\Controllers\Mail;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $content = [
            'title' => 'Coucou mi amor',
            'body'=> 'Tu pourra te créer un compte avec ce mail stp <3'
        ];

        Mail::to('laura.santin73@gmail.com')->send(new ContactMail($content));
    }
}
