<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ActoDocente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DocenteSeeder::class);
        $this->call(AdministrativoSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(TitulacionOpcionSeeder::class);
        $this->call(PlanEstudioSeeder::class);
        $this->call(EgresadoSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PlanEstudiosTitulacionOpcionSeeder::class);
        $this->call(ActoSeeder::class);
        $this->call(ActoDocenteSeeder::class);
        $this->call(ComiteSeeder::class);
        $this->call(ComiteDocenteSeeder::class);
        $this->call(TramiteSeeder::class);


    }
}
