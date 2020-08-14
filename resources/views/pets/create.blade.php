@extends('layout')

@section('title', 'Ingreso mascotas')

@section('content')

    <h1>Ingreaso de mascotas</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templatepet.store') }}">

        @csrf
        <label>
            Rut <br>
            <input type="text" name="rut">
        </label>

        <br>
        
        <label>
            Nombre <br>
            <input type="text" name="name">
        </label>

        <br>

        <label>
            Tipo de animal <br>
            <input type="text" name="animaltype">
        </label>

        <br>

        <label>
            Raza <br>
            <input type="text" name="race">
        </label>

        <br>

        <label>
            Edad <br>
            <input type="text" name="age">
        </label>

        <br>
        <button>Enviar</button>
    </form>

@endsection