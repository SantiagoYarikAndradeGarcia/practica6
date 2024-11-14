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
        static $indice=-1;
        $indice++;
        $mat = [
            // ISC
            // 1
            ['Cálculo Diferencial','Cálc Dif','CD','L','E',1, 1],
            ['Fundamentos de Programación','Fund de Prog','FdP','L','E',1, 1],
            ['Taller de Ética','Tal de Et','TdE','L','E',1, 1],

            // 2
            ['Cálculo Integral','Cálc Int','CI','L','E',2, 1],
            ['Programación Orientada a Objetos','Prog Orient a Obj','POO','L','E',2, 1],
            ['Contabilidad Financiera','Cont Finan','CF','L','E',2, 1],

            // 3
            ['Cálculo Vectorial','Cálc Vect','CV','L','E',3, 1],
            ['Estructura de Datos','Est de Dat','EdD','L','E',3, 1],
            ['Desarrollo Sustentable','Des Sust','DS','L','E',3, 1],

            // 4
            ['Ecuaciones Diferenciales','Ec Dif','ED','L','E',4, 1],
            ['Métodos Numéricos','Mét Num','MN','L','E',4, 1],
            ['Tópicos Avanzados de Programación','Top Av de Prog','TAdP','L','E',4, 1],

            // 5
            ['Lenguajes y Autómatas I','Leng y Aut I','LyAI','L','E',5, 1],
            ['Fundamentos de Telecomunicaciones','Fund de Tel','FdT','L','E',5, 1],
            ['Taller de Base de Datos','Tal de BD','TdBD','L','E',5, 1],

            // 6
            ['Lenguajes y Autómatas II','Leng y Aut II','LyAII','L','E',6, 1],
            ['Redes de Computadora','Red de Comp','RdC','L','E',6, 1],
            ['Administración de Bases de Datos','Adm de BD','AdBD','L','E',6, 1],

            // 7
            ['Cultura Empresarial','Cult Emp','CE','L','E',7, 1],
            ['Conmutación y Enrutamiento de Redes de Datos','Conm y Enr de Red de Dat','CyEdRdD','L','E',7, 1],
            ['Taller de Investigación I','Tal de Inv I','TdII','L','E',7, 1],
            
            // 8
            ['Programación Lógica y Funcional','Prog Lóg y Func','PLyF','L','E',8, 1],
            ['Administración de Redes','Adm de Red','AdR','L','E',8, 1],
            ['Taller de Investigación II','Tal de Inv II','TdIII','L','E',8, 1],

            // 9
            ['Inteligencia Artificial','Int Art','IA','L','E',9, 1],
            ['Programación Móvil Multiplataforma','Prog Móv Mult','PMM','L','E',9, 1],
            ['Residencia Profesional','Res Prof','RP','L','E',9, 1],

            // II
            // 1
            ['Fundamentos de Investigación','Fund de Inv','FdI','L','E',1, 7],
            ['Taller de Herramientas Intelectuales','Ta de Her Int','TdHI','L','E',1, 7],

            // 2
            ['Electricidad y Electrónica Industrial','Elec y Elect Ind','EyEI','L','E',2, 7],
            ['Propiedad de los Materiales','Prop de los Mat','PdlM','L','E',2, 7],

            // 3
            ['Metrología y Normalización','Metr y Norm','MyN','L','E',3, 7],
            ['Álgebra Lineal','Álg Lin','AL','L','E',3, 7],

            // 4
            ['Procesos de Fabricación','Proc de Fab','PdF','L','E',4, 7],
            ['Física','Fís','F','L','E',4, 7],

            // 5
            ['Administración de Proyectos','Adm de Proy','AdP','L','E',5, 7],
            ['Gestión de Costos','Gest de Cost','GdC','L','E',5, 7],

            // 6
            ['Ingeniería Económica','Ing Eco','IE','L','E',6, 7],
            ['Administración de las Operaciones II','Adm de las Op II','AdlOII','L','E',6, 7],

            // 7
            ['Planeación Financiera','Plan Fin','PF','L','E',7, 7],
            ['Planeación y Diseño de Instalaciones','Plan y Dis de Inst','PyDdI','L','E',7, 7],
            
            // 8
            ['Formulación y Evaluación de Proyectos','Form y Ev de Proy','FyEdP','L','E',8, 7],
            ['Relaciones Industriales','Relac Ind','RI','L','E',8, 7],

            // 9
            ['Emprendimiento e Innocación','Emp e Inn','EI','L','E',9, 7],
            ['Medición y Mejoramiento de la Productividad','Med y Mej de la Prod','MMdlP','L','E',9, 7],
        ];
        return [
            'nombreMateria'=>$mat[$indice][0],
            'nombreMediano'=>$mat[$indice][1],
            'nombreCorto'=>$mat[$indice][2],
            'nivel'=>$mat[$indice][3],
            'modalidad'=>$mat[$indice][4],
            'semestre'=>$mat[$indice][5],
            'reticula_id'=>$mat[$indice][6],
        ];
        // $titulo = fake()->unique()->jobTitle();
        // return [
        //     'idMateria' => fake()->unique()->bothify("?????#####"),
        //     'nombreMateria' => $titulo,
        //     'nombreMediano' => substr($titulo,0,15),
        //     'nombreCorto' => substr($titulo,0,10),
        //     'nivel' => fake()->randomElement(['L', 'M']),
        //     'modalidad' => fake()->randomElement(['A', 'E']),
        //     'reticula_id' => Reticula::factory()
        // ];
    }
}
