<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class ContatoController extends Controller
{
    public function index()
    {

        return view('contato');

    }

    public function enviar(Request $request)
    {
        $data = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'assunto' => $request->assunto,
            'textarea' => $request->textarea
        );
        
        Mail::to( config('mail.from.address') )
            ->send (new SendMail($data) );

        return back()
            ->with('succes', 'obrigado por nos contatar');

     return view('contato');
    }

}

