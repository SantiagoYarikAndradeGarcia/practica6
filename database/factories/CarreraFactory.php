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
        static $indice=-1;
        $indice++;
        $car = [
            ['AAAAAAA00000001','Ingeniería en Sistemas Computacionales','Ing Sist Comp','ISC', 3],
            ['AAAAAAA00000002','Ingeniería Electrónica','Ing Elect','IE', 4],
            ['AAAAAAA00000003','Ingeniería Mecánica','Ing Meca','IM', 5],
            ['AAAAAAA00000004','Ingeniería Mecatrónica','Ing Mecat','IME', 6],
            ['AAAAAAA00000005','Contador Público','Cont Pub','CP', 7],
            ['AAAAAAA00000007','Ingeniería en Gestión Empresarial','Ing Gest Emp','IGE', 8],
            ['AAAAAAA00000008','Ingeniería Industrial','Ing Ind','II', 9]
        ];
        return [
            'idCarrera'=>$car[$indice][0],
            'nombreCarrera'=>$car[$indice][1],
            'nombreMediano'=>$car[$indice][2],
            'nombreCorto'=>$car[$indice][3],
            'depto_id'=>$car[$indice][4],
        ];
        // $titulo = fake()->unique()->jobTitle();
        // return [
        //     'idCarrera' => fake()->unique()->bothify("???????########"),
        //     'nombreCarrera' => $titulo,
        //     'nombreMediano' => substr($titulo,0,10),
        //     'nombreCorto' => substr($titulo,0,5),
        //     'depto_id' => Depto::factory()
        // ];
    }
}
