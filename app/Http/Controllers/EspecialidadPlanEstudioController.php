<?php

namespace App\Http\Controllers;

use App\Models\EspecialidadPlanEstudio;
use App\Http\Requests\StoreEspecialidadPlanEstudioRequest;
use App\Http\Requests\UpdateEspecialidadPlanEstudioRequest;
use Illuminate\Support\Facades\Gate;

class EspecialidadPlanEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', EspecialidadPlanEstudio::class)){
            $especialidadPlanEstudio = EspecialidadPlanEstudio::all();
            return response()->json($especialidadPlanEstudio, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEspecialidadPlanEstudioRequest $request)
    {
        if (Gate::allows('create', EspecialidadPlanEstudio::class)) {
            // Crear tramite
            $especialidadPlanEstudio = new EspecialidadPlanEstudio();
            $datos = $request->all();
            $especialidadPlanEstudio->fill($datos);
            $especialidadPlanEstudio->save();
            return response()->json($especialidadPlanEstudio, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EspecialidadPlanEstudio $especialidadPlanEstudio)
    {
        if (Gate::allows('view', $especialidadPlanEstudio)) {
            return response()->json($especialidadPlanEstudio);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = EspecialidadPlanEstudio::find($especialidadPlanEstudio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEspecialidadPlanEstudioRequest $request, EspecialidadPlanEstudio $especialidadPlanEstudio)
    {
        if (Gate::allows('update', $especialidadPlanEstudio)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $especialidadPlanEstudio->fill($datos);
            $especialidadPlanEstudio->load('especialidad_id', 'plan_estudio_id'); // Cargar relaciones necesarias

            $especialidadPlanEstudio->save();

            return response()->json($especialidadPlanEstudio);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EspecialidadPlanEstudio $especialidadPlanEstudio)
    {
        if (Gate::allows('delete', $especialidadPlanEstudio)) {
            $especialidadPlanEstudio->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
