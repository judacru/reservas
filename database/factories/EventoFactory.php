<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class EventoFactory extends Factory
{

      
    protected $model = Evento::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $nombre = $this->faker->sentence();
        return [
            'nombre'=> $nombre, 
            'stock'=> $this->faker->randomElement([15, 50]), 
            'precio'=> $this->faker->randomElement([20000, 50000])
        ];
    }
}
