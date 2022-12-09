<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class ,'eventoId', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clienteId', 'id');
    }
}
