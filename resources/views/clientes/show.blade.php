@extends('layouts.plantilla')

@section('title' , 'Cliente '  . $cliente->nombre)

@section('content')
    <h1>Cliente {{  $cliente->nombre }}</h1>
    <a href="{{ route("clientes.index") }}">Volver a eventos</a>
    <br>
    <a href="{{ route('clientes.edit', $cliente) }}">Editar cliente</a>
    <p><strong>Documento: </strong>{{ $cliente->documento }}</p>
    <p><strong>Correo: </strong>{{ $cliente->correo }}</p>
  

    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection


