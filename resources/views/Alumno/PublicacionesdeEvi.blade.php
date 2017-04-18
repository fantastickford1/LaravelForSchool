<!Doctype>
@extends('Templates.mainAlumno')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Publicación de Evidencias</title>
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css.map')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.min.css')!!}">

    </head>

    <body>
        @yield('nav')
        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 40%;">Publicación de Evidencias</h2>

        <div class="col-md-6" style="position: absolute;top: 39%;left: 24%;">
          <table class="table table-striped">
            <thead style="background-color: darkcyan; color:white; text-align: center;">
              <tr>
                <th>Materia:</th>
                <th>Nombre de la evidencia:</th>
                <th>Archivo:</th>
                <th>Entregar:</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><button>Subir</button></td>
                <td><button>Enviar</button></td>
              </tr>
            </tbody>
          </table>


        </div>
    </body>

</html>
