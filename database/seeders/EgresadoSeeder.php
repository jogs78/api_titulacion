<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Egresado;
class EgresadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Egresado();
        $nuevo->nombre = "Francisco";
        $nuevo->apellido_paterno = "Moreno";
        $nuevo->apellido_materno = "Martínez";
        $nuevo->numero_control = "20270253";
        $nuevo->correo = "L20270253@tuxtla.tecnm.mx";
        $nuevo->telefono = "9611901473";
        $nuevo->carrera_id = "1";
        $nuevo->plan_estudio_id = 1;
        $nuevo->save();

        $nuevo = new Egresado();
        $nuevo->nombre = "Jorge Omner";
        $nuevo->apellido_paterno = "Arias";
        $nuevo->apellido_materno = "Olea";
        $nuevo->numero_control = "20270264";
        $nuevo->correo = "L20270264@tuxtla.tecnm.mx";
        $nuevo->telefono = "9613599215";
        $nuevo->carrera_id = "1";
        $nuevo->plan_estudio_id = 1;
        $nuevo->save();


    }
}
