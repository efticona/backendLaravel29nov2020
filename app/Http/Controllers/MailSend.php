<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\MyTestMail;

class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Mail from faviotic.com',
            'body' => 'This is for testing email using smtp'
        ];
        \Mail::to('ericfavioticona@gmail.com')->send(new MyTestMail($details));

        dd("Email is Sent.");
    }
    public function mailsendApi(Request $request)
    {
        $req = $request;
        $destinatario = $request->input('email');
        
        $details = [
            'title' => 'Mail from faviotic.com',
            'body' => 'This is for testing email using smtp'
        ];
        \Mail::to($destinatario)->send(new MyTestMail($details));
        $characters = '0123456789';
            
        // generate a pin based on 2 * 7 digits + a random character
        $pin = $characters[rand(0, 10)].$characters[rand(0, 10)].$characters[rand(0, 10)].$characters[rand(0, 10)].$characters[rand(0, 10)].$characters[rand(0, 10)];
        // shuffle the result
        $string = str_shuffle($pin);
        // save code by user
        dd("Email is Sent. ". $string);
    }    
}
