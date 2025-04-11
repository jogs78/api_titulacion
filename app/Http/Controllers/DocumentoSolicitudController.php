<?php

namespace App\Http\Controllers;

use App\Models\DocumentoSolicitud;
use App\Http\Requests\StoreDocumentoSolicitudRequest;
use App\Http\Requests\UpdateDocumentoSolicitudRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class DocumentoSolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', DocumentoSolicitud::class)){
            $documentoSolicitud = DocumentoSolicitud::all();
            return response()->json($documentoSolicitud, 200);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentoSolicitudRequest $request)
    {
        //dd($request->all()); // Ver qué datos está recibiendo Laravel
        if (!Gate::allows('create', DocumentoSolicitud::class)) {
            return response()->json(['error' => 'No autorizado'], 403);
        }

        if (!$request->hasFile('archivo')) {
            return response()->json(['error' => 'No se ha cargado documento'], 422);
        }

        $egresado = auth()->user();
        if (!$egresado) {
            return response()->json(['error' => 'Usuario no autenticado'], 401);

        }



        $nombre_guardar = rand(1, 1000) . $request->file('archivo')->getClientOriginalName();
        $request->file('archivo')->storeAs('', $nombre_guardar, 'privadas');

        $documento = new DocumentoSolicitud();
        $documento->nombre = $request->file('archivo')->getClientOriginalName();
        $documento->ruta = $nombre_guardar;
        $egresado = $egresado->actual;
        $documento->egresado_id = $egresado->id;
        $documento->plan_estudios_id = $egresado->plan_estudio_id;
        $documento->save();

        return response()->json($documento, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentoSolicitud $documentoSolicitud)
    {
        if (Gate::allows('view', $documentoSolicitud)) {
            return response()->json($documentoSolicitud);
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
        $data = DocumentoSolicitud::find($documentoSolicitud);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentoSolicitudRequest $request, DocumentoSolicitud $documentoSolicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentoSolicitud $documentoSolicitud)
    {
        if (Gate::allows('delete', $documentoSolicitud)) {

            //borrar el archivo fisicamente
            Storage::disk('privadas')->delete($documentoSolicitud->ruta);
            $documentoSolicitud->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}

