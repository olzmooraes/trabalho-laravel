<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {

        return view('contato');

    }

    public function enviar()
    {

        // validar e enviar email
        return view('contato');

    }
}
