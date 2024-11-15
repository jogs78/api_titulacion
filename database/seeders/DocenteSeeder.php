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
        $nuevo->apellido_paterno = "Sánchez";
        $nuevo->apellido_materno = "Guzmán";
        $nuevo->cedula_profesional = "6860785";
        $nuevo->correo = "jesus.sg@tuxtla.tecnm.mx";
        $nuevo->profesion = "Maestria en C de la computacion.";
        $nuevo->save();

        $nuevo = new Docente();
        $nuevo->nombre = "Jesus Carlos";
        $nuevo->apellido_paterno = "Guzmán";
        $nuevo->apellido_materno = "Sánchez";
        $nuevo->cedula_profesional = "4416593";
        $nuevo->correo = "jorge.gs1@tuxtla.tecnm.mx";
        $nuevo->profesion = "Maestria en Comercio Electronico.";
        $nuevo->save();

        $nuevo = new Docente();
        $nuevo->nombre = "Walter";
        $nuevo->apellido_paterno = "Torrez";
        $nuevo->apellido_materno = "Robledo";
        $nuevo->cedula_profesional = "5115396";
        $nuevo->correo = "walter.tr@tuxtla.tecnm.mx";
        $nuevo->profesion = "Maestria en ciencias en ingenieria en electronica.";
        $nuevo->save();

        
    }
}
