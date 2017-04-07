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


            <form class="" action="/store" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                        {!!Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
                        <br>
                        {!!Form::text('Apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
                        <br>
                        <h5 style="color:gray">Perfil:</h5>
                        <div style="text-align: center; color:gray">
                            {!!Form::label('Alumno', 'Alumno')!!}
                            {!!Form::radio('Perfil','Alumno',false,['class'=>'radio-inline'])!!}
                            {!!Form::label('PTC', 'PTC')!!}
                            {!!Form::radio('Perfil','PTC',false,['class'=>'radio-inline'])!!}

                        </div>

                        {!!Form::text('Usuario',null,$atributes=['class'=>'form-control','placeholder'=>'Usuario'])!!}
                        <br>
                        {!!Form::email('Correo',null,['class'=>'form-control','placeholder'=>'Correo'])!!}
                        <br>
                        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password'])!!}
                        <br>
                        {!!Form::submit('Registrar',['style'=>'background-color: darkcyan;color:white; position: absolute;left: 39%;']);!!}
                </div>
            </form>
            <button onclick="window.location.replace('/');" style="background-color: darkcyan;color:white; position: absolute;left: 39%;">Volver</button>

        </div>

    </body>

</html>
