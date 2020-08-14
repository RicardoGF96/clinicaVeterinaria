@extends('layout')

@section('title', 'Ingreso mascotas')

@section('content')

    <h1>Pagina de ingreso de mascotas</h1>

    @include('partials.navadmission')

    <a href="{{ route('templatepet.create') }}"><button>Ingresar mascota</button></a>

    <ul>

        @forelse($pet as $petItem) <!-- Recorre con un for el arreglo pet ubicado en el TemplatepetController -->
            <li><a href="{{ route('templatepet.show', $petItem) }}">{{ $petItem->rut }} {{ $petItem->name }}</a></li> <!-- Imprime en la vista cada elemnto del arreglo -->
        @empty
            <li>No hay mascotas para mostrar.</li> <!-- Si no hay ningun elemento en el arreglo muestra este mensaje -->
        @endforelse

    </ul>

@endsection