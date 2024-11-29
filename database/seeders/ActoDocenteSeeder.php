<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ActoDocente;

class ActoDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new ActoDocente();
        $nuevo->acto_id = 1;
        $nuevo->docente_id = 1;
        $nuevo->sinodal = 'presidente';
        $nuevo->save();

        $nuevo = new ActoDocente();
        $nuevo->acto_id = 1;
        $nuevo->docente_id = 2;
        $nuevo->sinodal = 'Secretario';
        $nuevo->save();

        $nuevo = new ActoDocente();
        $nuevo->acto_id = 1;
        $nuevo->docente_id = 3;
        $nuevo->sinodal = 'suplente';
        $nuevo->save();

        $nuevo = new ActoDocente();
        $nuevo->acto_id = 2;
        $nuevo->docente_id = 1;
        $nuevo->sinodal = 'presidente';
        $nuevo->save();

        $nuevo = new ActoDocente();
        $nuevo->acto_id = 2;
        $nuevo->docente_id = 2;
        $nuevo->sinodal = 'Secretario';
        $nuevo->save();

        $nuevo = new ActoDocente();
        $nuevo->acto_id = 2;
        $nuevo->docente_id = 3;
        $nuevo->sinodal = 'suplente';
        $nuevo->save();

    }
}