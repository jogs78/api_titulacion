<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Http\Requests\StoreCarreraRequest;
use App\Http\Requests\UpdateCarreraRequest;
use Illuminate\Support\Facades\Gate;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Carrera::class)){
            $carreras = Carrera::all();
            return response()->json($carreras, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }


    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarreraRequest $request)
    {
        if (Gate::allows('create', Carrera::class)) {
            // Crear tramite
            $carrera = new Carrera();
            $datos = $request->all();
            $carrera->fill($datos);
            $carrera->save();
            return response()->json($carrera, 201);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        if (Gate::allows('view', $carrera)) {
            return response()->json($carrera);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = Carrera::find($carrera);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarreraRequest $request, Carrera $carrera)
    {
            if (Gate::allows('update', $carrera)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $carrera->fill($datos);
            $carrera->save();

            return response()->json($carrera);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        if (Gate::allows('delete', $carrera)) {
            $carrera->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
