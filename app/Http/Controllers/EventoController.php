<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvento;
use App\Http\Resources\EventoResource;

class EventoController extends Controller
{
   
    public function index(){
        $eventos = Evento::all();
        return EventoResource::collection($eventos);
    }

    public function create(){
        return view('eventos.create');
    }

    public function store(StoreEvento $request){   
        $evento = Evento::create($request->all());
        return new EventoResource($evento);
    }

    public function show($id){
        $evento = Evento::find($id);
        return new EventoResource($evento);
    }

    public function update(StoreEvento $request, Evento $evento){     
        $evento->update($request->all());
        return new EventoResource($evento);
    }

    public function destroy(Evento $evento){
        $evento->delete();
        return response(null, 204);
    }

}
