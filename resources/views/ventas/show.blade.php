@extends('layouts.plantilla')

@section('title' , 'Evento '  . $evento->nombre)

@section('content')
    <h1>Bienvenido al evento {{  $evento->nombre }}</h1>
    <a href="{{ route("eventos.index") }}">Volver a eventos</a>
    <br>
    <a href="{{ route('eventos.edit', $evento) }}">Editar evento</a>
    <p><strong>Stock: </strong>{{ $evento->stock }}</p>
    <p><strong>Precio: </strong>{{ $evento->precio }}</p>
  
@endsection


