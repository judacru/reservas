@extends('layouts.plantilla')

@section('title' , 'Crear eventos')

@section('content')
    <h1>En esta pagina podrás crear un Evento</h1>
    <form action="{{ route('eventos.store') }}" method="POST">

        @csrf
        
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
            Stock:
            <br>
            <input type="text" name="stock" value="{{old('stock')}}">
            
        </label>
        @error('stock')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label >
            Precio:
            <br>
            <input  name="precio" value="{{old('precio')}}">
        </label>
        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection


