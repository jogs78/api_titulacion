<?php

namespace Tests\Feature;

use App\Models\Carrera;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class RegistroTest extends TestCase
{

    // Vaciar la base de datos y ejecutar migraciones y seeders porque luego los datos de prueba no se insertan
   protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed');
    }

    /** @test */
    public function registro_usuario()
    {
         // Registrar usuario sin la carrera ni plan de estudios porque estan protegidos
         //nececitan autenticar antes para consultar la informacion

        $response = $this->postJson('/api/registrar', [
            'nombre' => 'Arturo',
            'apellido_paterno' => 'Martinez',
            'apellido_materno' => 'Moreno',
            'numero_control' => '12345678',
            'correo' => 'Arturo@example.com',
            'telefono' => '9611234561',
            'nombre_usuario' => 'arturo',
            'contraseña' => '12345678']);

        $response->assertStatus(201);

        // Autenticar usuario y obtener su token e id
        $autenticar = $this->postJson('/api/autenticar', [
            'usuario' => 'arturo',
            'contraseña' => '12345678']);
            $autenticar ->assertStatus(200)->assertJsonStructure(['token','id']);

        $token = $autenticar ->json('token'); // cabezera para utenticar usuarios
        $egresado = $autenticar ->json('id'); // id del usuario autenticado

        // Consultar las carreras y planes de estudio para obtener sus id esto como si tuviera que seleccionar una carrera y plan de estudios en el frontend
        $consultaCarrera = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/carreras');
        $consultaCarrera->assertStatus(200);

        $consultaPlanEstudio = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/planestudios');
        $consultaPlanEstudio->assertStatus(200);
        // Esto seria despues de consultar las carreras y planes de estudio porque estan protegidos
        $carrera = 1;
        $planEstudio = 1;

        // Actualiza los datos del egresado para que tenga su carrera y plan de estudios
        $actulizaEgresado = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson('/api/egresados/'.$egresado, [ // era /api/egresados/{egresado} route('egresados.update'
            'carrera_id' => $carrera,
            'plan_estudio_id' => $planEstudio
        ]);
       
        $actulizaEgresado->assertStatus(200)->assertJson(['carrera_id' => 1, 'plan_estudio_id' => 1]);

        //Concluye el registro del egresado con pasos extras porque hay datos protegidos
        //el front necesita autenticar para consultar la informacion
    }

}
