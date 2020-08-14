@extends('layout')

@section('title', 'Pide tu hora | ' . $appointment->name)

@section('content')
    @auth
    @if(Auth::user()->name == 'Veterinario'  || Auth::user()->name == 'Secretaria' )
        <h1>{{ $appointment->name }} {{ $appointment->lastname }}</h1>

    <a href="{{ route('appointment.edit', $appointment) }}"><button>Editar</button></a>

    <form method="POST" action="{{ route('appointment.destroy', $appointment) }}">

        @csrf 
        @method('DELETE')
        <button>Elminar</button>

    </form>
    @endif
    
    @endauth
    <div class='content'>
    <h3><p>Descripcion:<br> {{ $appointment->description }}</p></h3>
    <p>Fecha: {{ $appointment->date }} <br> Hora: {{ $appointment->time }}</p>
    <p>{{ $appointment->updated_at->diffForHumans() }}</p>
    </dir>
   

@endsection