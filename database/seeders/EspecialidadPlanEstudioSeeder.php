<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EspecialidadPlanEstudio;

class EspecialidadPlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new EspecialidadPlanEstudio();
        $nuevo->especialidad_id = 1;
        $nuevo->plan_estudio_id = 5;
        $nuevo->save();

        $nuevo = new EspecialidadPlanEstudio();
        $nuevo->especialidad_id = 1;
        $nuevo->plan_estudio_id = 3;
        $nuevo->save();
    }
}
