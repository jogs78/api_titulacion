<?php

namespace App\Http\Controllers;

use App\Models\PlanEstudio;
use App\Http\Requests\StorePlanEstudioRequest;
use App\Http\Requests\UpdatePlanEstudioRequest;
use Illuminate\Support\Facades\Gate;

class PlanEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = PlanEstudio::all();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanEstudioRequest $request)
    {
        if(Gate::allows('create', PlanEstudio::class) ){
            return response()->json(["Dando de alta",200]);
        }else{
            return response()->json(["No puede",403]);
        }
//        $this->authorize('create', PlanEstudio::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanEstudio $planEstudio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlanEstudio $planEstudio)
    {
        if(Gate::allows('update', $planEstudio) ){
            return response()->json(["editando",200]);
        }else{
            return response()->json(["No puede",403]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanEstudioRequest $request, PlanEstudio $planEstudio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanEstudio $planEstudio)
    {
        //
    }
}
