<?php

namespace App\Http\Controllers;

use App\Models\Comite;
use App\Http\Requests\StoreComiteRequest;
use App\Http\Requests\UpdateComiteRequest;

class ComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = Comite::all();
            return response()->json($tramites, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comite $comite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComiteRequest $request, Comite $comite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comite $comite)
    {
        //
    }
}
