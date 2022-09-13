<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use app\Mail\SendMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validade([
            'nome' => 'required|string|max:256|mix:3',
            'email' => 'required|email',
            'assunto' => 'required|max:256',
            'textarea' => 'max:512',
        ]); 
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
