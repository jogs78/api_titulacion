<?php

namespace App\Http\Controllers;

use App\Models\PlanEstudiosTitulacionOpcion;
use App\Http\Requests\StorePlanEstudiosTitulacionOpcionRequest;
use App\Http\Requests\UpdatePlanEstudiosTitulacionOpcionRequest;
use Illuminate\Support\Facades\Gate;

class PlanEstudiosTitulacionOpcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', PlanEstudiosTitulacionOpcion::class)){
            $planEstudiosTitulacionOpcion = PlanEstudiosTitulacionOpcion::all();
            return response()->json($planEstudiosTitulacionOpcion, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanEstudiosTitulacionOpcionRequest $request)
    {
        if (Gate::allows('create', PlanEstudiosTitulacionOpcion::class)) {
            // Crear tramite
            $planEstudiosTitulacionOpcion = new PlanEstudiosTitulacionOpcion();
            $datos = $request->all();
            $planEstudiosTitulacionOpcion->fill($datos);
            $planEstudiosTitulacionOpcion->save();
            return response()->json($planEstudiosTitulacionOpcion, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanEstudiosTitulacionOpcion $planEstudiosTitulacionOpcion)
    {
        if (Gate::allows('view', $planEstudiosTitulacionOpcion)) {
            return response()->json($planEstudiosTitulacionOpcion);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = PlanEstudiosTitulacionOpcion::find($planEstudiosTitulacionOpcion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanEstudiosTitulacionOpcionRequest $request, PlanEstudiosTitulacionOpcion $planEstudiosTitulacionOpcion)
    {
        if (Gate::allows('update', $planEstudiosTitulacionOpcion)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $planEstudiosTitulacionOpcion->fill($datos);
            $planEstudiosTitulacionOpcion->load('plan_estudios_id', 'titulacion_opcion_id'); // Cargar relaciones necesarias
            $planEstudiosTitulacionOpcion->save();

            return response()->json($planEstudiosTitulacionOpcion);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanEstudiosTitulacionOpcion $planEstudiosTitulacionOpcion)
    {
        if (Gate::allows('delete', $planEstudiosTitulacionOpcion)) {
            $planEstudiosTitulacionOpcion->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
