<?php

namespace App\Http\Controllers;

use App\Models\DocumentoSolicitud;
use App\Http\Requests\StoreDocumentoSolicitudRequest;
use App\Http\Requests\UpdateDocumentoSolicitudRequest;
use Illuminate\Support\Facades\Gate;

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
        if (Gate::allows('create', DocumentoSolicitud::class)) {
            if (is_null($request->file('archivo'))) {
                return response()->json(['error' => 'No se ha cargado documento'], 403);
            }else {
                $nombre_guardar =rand(1, 1000) . $request->file('archivo')->getClientOriginalName();
                $request->file('archivo')->storeAs('',$nombre_guardar, 'privadas');

                $documento = new DocumentoSolicitud();
                $documento->nombre = $request->file('archivo')->getClientOriginalName();
                $documento->ruta = $nombre_guardar;
                $egresado = auth()->user();
                $documento->egresado_id = $egresado->id;
                $documento->plan_estudio_id = $egresado->planEstudio->id;
                $documento->save();
            }
        } else {
            return response()->json(['error' => 'No autorizado'], 403);
        }
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
            $documentoSolicitud->delete();

            return response()->json(['message' => 'Trámite eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No tienes permisos para eliminar este trámite'], 403);
        }
    }
}
