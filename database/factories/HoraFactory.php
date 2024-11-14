<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hora>
 */
class HoraFactory extends Factory
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
        $hor = [
            ['07:00','08:00'],
            ['08:00','09:00'],
            ['09:00','10:00'],
            ['10:00','11:00'],
            ['11:00','12:00'],
            ['12:00','13:00'],
            ['13:00','14:00'],
            ['14:00','15:00'],
            ['15:00','16:00'],
            ['16:00','17:00'],
        ];
        return [
            'horaIni'=>$hor[$indice][0],
            'horaFin'=>$hor[$indice][1],
        ];
    }
}
