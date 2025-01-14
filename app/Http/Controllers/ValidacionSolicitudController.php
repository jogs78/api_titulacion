<?php

namespace App\Http\Controllers;

use App\Models\ValidacionSolicitud;
use App\Http\Requests\StoreValidacionSolicitudRequest;
use App\Http\Requests\UpdateValidacionSolicitudRequest;
use Illuminate\Support\Facades\Gate;

class ValidacionSolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', ValidacionSolicitud::class)){
            $validacionSolicitud = ValidacionSolicitud::all();
            return response()->json($validacionSolicitud, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreValidacionSolicitudRequest $request)
    {
        if (Gate::allows('create', ValidacionSolicitud::class)) {
            // Crear tramite
            $validacionSolicitud = new ValidacionSolicitud();
            $datos = $request->all();
            $validacionSolicitud->fill($datos);
            $validacionSolicitud->save();
            return response()->json($validacionSolicitud, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ValidacionSolicitud $validacionSolicitud)
    {
        if (Gate::allows('view', $validacionSolicitud)) {
            return response()->json($validacionSolicitud);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = ValidacionSolicitud::find($validacionSolicitud);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateValidacionSolicitudRequest $request, ValidacionSolicitud $validacionSolicitud)
    {
        if (Gate::allows('update', $validacionSolicitud)) {
            $datos = $request->all();

            $validacionSolicitud->fill($datos);
            $validacionSolicitud->load('documento_solicitud_id', 'egresado_id',); // Cargar relaciones necesarias
            $validacionSolicitud->save();

            return response()->json($validacionSolicitud);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ValidacionSolicitud $validacionSolicitud)
    {
        if (Gate::allows('delete', $validacionSolicitud)) {
            $validacionSolicitud->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
