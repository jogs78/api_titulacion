<?php

namespace App\Http\Controllers;

use App\Models\OpcionRequisito;
use App\Http\Requests\StoreOpcionRequisitoRequest;
use App\Http\Requests\UpdateOpcionRequisitoRequest;
use Illuminate\Support\Facades\Gate;

class OpcionRequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', OpcionRequisito::class)){
            $opcionRequisito = OpcionRequisito::all();
            return response()->json($opcionRequisito, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOpcionRequisitoRequest $request)
    {
        if (Gate::allows('create', OpcionRequisito::class)) {
            // Crear tramite
            $opcionRequisito = new OpcionRequisito();
            $datos = $request->all();
            $opcionRequisito->fill($datos);
            $opcionRequisito->save();
            return response()->json($opcionRequisito, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(OpcionRequisito $opcionRequisito)
    {
        if (Gate::allows('view', $opcionRequisito)) {
            return response()->json($opcionRequisito);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = OpcionRequisito::find($opcionRequisito);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOpcionRequisitoRequest $request, OpcionRequisito $opcionRequisito)
    {
        if (Gate::allows('update', $opcionRequisito)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $opcionRequisito->fill($datos);
            $opcionRequisito->load('egresado', 'titulacionOpciones', 'comite', 'acto'); // Cargar relaciones necesarias

            $opcionRequisito->save();

            return response()->json($opcionRequisito);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpcionRequisito $opcionRequisito)
    {
        if (Gate::allows('delete', $opcionRequisito)) {
            $opcionRequisito->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
