<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
use App\Http\Requests\StoreAdministrativoRequest;
use App\Http\Requests\UpdateAdministrativoRequest;
use Illuminate\Support\Facades\Gate;

class AdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Administrativo::class)){
            $administrativo = Administrativo::all();
            return response()->json($administrativo, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdministrativoRequest $request)
    {
        if (Gate::allows('create', Administrativo::class)) {
            // Crear tramite
            $administrativo = new Administrativo();
            $datos = $request->all();
            $administrativo->fill($datos);
            $administrativo->save();
            return response()->json($administrativo, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrativo $administrativo)
    {
        if (Gate::allows('view', $administrativo)) {
            return response()->json($administrativo);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Administrativo::find($administrativo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdministrativoRequest $request, Administrativo $administrativo)
    {
        if (Gate::allows('update', $administrativo)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $administrativo->fill($datos);
            $administrativo->load('egresado', 'titulacionOpciones', 'comite', 'acto'); // Cargar relaciones necesarias

            $administrativo->save();

            return response()->json($administrativo);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrativo $administrativo)
    {
        if (Gate::allows('delete', $administrativo)) {
            $administrativo->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
