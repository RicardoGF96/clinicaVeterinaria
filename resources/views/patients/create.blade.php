@extends('layout')

@section('title', 'Ingreso pacientes')

@section('content')

    <h1>Ingreaso de pacientes</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templatepatient.store') }}">

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
            Apellido paterno <br>
            <input type="text" name="firstname">
        </label>

        <br>
        
        <label>
            Apellido materno <br>
            <input type="text" name="lastname">
        </label>

        <br>
        
        <label>
            Direccion <br>
            <textarea name="address"></textarea>
        </label>

        <br>

        <label>
            Telefono <br>
            <input type="text" name="phone">
        </label>

        <br>

        <button>Enviar</button>
    </form>

@endsection