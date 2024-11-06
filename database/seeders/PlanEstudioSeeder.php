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
        $nuevo->fecha_inicio = date("1973-1-1");
        $nuevo->numero_creditos=260;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("1980-1-1");
        $nuevo->numero_creditos=260;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("1990-1-1");
        $nuevo->numero_creditos=260;
        $nuevo->save();
        
        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("2004-1-1");
        $nuevo->numero_creditos=260;
        $nuevo->especialidad_id = 2;
        $nuevo->save();

        $nuevo = new planEstudio();
        $nuevo->fecha_inicio = date("2010-1-1");
        $nuevo->numero_creditos=260;
        $nuevo->especialidad_id = 1;
        $nuevo->save();
    }
}
