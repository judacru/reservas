<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use App\Models\Evento;
use App\Models\Venta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Evento::factory()->create();
        Cliente::factory()->create();
        Venta::factory()->create();
        
    }
}
