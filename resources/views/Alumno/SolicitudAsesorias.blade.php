<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Solicitud de Asesorias</title>
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css.map')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.min.css')!!}">
    </head>

    <body>
        <nav class="navbar-fixed-top" style="background-color: darkcyan;">
          <div class="container" style="background-color: darkcyan;">
            <div id="navbar" class="navbar-collapse collapse in" aria-expanded="true">
              <ul class="nav navbar-nav">
                <li><a href="/Alumno" style="color:white">Inicio</a></li>
                <li><a href="Alumno/Publicaciones" style="color:white">Publicación</a></li>
                <li><a href="Alumno/Calificaciones" style="color:white">Calificación</a></li>
                <li><a href="Alumno/ValidacionMaterias" style="color:white">Validación</a></li>
                <li><a href="Alumno/Entregas" style="color:white">Entregas</a></li>
                <li><a href="Alumno/SolicitudAsesoria" style="color:white">Solicitud de Asesoria</a></li>
                <li><a href="Alumno/Asesorias" style="color:white">Asesorias</a></li>
                <li style="position: absolute;right: 5%;"><a href="#contact" style="color:white">Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 35%;">Solicitud de Asesorias</h2>

        <div class="col-md-6" style="position: absolute;top: 39%;left: 24%;">
          <table class="table table-striped">
            <thead style="background-color: darkcyan; color:white; text-align: center;">
              <tr>
                <th>Alumno:</th>
                <th>Matricula:</th>
                <th>Dia:</th>
                <th>Hora:</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
               <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><button>Enviar</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </body>

</html>
