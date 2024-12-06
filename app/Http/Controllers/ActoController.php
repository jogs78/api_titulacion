<?php

namespace App\Http\Controllers;

use App\Models\Acto;
use App\Http\Requests\StoreActoRequest;
use App\Http\Requests\UpdateActoRequest;

class ActoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = Acto::all();
            return response()->json($tramites, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Acto $acto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActoRequest $request, Acto $acto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acto $acto)
    {
        //
    }
}
