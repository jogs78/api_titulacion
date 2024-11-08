<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanRequisito;

class PlanRequisitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido="ACTA DE NACIMIENTO";
        $nuevo->descripcion="En original y copia del año 2018 a la fecha (no deteriorada)"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido="C.U.R.P.";
        $nuevo->descripcion="1 copia (descargar con fecha actual)"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido="CERTIFICADO DE BACHILLERATO";
        $nuevo->descripcion="Legalizado de ser necesario, original y copia"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido=" CERTIFICADO DE LICENCIATURA";
        $nuevo->descripcion="original y una copia"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido="CONSTANCIA DE LIBERACIÓN DE SERVICIO SOCIAL";
        $nuevo->descripcion="Original y copia (Por lineamiento el original se queda en el expediente)"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido="CONSTANCIA DE ACREDITACIÓN DE IDIOMA INGLÉS";
        $nuevo->descripcion="Expedida por Servicios Escolares, original y copia (por lineamiento el original se queda en el expediente)"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new PlanRequisito();
        $nuevo->plan_estudio_id=1;
        $nuevo->documento_requerido="6 FOTOGRAFÍAS TAMAÑO CREDENCIAL OVALADAS";
        $nuevo->descripcion="LAS FOTOGRAFIAS DEBERAN SER RECIENTES, DE FRENTE, CENTRADAS, CON TRAJE OSCURO; RETOCADAS EN PAPEL DELGADO, CON ADHESIVO Y SIN BRILLO, en B/N con nombre al reverso a lápiz. (HOMBRES sin barba, MUJERES: maquillaje discreto, aretes pequeños, cabello levantado o suelto, siempre y cuando no interfiera en el rostro)"; #por rectificar descripcion
        $nuevo->tipo="Fotografia";
        $nuevo ->save();



    }
}
