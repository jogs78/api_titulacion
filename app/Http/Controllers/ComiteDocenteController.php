<?php

namespace App\Http\Controllers;

use App\Models\ComiteDocente;
use App\Http\Requests\StoreComiteDocenteRequest;
use App\Http\Requests\UpdateComiteDocenteRequest;

class ComiteDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = ComiteDocente::all();
        return response()->json($tramites, 200);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComiteDocenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ComiteDocente $comiteDocente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComiteDocenteRequest $request, ComiteDocente $comiteDocente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComiteDocente $comiteDocente)
    {
        //
    }
}
