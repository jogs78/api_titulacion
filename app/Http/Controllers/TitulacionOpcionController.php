<?php

namespace App\Http\Controllers;

use App\Models\TitulacionOpcion;
use App\Http\Requests\StoreTitulacionOpcionRequest;
use App\Http\Requests\UpdateTitulacionOpcionRequest;

class TitulacionOpcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = TitulacionOpcion::all();
            return response()->json($tramites, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTitulacionOpcionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TitulacionOpcion $titulacionOpcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTitulacionOpcionRequest $request, TitulacionOpcion $titulacionOpcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TitulacionOpcion $titulacionOpcion)
    {
        //
    }
}
