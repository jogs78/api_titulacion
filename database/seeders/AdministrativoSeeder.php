<?php

namespace Database\Seeders;

use App\Models\Administrativo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministrativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Administrativo();
        $nuevo->nombre = "Lleni Elizabeth";
        $nuevo->apellido_paterno = "Arzate";
        $nuevo->apellido_materno = "Gordillo";
        $nuevo->correo = "lleny.ag@tuxtla.tecnm.mx";
        $nuevo->puesto = "apoyo a titulacion Servicios escolares";
        $nuevo->save();

        $nuevo = new Administrativo();
        $nuevo->nombre = "Yubitza Karleni ";
        $nuevo->apellido_paterno = "Juarez";
        $nuevo->apellido_materno = " Herrera";
        $nuevo->correo = "coordinacion.titulacion@tuxtla.tecnm.mx";
        $nuevo->puesto = "COORDINADORA DE TITULACION EN LA DIVISION DE ESTUDIOS PROFESIONALES";
        $nuevo->save();

        $nuevo = new Administrativo();
        $nuevo->nombre = "Fanny Yasmin";
        $nuevo->apellido_paterno = "Lopez";
        $nuevo->apellido_materno = " De la Cruz";
        $nuevo->correo = "fanny.lc@tuxtla.tecnm.mx";
        $nuevo->puesto = "Secretaria de la Jefatura de Sistemas Computacionales";
        $nuevo->save();
    }
}
