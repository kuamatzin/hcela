<?php

use HerramientasCela\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'PageController@index');

Route::post('processPayment', 'PaymentController@processPayment');

Route::get('/enviar_email', function (Request $request) {
    $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        
        Mail::to($request->email)->send(new ContactoMail($request->all()));

        flash('Enseguida nos pondremos en contacto con ustedes', 'success');

        return redirect('/');
});

Route::resource('catalogo', 'MachineController');

Auth::routes();

Route::get('/home', 'HomeController@index');
