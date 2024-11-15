<?php

namespace Database\Seeders;

use App\Models\Acto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Acto();
        #$nuevo->jurado_id = 1;
        $nuevo->modalidad = 'Presencial';
        $nuevo->fecha = '2025-01-05';
        $nuevo->hora = '10:00:00';
        $nuevo->lugar = 'Edificio I - Audiovisual';
        $nuevo->save();

    }
}
