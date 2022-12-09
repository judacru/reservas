@extends('layouts.plantilla')

@section('title' , 'Editar clientes')

@section('content')
    <h1>En esta pagina podrás editar un cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="post">

        @csrf
        
        @method('put')

        <label >
            Documento:
            <br>
            <input type="text" name="documento"value="{{old('documento', $cliente->documento)}}">
        </label>
        @error('documento')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre"value="{{old('nombre', $cliente->nombre)}}">
        </label>
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label >
            Correo:
            <br>
            <input name="correo" value="{{old('correo', $cliente->correo)}}">
        </label>
        @error('correo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection


