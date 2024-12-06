<?php

namespace App\Http\Controllers;

use App\Models\PlanRequisito;
use App\Http\Requests\StorePlanRequisitoRequest;
use App\Http\Requests\UpdatePlanRequisitoRequest;

class PlanRequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tramites = PlanRequisito::all();
            return response()->json($tramites, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanRequisitoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanRequisito $planRequisito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanRequisitoRequest $request, PlanRequisito $planRequisito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanRequisito $planRequisito)
    {
        //
    }
}
