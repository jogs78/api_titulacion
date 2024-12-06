<?php

namespace App\Http\Controllers;

use App\Models\OpcionRequisito;
use App\Http\Requests\StoreOpcionRequisitoRequest;
use App\Http\Requests\UpdateOpcionRequisitoRequest;

class OpcionRequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = OpcionRequisito::all();
            return response()->json($tramites, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOpcionRequisitoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OpcionRequisito $opcionRequisito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOpcionRequisitoRequest $request, OpcionRequisito $opcionRequisito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpcionRequisito $opcionRequisito)
    {
        //
    }
}
