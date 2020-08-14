@extends('layout')

@section('title', 'Pide tu hora')

@section('content')
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Estos valores corresponden al icono de la pestaña -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            .full-height {
                height: 150vh;
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

        </style>
    </head>
    <body>
    	<div class='content'>
			<h1>Agenda tu Hora!</h1>

			<a href="{{ route('appointment.create') }}"><button>Agendar</button></a>
			<ul>
				@forelse($appointment as $appointmentItem)
				<li><a href="{{ route('appointment.show', $appointmentItem) }}">{{ $appointmentItem->name }}  {{ $appointmentItem->date }}</a></li>
				@empty 
				<li>No hay citas para mostrar.</li>
				@endforelse
				<li><a href="/">Volver al home</a></li>
    		</ul>

			@endsection
    	</div>
    </body>
    
