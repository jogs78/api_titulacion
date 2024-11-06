<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;
class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nueva = new Especialidad;
        $nueva->nombre = "Tecnologias Web y Movil aplicadas al comercio electronico";
        $nueva->save();

        $nueva = new Especialidad;
        $nueva->nombre = "Base de datos";
        $nueva->save();
    }
}
