@extends('layout')

@section('title', 'Ingreso proveedores')

@section('content')

    <h1>Pagina de ingreso de proveedores</h1>

    @include('partials.navadmission')

    <a href="{{ route('templateprovider.create') }}"><button>Ingresar proveedor</button></a>

    <ul>

        @forelse($provider as $providerItem) <!-- Recorre con un for el arreglo provider ubicado en el TemplateproviderController -->
            <li><a href="{{ route('templateprovider.show', $providerItem) }}">{{ $providerItem->rut }} {{ $providerItem->name }}</a></li> <!-- Imprime en la vista cada elemnto del arreglo -->
        @empty
            <li>No hay proveedores para mostrar.</li> <!-- Si no hay ningun elemento en el arreglo muestra este mensaje -->
        @endforelse

    </ul>

@endsection