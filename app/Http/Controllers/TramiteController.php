<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Http\Requests\StoreTramiteRequest;
use App\Http\Requests\UpdateTramiteRequest;
use Illuminate\Support\Facades\Gate;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Tramite::class)){
            $tramites = Tramite::all();
            return response()->json($tramites, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTramiteRequest $request)
    {
        if (Gate::allows('create', Tramite::class)) {
            // Crear tramite
            $tramite = new Tramite();
            $datos = $request->all();
            $tramite->fill($datos);
            $tramite->save();
            return response()->json($tramite, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tramite $tramite)
    {
        if (Gate::allows('view', $tramite)) {
            return response()->json($tramite);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Tramite::find($tramite);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTramiteRequest $request, Tramite $tramite)
    {
        if (Gate::allows('update', $tramite)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $tramite->fill($datos);
            $tramite->load('egresado', 'titulacionOpciones', 'comite', 'acto'); // Cargar relaciones necesarias

            $tramite->save();

            return response()->json($tramite);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tramite $tramite)
    {
        if (Gate::allows('delete', $tramite)) {
            $tramite->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
