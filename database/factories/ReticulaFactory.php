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
        static $indice=-1;
        $indice++;
        $ret = [
            ['Especialidad en Desarrollo de Aplicaciones','2021-03-01', 1], // ISC
            ['Especialidad en Automatización y Control','2021-03-02', 2],
            ['Especialidad en...','2021-03-03', 3],
            ['Especialidad en Automatización y Control','2021-03-04', 4],
            ['Especialidad en Manufactura y Productividad','2021-03-05', 5],
            ['Especialidad en Recursos Humanos','2021-03-06', 6],
            ['Especialidad en Manufactura y Productividad','2021-03-07', 7] // II
        ];
        return [
            'descripcion'=>$ret[$indice][0],
            'fechaEnVigor'=>$ret[$indice][1],
            'carrera_id'=>$ret[$indice][2],
        ];
        // $titulo = fake()->unique()->jobTitle();
        // return [
        //     'idReticula' => fake()->unique()->bothify("???????########"),
        //     'descripcion' => fake()->text($maxNbChars = 200), // ver fakers
        //     'fechaEnVigor' => fake()->date($format = 'Y-m-d', $max = 'now'), // ver fakers
        //     'carrera_id' => Carrera::factory()
        // ];
    }
}
