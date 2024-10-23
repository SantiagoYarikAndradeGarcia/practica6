<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Depto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
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
            'idCarrera' => fake()->unique()->bothify("???????########"),
            'nombreCarrera' => $titulo,
            'nombreMediano' => substr($titulo,0,10),
            'nombreCorto' => substr($titulo,0,5),
            'depto_id' => Depto::factory()
        ];
    }
}
