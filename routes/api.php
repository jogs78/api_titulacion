<?php

use App\Http\Controllers\PuertaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlanEstudioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource("planestudios", PlanEstudioController::class)->middleware('existe');
Route::apiResource("usuarios", UsuarioController::class)->middleware('existe');
Route::post('autenticar',[PuertaController::class,'autenticar']);