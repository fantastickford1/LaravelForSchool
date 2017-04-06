<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Evidencias</title>
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
                <li ><a href="#" style="color:white">Inicio</a></li>
                <li><a href="#about" style="color:white">Publicar</a></li>
                <li><a href="#contact" style="color:white">Calificación</a></li>
                <li><a href="#contact" style="color:white">Entrega</a></li>
                <li style="position: absolute;right: 5%;"><a href="#contact" style="color:white">Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 42%;">Evidencias</h2>

        <div class="col-md-7" style="position: absolute;top: 39%;left: 24%;">
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
                <td><input type="text" class="form-control"><button>Descargar</button> </td>
                <td><button>Subir</button></td>
                <td><button>Enviar</button></td>
              </tr>
            </tbody>
          </table>


        </div>
    </body>

</html>
