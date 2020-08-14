@extends('layout')

@section('title', 'Mascota | ' . $pet->name)

@section('content')

    <h1>{{ $pet->name }}</h1>

    <a href="{{ route('templatepet.edit', $pet) }}"><button>Editar</button></a>

    <form method="POST" action="{{ route('templatepet.destroy', $pet) }}">

        @csrf 
        @method('DELETE')
        <button>Elminar</button>

    </form>

    <p>Tipo de animal: {{ $pet->animaltype }} <br> Raza: {{ $pet->race }}</p>
    <p>Edad: {{ $pet->age }}</p>
    <p>{{ $pet->updated_at->diffForHumans() }}</p>

@endsection