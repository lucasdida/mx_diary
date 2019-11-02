<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/relatos', 'RelatosController@show')->name('lista_relatos');

Route::get('/relatos/editar/{id}', 'RelatosController@edit');
Route::post('/relatos/{id}', 'RelatosController@update');

Route::get('/relatos/apagar/{id}', 'RelatosController@destroy');

Route::get('/cadastrar_relatos', 'RelatosController@index')->name('cadastrar_relatos');
Route::post('/cadastrar_relatos', 'RelatosController@store')->name('salvar_relato');


