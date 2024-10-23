<?php

namespace Database\Factories;

use App\Models\Reticula;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
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
            'idMateria' => fake()->unique()->bothify("?????#####"),
            'nombreMateria' => $titulo,
            'nombreMediano' => substr($titulo,0,15),
            'nombreCorto' => substr($titulo,0,10),
            'nivel' => fake()->randomElement(['L', 'M']),
            'modalidad' => fake()->randomElement(['A', 'E']),
            'reticula_id' => Reticula::factory()
        ];
    }
}
