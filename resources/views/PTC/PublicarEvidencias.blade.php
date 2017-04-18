<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PTC</title>
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

        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 40%;">Publicar Evidencias</h2>

        <div style="position: absolute;top: 32%;left: 30%;">
            <input class="form-control" placeholder="Nombre" type="text" style="width: 250%;">
            <br>
            <textarea class="form-control" rows="5" placeholder="Descripción" style="width: 250%;"></textarea>
            <br>
            <button style="background-color: darkcyan; color:white">Adjuntar Archivo</button>
            <br>
            <br>
            <button style="background-color: darkcyan;color:white">Enviar</button>
        </div>


    </body>

</html>
