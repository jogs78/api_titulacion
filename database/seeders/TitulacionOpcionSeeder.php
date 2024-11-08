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
        $heredoc = <<<EOD
    This is a multiline
    string using Heredoc syntax
    EOD;
        $titulacionOpciones = [
            ['nombre' => 'I TESIS PROFESIONAL', 
            'descripcion' => <<<EOD
            Trabajos que deben desarrollarse utilizando 
            una metodologia estaleciada para la investigación básica o científica, 
            la cual puede ser Teórico-Practica. 
            EOD, 
            'tiempo_maximo' => 12],

            ['nombre' => 'II ELABORACIÓN DE LIBROS DE TEXTO O PROTOTIPO DIDÁCTICO', 
            'descripcion' => <<<EOD
            Esta opción consiste en elaborar libros de texto o prototipo didáctico que aborden los planes o 
            programas de estudios vigentes en el Sistema Nacional de Institutos Tecnologicos 
            de la Carrera Cursada por el egresado 
            EOD, 'tiempo_maximo' => 12],

            ['nombre' => 'III PROYECTO DE INVESTIGACIÓN', 
            'descripcion' => 'Dirigida a los egresados que hayan participado en un proyecto de desarrollo científico y/o tecnológico 
            el cual favorezca al desarrollo regional o nacional. 
            Debera elaborarse un informe en el que explique el desarrollo del proyecto, 
            la forma en que participó, así como los resultados obtenidos. 
            Comprobar mediante constancia la participación en el mismo. 
            En caso de que este proyecto sea efectuado en la misma intitución, 
            el Departamento Académico correspondiente dará la constancia de participación.
            una metodologia estaleciada para la investigación básica o científica, 
            la cual puede ser Teórico-Practica.', 'tiempo_maximo' => 12],

            ['nombre' => 'IV DISEÑO O REDISEÑO DE EQUIPO, APARATO O MAQUINARIA', 
            'descripcion' => 'El egresado tendrá que realizar un trabajo escrito, 
            donde se especifique los objetivos del diseño o rediseño, detallando planos, 
            cálculos, circuitos, etc y teniendo como meta el satisfacer una necesidad técnico científica o educativa. 
            Se entenderá por rediseño la reparación mayor o modificación de uno o mas componentes de equipo, 
            aparato o maquinaria que tienden a mejorar el diseño original y que a su vez, conserve su funcionamiento básico, 
            logren económico industrial. un impacto Considerando la factibilidad se podrá solicitar al aspirante a titularse 
            la construcción o prueba del prototipo, dentro de la institución.', 'tiempo_maximo' => 12],

            ['nombre' => 'V CURSO ESPECIAL DE TITULACIÓN', 
            'descripcion' => 'En esta opción el egresado participa en cursos especiales, 
            organizados por el área académico de cada especialidad, 
            el cual tiene una duración mínima de 90 horas; del cual realizan una monografía por cada alumno.', 
            'tiempo_maximo' => 6],

            ['nombre' => 'VI EXAMEN GLOBAL POR ÁREAS DEL CONOCIMIENTO', 
            'descripcion' => '1) Esta opción pretende evaluar al alumno en el área de conocimientos específicos de su exceptuando 
            el área de Ciencias Básicas. carrera Área de conocimientos es el conjunto de materias que agrupan contenidos relacionados 
            u que permiten al alumno fortalecer su aprendizaje para que tenga un mejor desempeño profesional. 
            El egresado contara con un plazo máximo de dos meses naturales para la presentación del acto de recepción profesional. 
            2) Presentar Examen General de Egreso de la Licenciatura Correspondiente (CENEVAL), 
            obteniendo el Testimonio de Desempeño Satisfactorio (TDS) Ó Testimonio de Desempeño Sobresaliente (TDSS).', 
            'tiempo_maximo' => 2],

            ['nombre' => 'VII MEMORIA DE EXPERIENCIA PROFESIONAL', 
            'descripcion' => 'Esta opción consiste en la elaboración de una memoria o informe técnico de las actividades realizadas durante el ejercicio profesional, 
            el cual deberá ser considerado en relación con el perfil, este puede ser: 
            ➤ Proyecto de interés profesional desarrollado por el pasante para el sector productivo, o
            ➤ Resumen de las actividades realizadas durante el desempeño profesional, 
            especificando aportaciones personales, tales con innovaciones de sistemas de aparatos, mejoramiento técnico de algún proceso, etc.
            ➤ Esta opción será valida para pasantes que cuenten como mínimo con 3 semestres de Experiencia Profesional', 
            'tiempo_maximo' => 12],

            ['nombre' => 'VIII ESCOLARIDAD POR PROMEDIO', 
            'descripcion' => 'Esta opción va dirigida a egresados que hayan obtenido un promedio general de 90(noventa) 
            como mínimo en toda su carrera, en escala de 0 a 100.', 
            'tiempo_maximo' => 12],

            ['nombre' => 'IX ESCOLARIDAD POR ESTUDIOS DE POSGRADO', 
            'descripcion' => 'Esta opción esta dirigida a egresados del Sistema Nacional de Institutos Tecnológicos y no pertenecientes al sistema, 
            que continuando con sus estudios de maestrías en planteles pertenecientes al mismo sistema y que tengan afinidad a la carrera cursada en la licenciatura, 
            la cual deberá ser a nivel ingeniería, demuestren haber acreditado el 40% de créditos de una maestría o el 100% de créditos de una especialidad con calificaciones mínimas de 80 por cada asignatura.', 
            'tiempo_maximo' => 0],

            ['nombre' => 'X MEMORIA DE RESIDENCIA PROFESIONAL', 
            'descripcion' => 'Se le llama así al informe final que acredita la Residencia Profesional en la cual el estudiante analiza y reflexiona 
            sobre la experiencia adquirida y lo conlleve a conclusiones en su campo de especialidad.
            El trabajo podrá ser presentado de manera individual o hasta cinco residentes que hayan participado en el proyecto.', 
            'tiempo_maximo' => 6],

            ['nombre' => 'XI TITULACIÓN INTEGRADA', 
            'descripcion' => 'Constancia de haber difundido el proyecto en forma oral emitida por el departamento académico correspondiente.
            Libreracion de informe tecnico.
            Constancia de proyecto de la materia de Taller de Investigación II.', 
            'tiempo_maximo' => 12],

            
        ];

        foreach ($titulacionOpciones as $titulacionOpcion) {
            TitulacionOpcion::create($titulacionOpcion);
        }
    }
}
