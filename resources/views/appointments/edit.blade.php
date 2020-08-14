@extends('layout')

@section('title', 'Pide tu hora')

@section('content')

    
    <h1>Editar hora</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('appointment.update', $appointment) }}">

        @csrf
        @method('PATCH')
        <label>
            Nombre <br>
            <input type="text" name="name" value="{{ $appointment->name }}">
        </label>

        <br>
        
        <label>
            Apellido <br>
            <input type="text" name="lastname" value="{{ $appointment->lastname }}">
        </label>

        <br>
        
        <label>
            Fecha <br>
            <input type="date" name="date" value="{{ $appointment->date }}">
        </label>

        <br>
        
        <label>
            Hora <br>
            <input type="time" name="time" value="{{ $appointment->time }}">
        </label>

        <br>
        
        <label>
            Descripcion <br>
            <textarea name="description">{{ $appointment->description }}</textarea>
        </label>
        <br>
        <button>Enviar</button>
    </form>

@endsection