@extends('layout')

@section('title', 'Editar pacientes')

@section('content')

    <h1>Editar pacientes</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templatepatient.update', $patient) }}">

        @csrf
        @method('PATCH')
        <label>
            Rut <br>
            <input type="text" name="rut" value="{{ $patient->rut }}">
        </label>

        <br>
        
        <label>
            Nombre <br>
            <input type="text" name="name" value="{{ $patient->name }}">
        </label>

        <br>
        
        <label>
            Apellido paterno <br>
            <input type="text" name="firstname" value="{{ $patient->firstname }}">
        </label>

        <br>
        
        <label>
            Apellido materno <br>
            <input type="text" name="lastname" value="{{ $patient->lastname }}">
        </label>

        <br>
        
        <label>
            Direccion <br>
            <textarea name="address">{{ $patient->address }}</textarea>
        </label>

        <br>

        <label>
            Telefono <br>
            <input type="text" name="phone" value="{{ $patient->phone }}">
        </label>

        <br>

        <button>Enviar</button>
    </form>

@endsection