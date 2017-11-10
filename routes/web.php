<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::view('/', 'panel');

 // Route::group([
 //  //  'prefix' => 'clientes'],
 // function(){

   Route::resource('clientes', 'ClientesController');
   Route::resource('contratos', 'ContratosController');
   Route::resource('cotizaciones', 'CotizacionesController');
   //
  //  Route::get('clientes', 'ClientesController@index')->name('clientes.index');
  //  Route::get('clientes/create', 'ClientesController@create')->name('clientes.create');
  //  Route::post('clientes', 'ClientesController@store')->name('clientes.store');
  //  Route::get('clientes/{post}', 'ClientesController@edit')->name('clientes.edit');
  //  Route::put('clientes/{post}', 'ClientesController@update')->name('clientes.update');
  //  Route::delete('clientes/{post}', 'ClientesController@destroy')->name('clientes.destroy');

 // });
