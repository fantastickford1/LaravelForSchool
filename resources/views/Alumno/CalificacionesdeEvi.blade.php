<!Doctype>
@extends('Templates.mainAlumno')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calificaciones</title>


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
                <td><label>Lola</label></td>
                <td><label>143300</label></td>
                <td><label>Registro</label></td>
                <td><label>90</label></td>

              </tr>
            </tbody>
          </table>
        </div>
    </body>

</html>
