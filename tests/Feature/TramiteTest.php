<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class TramiteTest extends TestCase
{


    /** @test */
    public function gestion_tramite()
    {

        //autenticar usuario para poder realizar el tramite
        $autenticar = $this->postJson('/api/autenticar', [
            'usuario' => 'arturo',
            'contraseña' => '12345678'
        ]);
        $autenticar->assertStatus(200)->assertJsonStructure(['token','id','carrera_id','plan_estudio_id']);

        //almacenar token e id del usuario para posterior uso
        $token = $autenticar->json('token');
        $egresado = $autenticar->json('id');
        $carrera = $autenticar->json('carrera_id');
        $plan_estudio = $autenticar->json('plan_estudio_id');

        //consultar requisitos segun plan estudios para la solicitud de tramite
        $planRequisitos = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/planesrequisitos/'.$plan_estudio);
        $planRequisitos->assertStatus(200);

        //consultar las opciones de titulacion segun plan estudios para la solicitud de tramite
        $opcionesTitulacion = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/planesrequisitos/'.$plan_estudio);
        $opcionesTitulacion->assertStatus(200);

        //Documentos necesarios para el la solicitud de tramite
        $documentos = [
            'Acta de nacimiento',
            'C.U.R.P',
            'Certificado de bachillerato',
            'Certificado de licenciatura',
            'Constacia de liberacion de servicio social',
            'Constancia de acreditacion de idioma Inglés',
        ];
        //Generar un documento de prueba (Nombre, tamaño y tipo de archivo)
        foreach ($documentos as $documento) {
            $documentoPrueba = UploadedFile::fake()->create($documento . '.pdf', 1024, 'application/pdf');

            //sube documentos para la solicitud de tramite segun plan estudios
            $documentoSolicitud = $this->withHeaders([
                'Authorization' => 'Bearer ' . $token,
            ])->post('/api/documentossolicitudes', [
                'archivo' => $documentoPrueba,
            ]);
            $documentoSolicitud->assertStatus(201);
        }


        //Por Validar
        $tramite = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('/api/tramites', [
            'egresado_id' => $egresado,
            'titulacion_opciones_id' => 1,
            'nombre_proyecto' => 'Proyecto de Titulación de Prueba',
        ]);
        $tramite->assertStatus(201);

    }
}
