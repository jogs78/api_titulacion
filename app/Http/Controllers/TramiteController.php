<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Http\Requests\StoreTramiteRequest;
use App\Http\Requests\UpdateTramiteRequest;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTramiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tramite $tramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTramiteRequest $request, Tramite $tramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tramite $tramite)
    {
        //
    }
}
