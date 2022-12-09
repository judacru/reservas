@extends('layouts.plantilla')

@section('title' , 'Crear clientes')

@section('content')
    <h1>En esta pagina podrás crear un Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">

        @csrf
        
        <label >
            Documento:
            <br>
            <input  name="documento" value="{{old('documento')}}">
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
            <input type="text" name="nombre" value="{{old('nombre')}}">
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
            <input type="text" name="correo" value="{{old('correo')}}">
            
        </label>
        @error('correo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        
        <button type="submit">Enviar formulario</button>
    </form>
@endsection


