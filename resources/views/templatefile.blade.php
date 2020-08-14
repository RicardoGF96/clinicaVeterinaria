@extends('layout')

@section('title', 'Fichas veterinarias')

@section('content')

    <h1>Pagina de fichas veterinarias</h1>

    @include('partials.navadmission')

    <a href="{{ route('templatefile.create') }}"><button>Crear ficha</button></a>

    <ul>

        @forelse($file as $fileItem) <!-- Recorre con un for el arreglo file ubicado en el TemplatefileController -->
            <li><a href="{{ route('templatefile.show', $fileItem) }}">{{ $fileItem->inn }} {{ $fileItem->attention }}</a></li> <!-- Imprime en la vista cada elemnto del arreglo -->
        @empty
            <li>No hay fichas veterinarias para mostrar.</li> <!-- Si no hay ningun elemento en el arreglo muestra este mensaje -->
        @endforelse

    </ul>

@endsection