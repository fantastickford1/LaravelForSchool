<!Doctype>
@extends('Templates.mainPTC')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calificaciones</title>
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css.map')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.min.css')!!}">

    </head>

    <body>
        @yield('nav')
        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 42%;">Calificaciones</h2>

        <div class="col-md-6" style="position: absolute;top: 39%;left: 24%;">
          <table class="table table-striped">
            <thead style="background-color: darkcyan; color:white; text-align: center;">
              <tr>
                <th>Nombre del alumno:</th>
                <th>Matricula:</th>
                <th>Nombre de la evidencia:</th>
                <th>Calificación:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
              </tr>
            </tbody>
          </table>

            <button>Subir</button>
        </div>
    </body>

</html>
