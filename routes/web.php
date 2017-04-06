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

Route::get('/', function () {
  // Login view
    return view('index');
});

Route::get('evidencias','EvidenciasController@index');
Route::get('calificaciones','CalificacionesController@index');
Route::get('ptc','ptcController@index');
Route::get('ptc/get','ptcController@get');
Route::get('PublicarEvidencias','publicarEvidenciasController@index');
Route::get('registro','registroController@index');
