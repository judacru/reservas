@extends('layouts.plantilla')

@section('title' , 'Eventos')

@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <a href="{{route('eventos.create') }}">Crear evento</a>
    <ul>
        @foreach ($eventos as $evento)
        <li>
            <a href="{{route('eventos.show', $evento) }}">{{ $evento->nombre }}</a>
        </li>
            
        @endforeach
    </ul>
    {{ $eventos->links() }}
@endsection

