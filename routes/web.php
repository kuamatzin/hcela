<?php

Route::get('/', function () {
    return view('page.index',  ['activo' => 'home']);
});

Route::get('/quienes_somos', function () {
    return view('page.quienes_somos',  ['activo' => 'quienes_somos']);
});

Route::get('/contacto', function () {
    return view('page.contacto', ['activo' => 'contacto']);
});

Route::resource('catalogo', 'MachineController');

Auth::routes();

Route::get('/home', 'HomeController@index');
