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
        $nuevo->fecha_inicio = date("1973-01-01");
        $nuevo->numero_creditos=260;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("1980-01-01");
        $nuevo->numero_creditos=260;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("1990-01-01");
        $nuevo->numero_creditos=260;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("2004-01-01");
        $nuevo->numero_creditos=260;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("2010-01-01");
        $nuevo->numero_creditos=260;
        $nuevo->save();
    }
}
