<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comite;

class ComiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Comite(); #1
        $nuevo->docente_id = 1;
        $nuevo->plan_estudios_id = 5;
        $nuevo->cargo = 'asesor';
        $nuevo->save();

        $nuevo = new Comite();
        $nuevo->docente_id = 2;
        $nuevo->plan_estudios_id = 5;
        $nuevo->cargo = 'revisor';
        $nuevo->save();

        $nuevo = new Comite();
        $nuevo->docente_id = 3;
        $nuevo->plan_estudios_id = 5;
        $nuevo->cargo = 'revisor';
        $nuevo->save();
    }
}
