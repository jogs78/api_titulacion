<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Http\Requests\StoreEspecialidadRequest;
use App\Http\Requests\UpdateEspecialidadRequest;
use Illuminate\Support\Facades\Gate;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Especialidad::class)){
            $especialidads = Especialidad::all();
            return response()->json($especialidads, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEspecialidadRequest $request)
    {
        if (Gate::allows('create', Especialidad::class)) {
            // Crear tramite
            $especialidad = new Especialidad();
            $datos = $request->all();
            $especialidad->fill($datos);
            $especialidad->save();
            return response()->json($especialidad, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Especialidad $especialidad)
    {
        if (Gate::allows('view', $especialidad)) {
            return response()->json($especialidad);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Especialidad::find($especialidad);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEspecialidadRequest $request, Especialidad $especialidad)
    {
        if (Gate::allows('update', $especialidad)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $especialidad->fill($datos);
            $especialidad->save();

            return response()->json($especialidad);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especialidad $especialidad)
    {
        if (Gate::allows('delete', $especialidad)) {
            $especialidad->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
