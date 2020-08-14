@extends('layout')

@section('title', 'Pacientes | ' . $patient->name)

@section('content')

    <h1>{{ $patient->name }} {{ $patient->firstname }} {{ $patient->lastname }}</h1>

    <a href="{{ route('templatepatient.edit', $patient) }}"><button>Editar</button></a>

    <form method="POST" action="{{ route('templatepatient.destroy', $patient) }}">

        @csrf 
        @method('DELETE')
        <button>Elminar</button>

    </form>

    <p>Rut: {{ $patient->rut }}</p>
    <p>Direccion: {{ $patient->address }} <br> Telefono: {{ $patient->phone }}</p>
    <p>{{ $patient->updated_at->diffForHumans() }}</p>

@endsection