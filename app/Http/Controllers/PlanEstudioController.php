<?php

namespace App\Http\Controllers;

use App\Models\PlanEstudio;
use App\Http\Requests\StorePlanEstudioRequest;
use App\Http\Requests\UpdatePlanEstudioRequest;
use Illuminate\Support\Facades\Gate;

class PlanEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', PlanEstudio::class)){
            $planEstudio = PlanEstudio::all();
            return response()->json($planEstudio, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanEstudioRequest $request)
    {
        if (Gate::allows('create', PlanEstudio::class)) {
            // Crear tramite
            $planEstudio = new PlanEstudio();
            $datos = $request->all();
            $planEstudio->fill($datos);
            $planEstudio->save();
            return response()->json($planEstudio, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanEstudio $planEstudio)
    {
        if (Gate::allows('view', $planEstudio)) {
            return response()->json($planEstudio);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = PlanEstudio::find($planEstudio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanEstudioRequest $request, PlanEstudio $planEstudio)
    {
        if (Gate::allows('update', $planEstudio)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $planEstudio->fill($datos);
            $planEstudio->load('especialidad_id'); // Cargar relaciones necesarias
            $planEstudio->save();

            return response()->json($planEstudio);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanEstudio $planEstudio)
    {
        if (Gate::allows('delete', $planEstudio)) {
            $planEstudio->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
