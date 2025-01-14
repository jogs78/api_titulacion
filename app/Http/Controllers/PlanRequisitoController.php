<?php

namespace App\Http\Controllers;

use App\Models\PlanRequisito;
use App\Http\Requests\StorePlanRequisitoRequest;
use App\Http\Requests\UpdatePlanRequisitoRequest;
use Illuminate\Support\Facades\Gate;

class PlanRequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', PlanRequisito::class)){
            $planRequisito = PlanRequisito::all();
            return response()->json($planRequisito, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanRequisitoRequest $request)
    {
        if (Gate::allows('create', PlanRequisito::class)) {
            // Crear tramite
            $planRequisito = new PlanRequisito();
            $datos = $request->all();
            $planRequisito->fill($datos);
            $planRequisito->save();
            return response()->json($planRequisito, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanRequisito $planRequisito)
    {
        if (Gate::allows('view', $planRequisito)) {
            return response()->json($planRequisito);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = PlanRequisito::find($planRequisito);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanRequisitoRequest $request, PlanRequisito $planRequisito)
    {
        if (Gate::allows('update', $planRequisito)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $planRequisito->fill($datos);
            $planRequisito->load('plan_estudio_id'); // Cargar relaciones necesarias
            $planRequisito->save();

            return response()->json($planRequisito);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanRequisito $planRequisito)
    {
        if (Gate::allows('delete', $planRequisito)) {
            $planRequisito->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }

    }
}
