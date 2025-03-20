<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Http\Requests\StoreEgresadoRequest;
use App\Http\Requests\UpdateEgresadoRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Egresado::class)){
            $egresado = Egresado::all();
            return response()->json($egresado, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEgresadoRequest $request)
    {
        //Log::channel('debug')->info("quiero guardar");

        if (Gate::allows('create', Egresado::class)) {
            // Crear tramite
            //Log::channel('debug')->info("puedo guardar");

            $egresado = new Egresado();
            $datos = $request->all();
            //Log::channel('debug')->info("intento guardar");

            $egresado->fill($datos);
            //Log::channel('debug')->info("voy a  guardar");

            $egresado->save();
            return response()->json($egresado, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Egresado $egresado)
    {
        if (Gate::allows('view', $egresado)) {
            return response()->json($egresado);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Egresado::find($egresado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEgresadoRequest $request, Egresado $egresado)
    {
        if (Gate::allows('update', $egresado)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $egresado->fill($datos);
            //$egresado->load('carrera_id', 'plan_estudios_id'); // Cargar relaciones necesarias (Produce errores cuando no hay relaciones anteriormente cargadas)

            $egresado->save();

            return response()->json($egresado, 200);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Egresado $egresado)
    {
        if (Gate::allows('delete', $egresado)) {
            $egresado->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
