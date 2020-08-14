@extends('layout')

@section('title', 'Pide tu hora')

@section('content')
     <div class='content'>
    <h1>Pide tu hora</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('appointment.store') }}">

        @csrf
        <label>
            Nombre <br>
            <input type="text" name="name">
        </label>

        <br>
        
        <label>
            Apellido <br>
            <input type="text" name="lastname">
        </label>

        <br>
        
        <label>
            Fecha <br>
            <input type="date" name="date">
        </label>

        <br>
        
        <label>
            Hora <br>
            <input type="time" name="time">
        </label>

        <br>
        
        <label>
            ¿Como podemos ayudarte? <br>
            <textarea name="description" rows="5" cols="50" placeholder="Describenos tu Mascota y sus Sintomas!"></textarea>
        </label>
        <br>
        <button>Enviar</button>
    </form>
</div>
@endsection