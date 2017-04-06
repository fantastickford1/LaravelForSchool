<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.css.map')!!}">
        <link rel="stylesheet" href="{!!URL::asset('css/bootstrap-theme.min.css')!!}">

    </head>

    <body>
        <h1 data-brackets-id="369" style="color: darkcyan;left: 47%;position: absolute;top: 8%;">Registro</h1>
        <img src="img/icor.jpg" data-brackets-id="340" style="position: absolute; width: 10%; left: 35%; top:5%;">

        <div style="position: absolute;left: 35%;width: 32%; top: 31%;">
            <input class="form-control" placeholder="Nombre" type="text" >
            <br>
            <input class="form-control" placeholder="Apellido" type="text">
            <br>
            <h5 style="color:gray">Perfil:</h5>
            <br>
            <div style="text-align: center; color:gray">
            <label class="checkbox-inline"><input type="checkbox" value="">PTC </label>
            <label class="checkbox-inline"><input type="checkbox" value=""> Asesor</label>
            <label class="checkbox-inline"><input type="checkbox" value=""> Alumno</label>
            </div>

            <br>
            <input class="form-control" placeholder="User" type="text" >
            <br>
            <input class="form-control" placeholder="Password" type="text">
            <br>
            <input class="form-control" placeholder="Correo" type="text">
            <br>
            <button style="background-color: darkcyan;color:white; position: absolute;left: 39%;">Entrar</button>
        </div>

    </body>

</html>
