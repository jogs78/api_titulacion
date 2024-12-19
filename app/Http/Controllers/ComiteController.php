<?php

namespace App\Http\Controllers;

use App\Models\Comite;
use App\Http\Requests\StoreComiteRequest;
use App\Http\Requests\UpdateComiteRequest;
use Illuminate\Support\Facades\Gate;

class ComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Comite::class)){
            $comite = Comite::all();
            return response()->json($comite, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComiteRequest $request)
    {
        if (Gate::allows('create', Comite::class)) {
            // Crear tramite
            $comite = new Comite();
            $datos = $request->all();
            $comite->fill($datos);
            $comite->save();
            return response()->json($comite, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Comite $comite)
    {
        if (Gate::allows('view', $comite)) {
            return response()->json($comite);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Comite::find($comite);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComiteRequest $request, Comite $comite)
    {
        if (Gate::allows('update', $comite)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $comite->fill($datos);
            $comite->load('egresado', 'titulacionOpciones', 'comite', 'acto'); // Cargar relaciones necesarias

            $comite->save();

            return response()->json($comite);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comite $comite)
    {
        if (Gate::allows('delete', $comite)) {
            $comite->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
