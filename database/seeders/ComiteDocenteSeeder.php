<?php

namespace Database\Seeders;

use App\Models\ComiteDocente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComiteDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new ComiteDocente();
        $nuevo->comite_id = 1;
        $nuevo->docente_id = 1;
        $nuevo->cargo = 'asesor';
        $nuevo->save();

        $nuevo = new ComiteDocente();
        $nuevo->comite_id = 1;
        $nuevo->docente_id = 2;
        $nuevo->cargo = 'revisor';
        $nuevo->save();

        $nuevo = new ComiteDocente();
        $nuevo->comite_id = 1;
        $nuevo->docente_id = 3;
        $nuevo->cargo = 'revisor';
        $nuevo->save();

        $nuevo = new ComiteDocente();
        $nuevo->comite_id = 2;
        $nuevo->docente_id = 1;
        $nuevo->cargo = 'asesor';
        $nuevo->save();

        $nuevo = new ComiteDocente();
        $nuevo->comite_id = 2;
        $nuevo->docente_id = 3;
        $nuevo->cargo = 'revisor';
        $nuevo->save();

        $nuevo = new ComiteDocente();
        $nuevo->comite_id = 2;
        $nuevo->docente_id = 2;
        $nuevo->cargo = 'revisor';
        $nuevo->save();


    }
}
