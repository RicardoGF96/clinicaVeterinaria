@extends('layout')

@section('title', 'Proveedores | ' . $provider->name)

@section('content')

    <h1>{{ $provider->name }}</h1>

    <a href="{{ route('templateprovider.edit', $provider) }}"><button>Editar</button></a>

    <form method="POST" action="{{ route('templateprovider.destroy', $provider) }}">

        @csrf 
        @method('DELETE')
        <button>Elminar</button>

    </form>

    <p>Nombre medicamento: {{ $provider->namemed }} <br> Tipo de medicamento: {{ $provider->typemed }} <br>
       Cantidad: {{ $provider->cant }} <br> Fecha: {{ $provider->date }}</p>
    <p>Descripcion: {{ $provider->description }}</p>
    <p>{{ $provider->updated_at->diffForHumans() }}</p>

@endsection