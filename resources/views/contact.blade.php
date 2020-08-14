@extends('layout')

@section('title', 'Contactanos')

@section('content')
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Equipo</title>
        <link rel = "icon" href =  "https://cdn.icon-icons.com/icons2/1448/PNG/512/42491hospital_98958.png" type = "image/x-icon">  <!-- Estos valores corresponden al icono de la pestaña -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ABF6D1;
                color: #2F6148;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
            }

            .full-height {
                height: 60vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #149c7a;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class='content'>
            <h1>Contactanos</h1>
            <h2>Recuerda que puedes contactarnos a traves del siguiente formulario!<br>Responderemos todas tus dudas!<br>Te esperamos!</h2>

    <form method="POST" action="{{ route('contact') }}"> <!-- El metodo guarda la informacion en la ruta contact -->

        @csrf <!-- Metodo de proteccion contra ataques de suplantacion de identidad a traves de un token. Siempre agregar en formularios -->
        <input name="name" placeholder="Nombre..." value={{ old('name') }}><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <input type="email" name="email" placeholder="Email... " value={{ old('email') }}><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input name="subject" placeholder="Asunto..." value={{ old('subject') }}><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="content" placeholder="Mensaje..." >{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button>Enviar</button>

    </form>

@endsection

        </div>
    </body>
    