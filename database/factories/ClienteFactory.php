<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   $nombre = $this->faker->sentence();
        return [
            'documento' => $this->faker->randomElement([20000, 50000]),
            'nombre'=> $nombre,
            'correo' => $this->faker->sentence(),
        ];
    }
}
