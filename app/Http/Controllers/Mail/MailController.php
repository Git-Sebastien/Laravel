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
            'title' => 'Récapitulatif de votre commande',
            'subtitle'=> "Merci pour votre commande !",
            'body'=> "Voici votre facture  d'un montant de 45€ pour l'article ci-dessous",
            'img'=>'images/body_background.jpg'
        ];
        
        Mail::to('reckex1011@gmail.com')->send(new ContactMail($content));
        Mail::to('sebastien.ancelin7@gmail.com')->send(new ContactMail($content));
    }
}
