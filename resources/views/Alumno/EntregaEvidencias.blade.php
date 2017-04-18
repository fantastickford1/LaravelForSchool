<!Doctype>
<html>
<head>
        <meta charset="UTF-8">
        <title>Entrega de Evidencias</title>
    </head>

    <body>
       @extends('Templates.mainAlumno')

        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 42%;">Entrega de Evidencias</h2>

        <div class="col-md-6" style="position: absolute;top: 39%;left: 24%;">
          <table class="table table-striped">
            <thead style="background-color: darkcyan; color:white; text-align: center;">
              <tr>
                <th>Alumno:</th>
                <th>Materia:</th>
                <th>Nombre de la evidencia:</th>
                <th>Archivo:</th>
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
