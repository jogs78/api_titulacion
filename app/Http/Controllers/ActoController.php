<?php

namespace App\Http\Controllers;

use App\Models\Acto;
use App\Http\Requests\StoreActoRequest;
use App\Http\Requests\UpdateActoRequest;
use Illuminate\Support\Facades\Gate;

class ActoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Acto::class)){
            $actos = Acto::all();
            return response()->json($actos, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActoRequest $request)
    {
        if (Gate::allows('create', Acto::class)) {
            // Crear tramite
            $acto = new Acto();
            $datos = $request->all();
            $acto->fill($datos);
            $acto->save();
            return response()->json($acto, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Acto $acto)
    {
        if (Gate::allows('view', $acto)) {
            return response()->json($acto);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Acto::find($acto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActoRequest $request, Acto $acto)
    {
        if (Gate::allows('update', $acto)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $acto->fill($datos);
            $acto->save();

            return response()->json($acto);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acto $acto)
    {
        if (Gate::allows('delete', $acto)) {
            $acto->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
