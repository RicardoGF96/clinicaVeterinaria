@extends('layout')

@section('title', 'Editar fichas veterinarias')

@section('content')

    <h1>Editar fichas veterinarias</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templatefile.update', $file) }}">

        @csrf
        @method('PATCH')
        <label>
            Rut del dueño <br>
            <input type="text" name="rut" value="{{ $file->rut }}">
        </label>

        <br>

        <label>
            Nombre animal <br>
            <input type="text" name="name" value="{{ $file->name }}">
        </label>

        <br>

        <label>
            Codigo de ingreso <br>
            <input type="text" name="inn" value="{{ $file->inn }}">
        </label>

        <br>
        
        <label>
            Tipo de atencion <br>
            <textarea name="attention">{{ $file->attention }}</textarea>
        </label>

        <br>

        <label>
            Requiere cirugia (Si/No) <br>
            <input type="text" name="surgery" value="{{ $file->surgery }}">
        </label>

        <br>

        <label>
            Medicamentos <br>
            <textarea name="meds">{{ $file->meds }}</textarea>
        </label>

        <br>

        <label>
            Tipo de medicamento <br>
            <input type="text" name="typemed" value="{{ $file->typemed }}">
        </label>

        <br>

        <label>
            Requiere reposo (Si/No) <br>
            <input type="text" name="rest" value="{{ $file->rest }}">
        </label>

        <br>

        <label>
            Dias de reposo <br>
            <input type="text" name="daysofrest" value="{{ $file->daysofrest }}">
        </label>

        <br>

        <label>
            Fecha de atencion <br>
            <input type="date" name="date" value="{{ $file->date }}">
        </label>

        <br>

        <label>
            Diagnostico <br>
            <textarea name="diagnosis">{{ $file->diagnosis }}</textarea>
        </label>

        <br>
        <button>Enviar</button>
    </form>

@endsection