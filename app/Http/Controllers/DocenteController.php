<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Http\Requests\StoreDocenteRequest;
use App\Http\Requests\UpdateDocenteRequest;
use Illuminate\Support\Facades\Gate;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Docente::class)){
            $docente = Docente::all();
            return response()->json($docente, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocenteRequest $request)
    {
        if (Gate::allows('create', Docente::class)) {
            // Crear tramite
            $docente = new Docente();
            $datos = $request->all();
            $docente->fill($datos);
            $docente->save();
            return response()->json($docente, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        if (Gate::allows('view', $docente)) {
            return response()->json($docente);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Docente::find($docente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocenteRequest $request, Docente $docente)
    {
        if (Gate::allows('update', $docente)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $docente->fill($datos);
            $docente->save();

            return response()->json($docente);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        if (Gate::allows('delete', $docente)) {
            $docente->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
