<?php

Route::get('/', 'PageController@index');

Route::post('processPayment', 'PaymentController@processPayment');

Route::get('/enviar_email', 'PageController@enviar_email');

Route::post('/guardarCarritoCompra', 'PageController@guardarCarritoCompra');

Route::post('/quitarCarritoCompra', 'PageController@quitarArticuloCarritoComptra');

Route::resource('catalogo', 'MachineController');

Route::resource('refacciones', 'ReplacementController');

Auth::routes();

Route::get('/home', 'HomeController@index');
