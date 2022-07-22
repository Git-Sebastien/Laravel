<?php

namespace App\Http\Controllers\Mail;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $content = [
            'title' => '50€ offerts',
            'body'=> 'Blablabla si tu clique sur ce lien, tu l\'aura dans le cul.Bisous'
        ];
        
        Mail::to('reckex1011@gmail.com')->send(new ContactMail($content));
    }
}
