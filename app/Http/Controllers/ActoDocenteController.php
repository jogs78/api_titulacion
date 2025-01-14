<?php

namespace App\Http\Controllers;

use App\Models\ActoDocente;
use App\Http\Requests\StoreActoDocenteRequest;
use App\Http\Requests\UpdateActoDocenteRequest;
use App\Models\Acto;
use Illuminate\Support\Facades\Gate;

class ActoDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Acto::class)){
            $actoDocente = Acto::all();
            return response()->json($actoDocente, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActoDocenteRequest $request)
    {
        if (Gate::allows('create', ActoDocente::class)) {
            // Crear tramite
            $actoDocente = new ActoDocente();
            $datos = $request->all();
            $actoDocente->fill($datos);
            $actoDocente->save();
            return response()->json($actoDocente, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ActoDocente $actoDocente)
    {
        if (Gate::allows('view', $actoDocente)) {
            return response()->json($actoDocente);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = ActoDocente::find($actoDocente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActoDocenteRequest $request, ActoDocente $actoDocente)
    {
        if (Gate::allows('update', $actoDocente)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $actoDocente->fill($datos);
            $actoDocente->load('acto', 'docente'); // Cargar relaciones necesarias

            $actoDocente->save();

            return response()->json($actoDocente);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActoDocente $actoDocente)
    {
        if (Gate::allows('delete', $actoDocente)) {
            $actoDocente->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
