<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Usuario;
use App\Models\Egresado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function registrar(RegistroRequest $request){

        $validaData = $request->validated();

        try {
            DB::transaction(function () use ($validaData) {
                // Crear egresado
                $egresado = Egresado::create([
                    'nombre'             => $validaData['nombre'],
                    'apellido_paterno'   => $validaData['apellido_paterno'],
                    'apellido_materno'   => $validaData['apellido_materno'],
                    'numero_control'     => $validaData['numero_control'],
                    'correo'             => $validaData['correo'],
                    'telefono'           => $validaData['telefono'],
                    'carrera_id'         => null,
                    'plan_estudio_id'    => null,
                ]);

                // Crear usuario vinculado al egresado
                Usuario::create([
                    'actual_type'    => 'App\Models\Egresado',
                    'actual_id'      => $egresado->id,
                    'nombre_usuario' => $validaData['nombre_usuario'],
                    'contraseña'     => Hash::make($validaData['contraseña']),
                ]);

                // Crear trámite asociado al egresado
                /*
                Tramite::create([
                    'egresado_id'            => $egresado->id,
                    'titulacion_opciones_id' => $validaData['titulacion_opciones_id'],
                    'nombre_proyecto'        => $validaData['nombre_proyecto'],
                ]);
                */
            });
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar: ' . $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Registro completado correctamente'], 201);


    }


}
