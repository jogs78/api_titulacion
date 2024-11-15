<?php

namespace Database\Seeders;

use App\Models\JuradoActo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuradoActoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new JuradoActo();
        $nuevo->jurado_id = 1;
        $nuevo->acto_id = 1;
        $nuevo->save();

        $nuevo = new JuradoActo();
        $nuevo->jurado_id = 2;
        $nuevo->acto_id = 1;
        $nuevo->save();

        $nuevo = new JuradoActo();
        $nuevo->jurado_id = 3;
        $nuevo->acto_id = 1;
        $nuevo->save();
    }
}
