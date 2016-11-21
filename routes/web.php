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
            'message' => 'required',
            'corp_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return $validator->getMessageBag()->toArray();
        }

        
        Mail::to($request->email)->send(new ContactoMail($request->all()));

        return "Exito";
});

Route::resource('catalogo', 'MachineController');

Auth::routes();

Route::get('/home', 'HomeController@index');
