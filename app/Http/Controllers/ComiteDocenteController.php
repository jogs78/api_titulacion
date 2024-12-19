<?php

namespace App\Http\Controllers;

use App\Models\ComiteDocente;
use App\Http\Requests\StoreComiteDocenteRequest;
use App\Http\Requests\UpdateComiteDocenteRequest;
use Illuminate\Support\Facades\Gate;

class ComiteDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', ComiteDocente::class)){
            $comiteDocente = ComiteDocente::all();
            return response()->json($comiteDocente, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComiteDocenteRequest $request)
    {
        if (Gate::allows('create', ComiteDocente::class)) {
            // Crear tramite
            $comiteDocente = new ComiteDocente();
            $datos = $request->all();
            $comiteDocente->fill($datos);
            $comiteDocente->save();
            return response()->json($comiteDocente, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ComiteDocente $comiteDocente)
    {
        if (Gate::allows('view', $comiteDocente)) {
            return response()->json($comiteDocente);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = ComiteDocente::find($comiteDocente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComiteDocenteRequest $request, ComiteDocente $comiteDocente)
    {
        if (Gate::allows('update', $comiteDocente)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $comiteDocente->fill($datos);
            $comiteDocente->load('comite', 'docente'); // Cargar relaciones necesarias

            $comiteDocente->save();

            return response()->json($comiteDocente);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComiteDocente $comiteDocente)
    {
        if (Gate::allows('delete', $comiteDocente)) {
            $comiteDocente->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
