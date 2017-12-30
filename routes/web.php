<?php


Route::view('/', 'panel');

Route::resource('clientes', 'ClientesController');

Route::resource('contratos', 'ContratosController');
Route::post('contrato', 'ContratosController@store');

Route::resource('cotizaciones', 'CotizacionesController');
