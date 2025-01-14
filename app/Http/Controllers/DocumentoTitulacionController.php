<?php

namespace App\Http\Controllers;

use App\Models\DocumentoTitulacion;
use App\Http\Requests\StoreDocumentoTitulacionRequest;
use App\Http\Requests\UpdateDocumentoTitulacionRequest;
use Illuminate\Support\Facades\Gate;

class DocumentoTitulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', DocumentoTitulacion::class)){
            $documentoTitulacion = DocumentoTitulacion::all();
            return response()->json($documentoTitulacion, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentoTitulacionRequest $request)
    {
        if (Gate::allows('create', DocumentoTitulacion::class)) {
            if (is_null($request->file('archivo'))) {
                return response()->json(['error' => 'No se ha cargado documento'], 403);
            }else {
                $nombre_guardar =rand(1, 1000) . $request->file('archivo')->getClientOriginalName();
                $request->file('archivo')->storeAs('',$nombre_guardar, 'privadas');

                $documento = new DocumentoTitulacion();
                $documento->nombre = $request->file('archivo')->getClientOriginalName();
                $documento->ruta = $nombre_guardar;
                $egresado = auth()->user()->egresado;// id de egresado logueado
                $documento->tramite_id = $egresado->tramite_id;// trámite relacionado con el egresado
                $documento->opcion_requisto_id = $request->opcion_requisto_id;
                $documento->save();
                return response()->json(['message' => 'Documento cargado con éxito'], 200);
            }
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentoTitulacion $documentoTitulacion)
    {
        if (Gate::allows('view', $documentoTitulacion)) {
            return response()->json($documentoTitulacion);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = DocumentoTitulacion::find($documentoTitulacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentoTitulacionRequest $request, DocumentoTitulacion $documentoTitulacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentoTitulacion $documentoTitulacion)
    {
        if (Gate::allows('delete', $documentoTitulacion)) {
            $documentoTitulacion->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
