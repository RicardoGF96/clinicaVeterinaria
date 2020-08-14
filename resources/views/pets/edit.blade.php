@extends('layout')

@section('title', 'Editar mascotas')

@section('content')

    <h1>Editar mascotas</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templatepet.update', $pet) }}">

        @csrf
        @method('PATCH')
        <label>
            Rut <br>
            <input type="text" name="rut" value="{{ $pet->rut }}">
        </label>

        <br>
        
        <label>
            Nombre <br>
            <input type="text" name="name" value="{{ $pet->name }}">
        </label>

        <br>

        <label>
            Tipo de animal <br>
            <input type="text" name="animaltype" value="{{ $pet->animaltype }}">
        </label>

        <br>

        <label>
            Raza <br>
            <input type="text" name="race" value="{{ $pet->race }}">
        </label>

        <br>

        <label>
            Edad <br>
            <input type="text" name="age" value="{{ $pet->age }}">
        </label>

        <br>
        <button>Enviar</button>
    </form>

@endsection