<?php

Route::get('/', 'PageController@index');

Route::post('processPayment', 'PaymentController@processPayment');

Route::get('/enviar_email', 'PageController@enviar_email');

Route::resource('catalogo', 'MachineController');

Auth::routes();

Route::get('/home', 'HomeController@index');
