<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Docente();
        $nuevo->nombre = "Jorge Octavio";
        $nuevo->apellido_paterno = "Guzmán";
        $nuevo->apellido_materno = "Sánchez";
        $nuevo->cedula_profesional = "6860785";
        $nuevo->correo = "jorge.gs1@tuxtla.tecnm.mx";
        $nuevo->profesion = "Maestria en C de la computacion.";
        $nuevo->save();
    }
}
