<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TitulacionOpcion;

class TitulacionOpcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titulacionOpciones = [
            ['nombre' => 'I Tesis Profesional', 
            'descripcion' => 'Trabajos que deben desarrollarse utilizando 
            una metodologia estaleciada para la investigación básica o científica, 
            la cual puede ser Teórico-Practica.', 
            'tiempo_maximo' => 12],

            ['nombre' => 'II Elaboración de texto o prototipo didactico', 
            'descripcion' => 'Esta opción consiste en elaborar libros de texto o prototipo didáctico que aborden los planes o 
            programas de estudios vigentes en el Sistema Nacional de Institutos Tecnologicos 
            de la Carrera Cursada por el egresado', 'tiempo_maximo' => 12],

            ['nombre' => 'III Proyecto de Investigación', 'descripcion' => 'Dirigida a los egresados que hayan participado en un proyecto de desarrollo científico y/o tecnológico el cual favorezca al desarrollo regional o nacional.
             Debera elaborarse un informe en el que explique el desarrollo del proyecto, la forma en que participó, así como los resultados obtenidos.
              Comprobar mediante constancia la participación en el mismo. 
              En caso de que este proyecto sea efectuado en la misma intitución, el Departamento Académico correspondiente dará la constancia de participación.
            una metodologia estaleciada para la investigación básica o científica, 
            la cual puede ser Teórico-Practica.', 'tiempo_maximo' => 12],
        ];

        foreach ($titulacionOpciones as $titulacionOpcion) {
            TitulacionOpcion::create($titulacionOpcion);
        }
    }
}
