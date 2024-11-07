<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanEstudiosTitulacionOpcion;

class PlanEstudiosTitulacionOpcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Pivotes = [
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '1'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '2'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '3'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '4'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '5'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '6'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '7'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '8'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '9'],
            ['plan_estudios_id' => '1', 'titulacion_opcion_id' => '10'],

            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '1'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '2'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '3'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '4'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '5'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '6'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '7'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '8'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '9'],
            ['plan_estudios_id' => '2', 'titulacion_opcion_id' => '10'],

            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '1'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '2'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '3'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '4'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '5'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '6'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '7'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '8'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '9'],
            ['plan_estudios_id' => '3', 'titulacion_opcion_id' => '10'],

            ['plan_estudios_id' => '4', 'titulacion_opcion_id' => '1'],
            ['plan_estudios_id' => '4', 'titulacion_opcion_id' => '3'],
            ['plan_estudios_id' => '4', 'titulacion_opcion_id' => '6'],
            ['plan_estudios_id' => '4', 'titulacion_opcion_id' => '10'],

            ['plan_estudios_id' => '5', 'titulacion_opcion_id' => '11'],	
        ];

        foreach ($Pivotes as $Pivote) {
            PlanEstudiosTitulacionOpcion::create($Pivote);
        }






    }
}
