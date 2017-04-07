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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        //$User = new User;

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
              'profile'=> request(request()->Perfil),
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
              'password'=> request('password')
          ]);
          break;

          case 'Asesor':
          //$Asesor = new Asesor;
          //echo "<script type='text/javascript'>alert('Asesor');</script>";
          Asesor::create([
              'Nombre'=> request('Nombre'),
              'Apellido'=> request('Apellido')
          ]);
          User::create([
              'name'=> request('Usuario'),
              'email'=> request('Correo'),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
