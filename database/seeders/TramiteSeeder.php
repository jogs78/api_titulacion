<?php

namespace Database\Seeders;

use App\Models\Tramite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nuevo = new Tramite();
        $nuevo->egresado_id = 1;
        $nuevo->titulacion_opciones_id = 11;
        $nuevo->nombre_proyecto = 'API PARA LA AUTOMATIZACIÓN DEL PROCESO DE TITULACIÓN DEL TECNM/ TUXTLA GUTIÉRREZ';
        $nuevo->liberacion = 'pendiente';
        $nuevo->status = 'pendiente';
        $nuevo->paso = 'iniciado';
        $nuevo->observaciones = 'Ninguna';
        $nuevo->pago = 'pendiente';
        $nuevo->comite_id = 1;
        $nuevo->acto_id = 1;
        #$nuevo->jurado_acto_id = 1;
        $nuevo->save();

        $nuevo = new Tramite();
        $nuevo->egresado_id = 2;
        $nuevo->titulacion_opciones_id = 11;
        $nuevo->nombre_proyecto = 'Sistematización del seguimiento de los procesos de residencia profesional en el departamento de ingenierías.';
        $nuevo->liberacion = 'pendiente';
        $nuevo->status = 'pendiente';
        $nuevo->paso = 'iniciado';
        $nuevo->observaciones = 'Ninguna';
        $nuevo->pago = 'pendiente';
        $nuevo->comite_id = 2;
        $nuevo->acto_id = 2;
        $nuevo->save();

    }
}
