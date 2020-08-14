@extends('layout')

@section('title', 'Ficha | ' . $file->inn)

@section('content')

    <h1>{{ $file->attention }}</h1>

    <a href="{{ route('templatefile.edit', $file) }}"><button>Editar</button></a>

    <form method="POST" action="{{ route('templatefile.destroy', $file) }}">

        @csrf 
        @method('DELETE')
        <button>Elminar</button>

    </form>

    <p>Rut del dueño: {{ $file->rut }} <br> Nombre animal: {{ $file->name }}</p>
    <p>Cirugia: {{ $file->surgery }}</p>
    <p>Reposo: {{ $file->rest }} <br> Dias de reposo: {{ $file->daysofrest }}</p>
    <p>Medicamentos: {{ $file->meds }} <br> Tipo: {{ $file->typemed }}</p>
    <p>Diagnostico: {{ $file->diagnosis }}</p>
    <p>Fecha: {{ $file->date }}</p>
    <p>{{ $file->updated_at->diffForHumans() }}</p>

@endsection