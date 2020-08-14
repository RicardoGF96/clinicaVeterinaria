@extends('layout')

@section('title', 'Ingreso fichas veterinarias')

@section('content')

    <h1>Ingreaso de fichas veterinarias</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templatefile.store') }}">

        @csrf
        <label>
            Rut del dueño <br>
            <input type="text" name="rut">
        </label>

        <br>

        <label>
            Nombre animal <br>
            <input type="text" name="name">
        </label>

        <br>

        <label>
            Codigo de ingreso <br>
            <input type="text" name="inn">
        </label>

        <br>
        
        <label>
            Tipo de atencion <br>
            <textarea name="attention"></textarea>
        </label>

        <br>

        <label>
            Requiere cirugia (Si/No) <br>
            <input type="text" name="surgery">
        </label>

        <br>

        <label>
            Medicamentos <br>
            <textarea name="meds"></textarea>
        </label>

        <br>

        <label>
            Tipo de medicamento <br>
            <input type="text" name="typemed">
        </label>

        <br>

        <label>
            Requiere reposo (Si/No) <br>
            <input type="text" name="rest">
        </label>

        <br>

        <label>
            Dias de reposo <br>
            <input type="text" name="daysofrest">
        </label>

        <br>

        <label>
            Fecha de atencion <br>
            <input type="date" name="date">
        </label>

        <br>

        <label>
            Diagnostico <br>
            <textarea name="diagnosis"></textarea>
        </label>

        <br>
        <button>Enviar</button>
    </form>

@endsection