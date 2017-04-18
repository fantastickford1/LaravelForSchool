<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumno;
use App\PTC;
use App\Asesor;
use App\User;

class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Registrar');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd(request()->all());


        /**/
        switch (request()->Perfil) {
          case 'Alumno':
          //$Alumno = new Alumno;
          //echo "<script type='text/javascript'>alert('Alumno');</script>";
          Alumno::create([
             'Nombre'=> request('Nombre'),
             'Apellido'=> request('Apellido')
          ]);
          User::create([
              'name'=> request('Usuario'),
              'profile'=> request()->Perfil,
              'email'=> request('Correo'),
              'password'=> request('password')
          ]);
            break;
          case 'PTC':
          //$PTC = new PTC;
          //echo "<script type='text/javascript'>alert('PTC');</script>";
          PTC::create([
              'Nombre'=> request('Nombre'),
              'Apellido'=> request('Apellido')
          ]);
          User::create([
              'name'=> request('Usuario'),
              'email'=> request('Correo'),
              'profile'=> request()->Perfil,
              'password'=> request('password')
          ]);
          break;

          default:
            # code...
            break;
        }
        /**/

        return redirect('/');
    }

}
