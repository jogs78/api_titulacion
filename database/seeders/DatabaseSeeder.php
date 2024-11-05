<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DocenteSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(PlanEstudioSeeder::class);
        $this->call(EgresadoSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}