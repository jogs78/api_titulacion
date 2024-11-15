<?php

namespace Database\Seeders;

use App\Models\Jurado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Jurado();
        $nuevo->docente_id = 1;
        $nuevo->sinodal = 'presidente';
        $nuevo->save();

        $nuevo = new Jurado();
        $nuevo->docente_id = 2;
        $nuevo->sinodal = 'Secretario';
        $nuevo->save();

        $nuevo = new Jurado();
        $nuevo->docente_id = 3;
        $nuevo->sinodal = 'suplente';
        $nuevo->save();

        
    }
}
