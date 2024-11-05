<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Usuario();
        $nuevo->actual_type="App\Models\Docente";
        $nuevo->actual_id=1;
        $nuevo->nombre_usuario = "jogs78";
        $nuevo->contraseña = Hash::make("123");
        $nuevo->save();
        $nuevo = new Usuario();
        $nuevo->actual_type="App\Models\Egresado";
        $nuevo->actual_id=1;
        $nuevo->nombre_usuario = "fco";
        $nuevo->contraseña = Hash::make("123");
        $nuevo->save();
    }
}
