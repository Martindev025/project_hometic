<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class cotizacioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $file = $request->file;
        $array = [];

        if (isset($file)) {
            foreach ($file as $key => $value) {
                $path = public_path('files_email');
                $name = $request->name . rand(100, 9999) . $value->getClientOriginalName();
                $value->move($path,  $name);
                $array[$key]['name'] = $name;
            }
        }
        
        

        $details = [
            'title' => 'Tienes una nueva solicitud',
            'body' => 'se solicita una cotizacvion por parte de '.$request->name.'con la empresa '.$request->empresa.
            '',
            'tipo' => 'empresa'
        ];


        $email = $request->email;

        Mail::to($email)->send(new \App\Mail\MyUserMail($details));
        
        $details = [
            'title' => 'Tienes una nueva solicitud',
            'body' => 'Te informamos que el cliente daniel realizo una solicitud de demo, 
            en breve nos pondremos en comunicacion para la entrega del demo solicitado',
            'tipo' => 'empresa'
        ];
        
        Mail::to('appsgtgroup22@gmail.com')->send(new \App\Mail\MyMail($details, $array));
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function email_core(Request $request)
    {
        dd($request);
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
