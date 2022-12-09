<?php

namespace Database\Factories;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class VentaFactory extends Factory
{

      
    protected $model = Venta::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        return [
            'eventoId' => $this->faker->randomElement([2, 5]), 
            'clienteId' => $this->faker->randomElement([7, 9]), 
            'cantidad' => $this->faker->randomElement([10, 15]), 
            'total' => $this->faker->randomElement([200000, 800000]), 
        ];
    }
}
