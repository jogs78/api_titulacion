<?php

namespace App\Http\Controllers;

use App\Models\TitulacionOpcion;
use App\Http\Requests\StoreTitulacionOpcionRequest;
use App\Http\Requests\UpdateTitulacionOpcionRequest;
use Illuminate\Support\Facades\Gate;

class TitulacionOpcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', TitulacionOpcion::class)){
            $titulacionOpcion = TitulacionOpcion::all();
            return response()->json($titulacionOpcion, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTitulacionOpcionRequest $request)
    {
        if (Gate::allows('create', TitulacionOpcion::class)) {
            // Crear tramite
            $titulacionOpcion = new TitulacionOpcion();
            $datos = $request->all();
            $titulacionOpcion->fill($datos);
            $titulacionOpcion->save();
            return response()->json($titulacionOpcion, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TitulacionOpcion $titulacionOpcion)
    {
        if (Gate::allows('view', $titulacionOpcion)) {
            return response()->json($titulacionOpcion);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = TitulacionOpcion::find($titulacionOpcion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTitulacionOpcionRequest $request, TitulacionOpcion $titulacionOpcion)
    {
        if (Gate::allows('update', $titulacionOpcion)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $titulacionOpcion->fill($datos);
            $titulacionOpcion->save();

            return response()->json($titulacionOpcion);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TitulacionOpcion $titulacionOpcion)
    {
        if (Gate::allows('delete', $titulacionOpcion)) {
            $titulacionOpcion->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
