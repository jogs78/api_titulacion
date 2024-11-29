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
        $nuevo = new Comite();
        $nuevo->plan_estudios_id = 1;
        $nuevo->especificacion = 'Ninguna';
        $nuevo->save();

        $nuevo = new Comite();
        $nuevo->plan_estudios_id = 2;
        $nuevo->especificacion = 'Ninguna';
        $nuevo->save();

        $nuevo = new Comite();
        $nuevo->plan_estudios_id = 3;
        $nuevo->especificacion = 'Ninguna';
        $nuevo->save();

        $nuevo = new Comite();
        $nuevo->plan_estudios_id = 4;
        $nuevo->especificacion = 'Ninguna';
        $nuevo->save();

        $nuevo = new Comite();
        $nuevo->plan_estudios_id = 5;
        $nuevo->especificacion = 'Ninguna';
        $nuevo->save();
    }
}
