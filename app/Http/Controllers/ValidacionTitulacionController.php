<?php

namespace App\Http\Controllers;

use App\Models\ValidacionTitulacion;
use App\Http\Requests\StoreValidacionTitulacionRequest;
use App\Http\Requests\UpdateValidacionTitulacionRequest;
use Illuminate\Support\Facades\Gate;

class ValidacionTitulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', ValidacionTitulacion::class)){
            $validacionTitulacion = ValidacionTitulacion::all();
            return response()->json($validacionTitulacion, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreValidacionTitulacionRequest $request)
    {
        if (Gate::allows('create', ValidacionTitulacion::class)) {
            // Crear tramite
            $validacionTitulacion = new ValidacionTitulacion();
            $datos = $request->all();
            $validacionTitulacion->fill($datos);
            $validacionTitulacion->save();
            return response()->json($validacionTitulacion, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ValidacionTitulacion $validacionTitulacion)
    {
        if (Gate::allows('view', $validacionTitulacion)) {
            return response()->json($validacionTitulacion);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = ValidacionTitulacion::find($validacionTitulacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateValidacionTitulacionRequest $request, ValidacionTitulacion $validacionTitulacion)
    {
        if (Gate::allows('update', $validacionTitulacion)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $validacionTitulacion->fill($datos);
            $validacionTitulacion->load('documento_titulacion_id'); // Cargar relaciones necesarias
            $validacionTitulacion->save();

            return response()->json($validacionTitulacion);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ValidacionTitulacion $validacionTitulacion)
    {
        if (Gate::allows('delete', $validacionTitulacion)) {
            $validacionTitulacion->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
