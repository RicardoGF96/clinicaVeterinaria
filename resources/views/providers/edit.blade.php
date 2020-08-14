@extends('layout')

@section('title', 'Editar proveedores')

@section('content')

    <h1>Editar proveedores</h1>

    @if($errors->any())

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('templateprovider.update', $provider) }}">

        @csrf
        @method('PATCH')
        <label>
            Rut <br>
            <input type="text" name="rut" value="{{ $provider->rut }}">
        </label>

        <br>
        
        <label>
            Nombre <br>
            <input type="text" name="name" value="{{ $provider->name }}">
        </label>

        <br>

        <label>
            Tipo de medicamento <br>
            <input type="text" name="typemed" value="{{ $provider->typemed }}">
        </label>

        <br>

        <label>
            Nombre del medicamento <br>
            <input type="text" name="namemed" value="{{ $provider->namemed }}">
        </label>

        <br>

        <label>
            Descripcion del medicamento <br>
            <textarea name="description">{{ $provider->description }}</textarea>
        </label>

        <br>

        <label>
            Cantidad del medicamento <br>
            <input type="text" name="cant" value="{{ $provider->cant }}">
        </label>

        <br>

        <label>
            Fecha de entrega <br>
            <input type="date" name="date" value="{{ $provider->date }}">
        </label>

        <br>
        <button>Enviar</button>
    </form>

@endsection