<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Edificio>
 */
class EdificioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice=-1;
        $indice++;
        $edi = [
            ['Ciencias Básicas','CB'],
            ['Edificio K','Ed K'],
            ['Sistemas y Computación','SC'],
            ['Laboratorio de Electrónica','Lab E'],
            ['Edificio H','Ed H'],
            ['Edificio D','Ed D'],
        ];
        return [
            'nombreEdificio'=>$edi[$indice][0],
            'nombreCorto'=>$edi[$indice][1],
        ];
        // return [
        //     'idEdificio' => fake()->unique()->bothify("####"),
        //     'nombreEdificio' => fake()->unique()->jobTitle(),
        // ];
    }
}
