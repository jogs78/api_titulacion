<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Gate;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = Usuario::all();
            return response()->json($tramites, 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        if (Gate::allows('create', Usuario::class)) {
            // Crear tramite
            $tramite = new Usuario();
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
    public function show(Usuario $usuario)
    {
        return response()->json( $usuario->actual);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
