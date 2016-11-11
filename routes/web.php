<?php

use HerramientasCela\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('page.index',  ['activo' => 'home']);
});

Route::get('/quienes_somos', function () {
    return view('page.quienes_somos',  ['activo' => 'quienes_somos']);
});

Route::get('/contacto', function () {
    return view('page.contacto', ['activo' => 'contacto']);
});

Route::get('/enviar_email', function (Request $request) {
    $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/contacto')
                        ->withErrors($validator)
                        ->withInput();
        }

        
        Mail::to($request->email)->send(new ContactoMail($request->all()));

        flash('Enseguida nos pondremos en contacto con ustedes', 'success');

        return redirect('/contacto');
});

Route::resource('catalogo', 'MachineController');

Auth::routes();

Route::get('/home', 'HomeController@index');
