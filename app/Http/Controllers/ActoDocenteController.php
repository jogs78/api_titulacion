<?php

namespace App\Http\Controllers;

use App\Models\ActoDocente;
use App\Http\Requests\StoreActoDocenteRequest;
use App\Http\Requests\UpdateActoDocenteRequest;

class ActoDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = ActoDocente::all();
            return response()->json($tramites, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActoDocenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ActoDocente $actoDocente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActoDocenteRequest $request, ActoDocente $actoDocente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActoDocente $actoDocente)
    {
        //
    }
}
