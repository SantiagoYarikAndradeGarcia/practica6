<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periodo>
 */
class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $p = fake()->randomElement($array = array ('ENE-JUN','AGO-DIC'));
        $a = fake()->numberBetween($min = 2000, $max = 2024);
        $descCorta = substr($p, 0, 1) . substr($p, 3, 2) . ' ' . $a;
        return [
            'idPeriodo' => fake()->unique()->bothify("???##"),
            'periodo' => $p.' '.$a, // ver fakers
            'descCorta' => $descCorta, // ver fakers
            'fechaIni' => fake()->date($format = 'Y-m-d', $max = 'now'), // ver fakers
            'fechaFin' => fake()->date($format = 'Y-m-d', $max = 'now') // ver fakers
        ];
    }
}
