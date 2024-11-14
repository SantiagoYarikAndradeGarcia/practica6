<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalPlaza>
 */
class PersonalPlazaFactory extends Factory
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
            [10, 1, 1],
        ];
        return [
            'tipoNombramiento'=>$ret[$indice][0],
            'plaza_id'=>$ret[$indice][1],
            'personal_id'=>$ret[$indice][2],
        ];
    }
}
