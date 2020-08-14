@extends('layout')

@section('title', 'Acerda de nosotros')

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

            <div class="content">
                <div class="title m-b-md">
                    ¿Quienes somos?
                </div>

                <div class="Info">
                    <h1>Equipo Clinica Veterinaria Molina </h1>
                    <h2>Somos un equipo de profesionales conformado <br>
                        por especialistas en salud animal.<br>
                        <img src="https://zoovetesmipasion.com/wp-content/uploads/2017/04/veterinario.png">
                    </h2>
                    <a href="/">volver al Home</a><br><br>
                </div>
            </div>
        </div>
    </body>

@endsection