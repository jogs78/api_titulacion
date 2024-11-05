<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;
use App\Models\PlanEstudio;
class PlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("2010-1-1");
        $nuevo->numero_creditos=260;
        $nuevo->especialidad_id = 1;
        $nuevo->save();
    }
}
