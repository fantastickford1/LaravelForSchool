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
        <h1 data-brackets-id="369" style="color: darkcyan;left: 47%;position: absolute;top: 8%;">Login</h1>

        <div style="position: absolute;left: 35%;width: 32%; top: 31%;">
            <form class="" action="/login" method="post">
                {{ csrf_field()}}
                <input class="form-control" placeholder="User" type="text" >
                <br>
                <input class="form-control" placeholder="Password" type="text">

                <br>
                <label class="radio-inline"><input type="radio" value="perfil">PTC </label>
                <label class="radio-inline"><input type="radio" value="perfil"> Alumno</label>
                 <br>
                 <br>
                <button style="background-color: darkcyan;color:white; position: absolute;left: 39%;">Entrar</button>
            </form>
        </div>

        <div>
            <br><img src="{!!asset('img/regis.jpg')!!}" style="position: absolute;width: 34%;top: 63%;left: 34%;">
            <button onclick="window.location.replace('/registro');" style="background-color: darkcyan;color:cyan; position: absolute;left: 47.5%;top: 68.5%;height: 5.5%;">Registrarse</button>
        </div>

    </body>

</html>
