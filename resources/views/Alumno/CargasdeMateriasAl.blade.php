<!Doctype>
@extends('Templates.mainAlumno')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validación y Carga</title>

    </head>

    <body>

       @yield('nav')
        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 40%;">Cargar Materias</h2>

        <div class="col-md-6" style="position: absolute;top: 39%;left: 24%;">
          <table class="table table-striped">
            <thead style="background-color: darkcyan; color:white; text-align: center;">
              <tr>
                <th>Alumno:</th>
                <th>Matricula:</th>
                <th>Nombre del Archivo:</th>
                <th>Archivo:</th>
                <th>Confirmación:</th>

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


        <h2 style="color: darkcyan;position: absolute;top: 60%;left: 30%;">Aceptación de cargas de materia</h2>
        <div class="col-md-6" style="position: absolute;top: 69%;left: 24%;">

            <div style="position: absolute; text-align: center;background-color: darkcyan;width: 95%;color: white;">
            <label>Aceptado</label>
            </div>


        </div>
    </body>

</html>
