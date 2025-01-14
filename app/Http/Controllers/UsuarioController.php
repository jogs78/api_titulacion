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
        if(Gate::allows('viewAny', Usuario::class)){
            $usuario = Usuario::all();
            return response()->json($usuario, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {

            // Crear usuario
            $usuario = new Usuario();
            $datos = $request->all();
            $usuario->fill($datos);
            $usuario->save();
            return response()->json($usuario, 201);
        
    }
    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        if (Gate::allows('view', $usuario)) {
            return response()->json( $usuario->actual);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        if (Gate::allows('update', $usuario)) {
            $datos = $request->all();

            // Actualizar relaciones si es necesario
            $usuario->fill($datos);
            $usuario->save();

            return response()->json($usuario);
        } else {
            return response()->json(['message' => 'No tienes permisos para actualizar este trámite'], 403);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        if (Gate::allows('delete', $usuario)) {
            $usuario->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
