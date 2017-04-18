<!Doctype>
@extends('Templates.mainPTC')
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

        @yield('nav')

        <h2 style="color: darkcyan;position: absolute;top: 17%;left: 42%;">Bienvenido PTC</h2>
        <div>
            <img data-brackets-id="600" src="img/teacher.png" style="position: absolute;top: 28%;left: 40%;width: 20%;">
        </div>

    </body>

</html>
