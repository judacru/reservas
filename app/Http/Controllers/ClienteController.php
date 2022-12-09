<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCliente;
use App\Http\Resources\ClienteResource;

class ClienteController extends Controller
{
   
    public function index(){
        $clientes = Cliente::all();
        return ClienteResource::collection($clientes);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){  
        
        $cliente = Cliente::create($request->all());
        return new ClienteResource($cliente);
    }

    public function show($id){
        $cliente = Cliente::find($id);
        return new ClienteResource($cliente);
    }


    public function update(StoreCliente $request, Cliente $cliente){     
        $cliente->update($request->all());
        return new ClienteResource($cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return response(null, 204);
    }

}
