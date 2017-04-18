<!Doctype>

@extends('Templates.mainAlumno')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alumno</title>

    </head>

    <body>

        @yield('nav')
        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 42%;">Bienvenido Alumn@</h2>
        <div>
            <img src="{!!asset('img/alumno.png')!!}" style="position: absolute;top: 28%;left: 40%;width: 20%;">
        </div>

    </body>

</html>
