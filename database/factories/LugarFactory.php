<?php

namespace Database\Factories;

use App\Models\Edificio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lugar>
 */
class LugarFactory extends Factory
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
        $lug = [
            // Sistemas
            ['Laboratorio de Cómputo C','LCC', 3],
            ['Laboratorio de Cómputo D','LCD', 3],
            ['Laboratorio de Cómputo E','LCE', 3],
            ['Laboratorio de Cómputo F','LCF', 3],
            ['Sala Valerdi','LCV', 3],

            // K
            ['Salón 1K','1K', 2],
            ['Salón 2K','2K', 2],
            ['Salón 3K','3K', 2],
            ['Salón 4K','4K', 2],
            ['Salón 5K','5K', 2],
            ['Salón 6K','6K', 2],
            ['Salón 7K','7K', 2],
            ['Salón 8K','8K', 2],
            ['Salón 9K','9K', 2],
            ['Salón 10K','10K', 2],
            ['Salón 11K','11K', 2],
            ['Salón 12K','12K', 2],
            ['Salón 13K','13K', 2],
            ['Salón 14K','14K', 2],

            // D
            ['Salón 1D','1D', 6],
            ['Salón 2D','2D', 6],
            ['Salón 3D','3D', 6],
            ['Salón 4D','4D', 6],
            ['Salón 5D','5D', 6],
            ['Salón 6D','6D', 6],
            ['Salón 7D','7D', 6],
        ];
        return [
            'nombreLugar'=>$lug[$indice][0],
            'nombreCorto'=>$lug[$indice][1],
            'edificio_id'=>$lug[$indice][2],
        ];
        // $l1 = fake()->randomElement($array = array ('Sala','Laboratorio'));
        // $l2 = fake()->numberBetween($min = 1, $max = 99);
        // return [
        //     'idLugar' => fake()->unique()->bothify("####"),
        //     'nombreLugar' => $l1.' '.$l2,
        //     'edificio_id' => Edificio::factory(),
        // ];
    }
}
