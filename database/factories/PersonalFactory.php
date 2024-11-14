<?php

namespace Database\Factories;

use App\Models\Depto;
use App\Models\Puesto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
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
        $per = [
            // ISC
            ['MORA841015H12','Roberto','Espinoza','Torres','Licenciatura en Ingeniería en Sistemas Computacionales',1,null,0,null,0,null,0,'1995-04-20','1995-04-20', 3, 1],
            ['GARC920320M9L','Flor de María','Rivera','Sánchez','Licenciatura en Ciencias de la Computación',1,null,0,null,0,null,0,'2004-11-14','2004-11-14', 3, 1],
            ['RODR750506H6P','Antonio','Chávez','Soto',null,0,'Especialización en Ciberseguridad y Redes',1,null,0,null,0,'2000-03-21','2000-03-21', 3, 1],
            ['LOPE870912M3K','Pedro','Cruz','Vázquez',null,0,'Especialización en Desarrollo de Aplicaciones Móviles',1,null,0,null,0,'2009-01-12','2009-01-12', 3, 1],
            ['SANC660819H8Q','Juan Ramón','Olague','Sánchez',null,0,null,0,'Maestría en Ciencias de Datos e Inteligencia Artificial',1,null,0,'2013-05-05','2013-05-05', 3, 1],
            ['GOME940101M1S','Hilda Patricia','Beltrán','Hernández',null,0,null,0,'Maestría en Ingeniería de Software',1,null,0,'2008-02-20','2008-02-20', 3, 1],
            ['HERN820711H7B','Aquiles','González','Ramos',null,0,null,0,null,0,'Doctorado en Computación Cuántica',1,'1996-07-07','1996-07-07', 3, 1],
            ['MART760205M2J','Isidro','García','Sierra',null,0,null,0,null,0,'Doctorado en Ingeniería de Sistemas Complejos',1,'2011-09-22','2011-09-22', 3, 1],
            ['CRUZ990619H4F','Héctor Carlos','Valadez','Moyeda','Licenciatura en Ingeniería en Tecnologías de la Información',1,null,0,null,0,null,0,'2002-10-03','2002-10-03', 3, 1],
            ['PERE830315M5T','David Sergio','Castillón','Domínguez',null,0,null,0,'Maestría en Arquitectura de Computadoras y Sistemas Embebidos',1,null,0,'2007-06-16','2007-06-16', 3, 1],

            // Director
            ['NAVA900823H5Z','Gustavo Emilio','Rojo','Velázquez',null,0,null,0,null,0,'Doctorado en Ingeniería de Sistemas Complejos',1,'2002-06-13','2002-06-13', 1, 2],

            // Subdirectores
            ['SALD780104M3X','Carlos','Patiño','Chávez','Licenciatura en Seguridad Informática y Tecnologías de la Información',1,null,0,null,0,null,0,'2007-03-22','2007-03-22', 2, 3],
            ['OLIV850927H2Y','José Carlos','Hernández','Lozano',null,0,null,0,null,0,'Doctorado en Inteligencia Artificial y Computación Cognitiva',1,'1999-10-21','1999-10-21', 2, 4],
        ];
        return [
            'RFC'=>$per[$indice][0],
            'nombres'=>$per[$indice][1],
            'apellidoP'=>$per[$indice][2],
            'apellidoM'=>$per[$indice][3],
            'licenciatura'=>$per[$indice][4],
            'licPasTit'=>$per[$indice][5],
            'especializacion'=>$per[$indice][6],
            'espPasTit'=>$per[$indice][7],
            'maestria'=>$per[$indice][8],
            'maePasTit'=>$per[$indice][9],
            'doctorado'=>$per[$indice][10],
            'docPasTit'=>$per[$indice][11],
            'fechaIngSep'=>$per[$indice][12],
            'fechaIngIns'=>$per[$indice][13],
            'depto_id'=>$per[$indice][14],
            'puesto_id'=>$per[$indice][15],
        ];
        // return [
        //     // 'noTrabajador' => fake()->unique()->bothify("####"),
        //     'RFC' => fake()->unique()->bothify("????#######?#"),
        //     'nombres' => fake()->name(),
        //     'apellidoP' => fake()->lastName(),
        //     'apellidoM' => fake()->lastName(),
        //     'licenciatura' => fake()->jobTitle(),
        //     'licPasTit' => fake()->bothify("?"),
        //     'especializacion' => fake()->jobTitle(),
        //     'espPasTit' => fake()->bothify("?"),
        //     'maestria' => fake()->jobTitle(),
        //     'maePasTit' => fake()->bothify("?"),
        //     'doctorado' => fake()->jobTitle(),
        //     'docPasTit' => fake()->bothify("?"),
        //     'fechaIngSep' => fake()->date($format = 'Y-m-d', $max = 'now'), // ver fakers
        //     'fechaIngIns' => fake()->date($format = 'Y-m-d', $max = 'now'), // ver fakers
        //     'depto_id' => Depto::factory(),
        //     'puesto_id' => Puesto::factory(),
        // ];
    }
}
