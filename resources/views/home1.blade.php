@extends('layout') <!-- Importa el contenido de la vista layout -->

@section('title', 'Pagina de inicio') <!-- Se envia al yield title el valor pagina de inicio sin necesidad de un endsection -->

@section('content') <!-- Envia hacia la vista layout todo el contenido ingresado en la posición que se encuentra el yield -->
	{{-- Vista invitados --}}
	@guest
		<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Estos valores corresponden al icono de la pestaña -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ABF6D1;
                color: #57bbe0;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
            }

            .full-height {
                height: 75vh;
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
            <div class="content">
                <div class="title m-b-md">
                          <img src="https://i.imgur.com/NnoLoWv.png">
                </div>

                <div class="links">
                    <a href="/about">Quienes Somos</a>
                    <a href="/contact">Contacto</a>
                    <a href="/appointment">Agenda tu Hora</a>
                    <a href="/login">Login</a>
                </div>
            </div>
        </div>
    </body>
	@endguest

	{{-- Vistas Especificas --}}
	@auth
		@if(Auth::user()->name == 'Secretaria')
			<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Estos valores corresponden al icono de la pestaña -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            .full-height {
                height: 75vh;
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
                color: #6E0AAF;
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
            <div class="content">
                <div class="title m-b-md">
                          <img src="https://i.imgur.com/TH0fxgu.png">
                </div>

                <div class="links">
                    <a href="/appointment">Agendar Paciente</a>
                </div>
            </div>
        </div>
    </body>
		@endif
	 @if(Auth::user()->name == 'Veterinario')
			<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Estos valores corresponden al icono de la pestaña -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            .full-height {
                height: 75vh;
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
                color: #08891B;
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
            <div class="content">
                <div class="title m-b-md">
                          <img src="https://i.imgur.com/bplJYvS.png">
                </div>

                <div class="links">
                    <a href="/appointment">Horas Pacientes</a>
                    <a href="/templatepatient">Ingresar Paciente</a>
                    <a href="/templatepet">Ingresar Mascota</a>
                    <a href="/templateprovider">Ingresar Proveedores</a>
                    <a href="/templatefile">Fichas</a>

                </div>
            </div>
        </div>
    </body>
		@endif
	 
	@endauth
	



@endsection
