@extends('layout')

@section('title', 'Ingreso pacientes')

@section('content')

    <h1>Pagina de ingreso de pacientes</h1>

    @include('partials.navadmission')

    <a href="{{ route('templatepatient.create') }}"><button>Ingresar paciente</button></a>

    <ul>

        @forelse($patient as $patientItem) <!-- Recorre con un for el arreglo patient ubicado en el TemplatepatientController -->
            <li><a href=" {{ route('templatepatient.show', $patientItem) }}">{{ $patientItem->rut }} {{ $patientItem->name }}</a></li> <!-- Imprime en la vista cada elemnto del arreglo -->
        @empty
            <li>No hay pacientes para mostrar.</li> <!-- Si no hay ningun elemento en el arreglo muestra este mensaje -->
        @endforelse

    </ul>

@endsection