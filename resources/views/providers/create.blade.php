@extends('layout')

@section('title', 'Ingreso proveedores')

@section('content')

    <h1>Ingreaso de proveedores</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templateprovider.store') }}">

        @csrf
        <label>
            Rut <br>
            <input type="text" name="rut">
        </label>

        <br>
        
        <label>
            Nombre <br>
            <input type="text" name="name">
        </label>

        <br>

        <label>
            Tipo de medicamento <br>
            <input type="text" name="typemed">
        </label>

        <br>

        <label>
            Nombre del medicamento <br>
            <input type="text" name="namemed">
        </label>

        <br>

        <label>
            Descripcion del medicamento <br>
            <textarea name="description"></textarea>
        </label>

        <br>

        <label>
            Cantidad del medicamento <br>
            <input type="text" name="cant">
        </label>

        <br>

        <label>
            Fecha de entrega <br>
            <input type="date" name="date">
        </label>

        <br>
        <button>Enviar</button>
    </form>

@endsection