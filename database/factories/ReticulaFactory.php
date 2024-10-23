<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reticula>
 */
class ReticulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = fake()->unique()->jobTitle();
        return [
            'idReticula' => fake()->unique()->bothify("???????########"),
            'descripcion' => fake()->text($maxNbChars = 200), // ver fakers
            'fechaEnVigor' => fake()->date($format = 'Y-m-d', $max = 'now'), // ver fakers
            'carrera_id' => Carrera::factory()
        ];
    }
}
