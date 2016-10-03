<?php

Route::get('/', function () {
    return view('page.index');
});

Route::resource('catalogo', 'MachineController');

Auth::routes();

Route::get('/home', 'HomeController@index');
