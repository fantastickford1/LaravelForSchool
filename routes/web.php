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

use App\User;

Route::get('/', function () {
  // Login view
    return view('index');
});

Route::post('/login', function()
{
    //dd(request()->all());
    $userName = request()->Usuario;

    $Password = request()->password;

    $users = User::where('name','=',$userName)->get();
    //return $aux;
});

Route::get('registro','registroController@index');
Route::post('/store','registroController@store');
Route::get('Alumno','AlumnoController@index');
Route::get('Alumno/Publicaciones','AlumnoController@publicaciones');
Route::get('Alumno/Calificaciones','AlumnoController@calificiones');
Route::get('Alumno/CargaMaterias','AlumnoController@cargaMaterias');
Route::get('Alumno/Entregas','AlumnoController@entregas');
Route::get('Alumno/SolicitudAsesoria','AlumnoController@solicitudAsesoria');
Route::get('Alumno/Asesorias','AlumnoController@asesorias');

Route::get('PTC','ptcController@index');
Route::get('PTC/Evidencias','ptcController@entrega');
Route::get('PTC/Calificaciones','ptcController@calificar');
Route::get('PTC/PublicarEvidencias','ptcController@publicar');
