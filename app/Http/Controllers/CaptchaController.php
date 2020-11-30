<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\User;

class CaptchaController extends Controller
{
    public function captchaForm()
    {
        return view('captchaform');
    }
    public function storeCaptchaForm(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        dd('successfully validate');
    }
    public function storeCaptchaForm2(Request $request)
    {
        $req = $request;
        $recaptchas = $request->input('recaptcha');
        request()->validate([
            $request->input('recaptcha') => 'captcha',
        ]);
        //dd($name);
        $secret = '6LfjdPEZAAAAAPo-TA0-h-RC5QvZvKBFsG0wMppb';
        $ch = curl_init();



        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,

            "secret=" . $secret . "&response=" . $recaptchas
        );

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        $responseData = json_decode($result, TRUE);

        curl_close($ch);


        if ($responseData['success'] == false) {
            dd("no valido");
            return back();

        } else {
            dd("verificado con exito");
        }
    }
}
