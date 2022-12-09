@extends('layouts.plantilla')

@section('title' , 'Editar eventos')

@section('content')
    <h1>En esta pagina podrás editar un evento</h1>
    <form action="{{ route('eventos.update', $evento) }}" method="post">

        @csrf
        
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre"value="{{old('nombre', $evento->nombre)}}">
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
            <input name="stock" value="{{old('stock', $evento->stock)}}">
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
            <input type="text" name="precio"value="{{old('precio', $evento->precio)}}">
        </label>
        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection


