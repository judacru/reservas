@extends('layouts.plantilla')

@section('title' , 'Clientes')

@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <a href="{{route('clientes.create') }}">Crear cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
        <li>
            <a href="{{route('clientes.show', $cliente->id) }}">{{ $cliente->nombre }}</a>
        </li>
            
        @endforeach
    </ul>
    {{ $clientes->links() }}
@endsection

