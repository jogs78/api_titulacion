<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrera;
class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nueva = new carrera();
        $nueva->nombre = "Ing. sistemas computacionales";
        $nueva->clave = "ISIC-2010-224";
        $nueva->save();
    }
}
