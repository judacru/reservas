<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVenta;
use App\Http\Resources\VentaResource;

class VentaController extends Controller
{

    public function index()
    {
        $ventas = Venta::with(['evento','cliente'])->get();
        return VentaResource::collection($ventas);
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        $venta = Venta::create($request->all());
        return new VentaResource($venta);
    }

    public function show($id)
    {
        $venta = Venta::find($id);
        return new VentaResource($venta);
    }
}
