<?php

use App\Http\Controllers\ActoController;
use App\Http\Controllers\ActoDocenteController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ComiteController;
use App\Http\Controllers\ComiteDocenteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\DocumentoSolicitudController;
use App\Http\Controllers\DocumentoTitulacionController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\OpcionRequisitoController;
use App\Http\Controllers\PuertaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlanEstudioController;
use App\Http\Controllers\PlanEstudiosTitulacionOpcionController;
use App\Http\Controllers\PlanRequisitoController;
use App\Http\Controllers\TitulacionOpcionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\ValidacionSolicitudController;
use App\Models\Acto;

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

Route::post('autenticar',[PuertaController::class,'autenticar']);
Route::apiResource("planestudios", PlanEstudioController::class)->middleware('existe');
Route::apiResource("usuarios", UsuarioController::class)->middleware('existe');
Route::apiResource("tramites",TramiteController::class)->middleware('existe');
Route::apiResource("carreras",CarreraController::class)->middleware('existe');
Route::apiResource("especialidades",EspecialidadController::class)->middleware('existe');
Route::apiResource("egresados",EgresadoController::class)->middleware('existe');
Route::apiResource("docentes",DocenteController::class)->middleware('existe');
Route::apiResource("planesrequisitos",PlanRequisitoController::class)->middleware('existe');
Route::apiResource("documentossolicitudes",DocumentoSolicitudController::class)->middleware('existe');
Route::apiResource("titulacionesopciones",TitulacionOpcionController::class)->middleware('existe');
Route::apiResource("opcionesrequisitos",OpcionRequisitoController::class)->middleware('existe');
Route::apiResource("comites",ComiteController::class)->middleware('existe');
Route::apiResource("actos",ActoController::class)->middleware('existe');
Route::apiResource("documentotitulaciones",DocumentoTitulacionController::class)->middleware('existe');
Route::apiResource("validaciontitulaciones",ValidacionSolicitudController::class)->middleware('existe');
Route::apiResource("administrativos",AdministrativoController::class)->middleware('existe');
Route::apiResource("planesestudiostitulacionesopciones",PlanEstudiosTitulacionOpcionController::class)->middleware('existe');
Route::apiResource("actosdocentes",ActoDocenteController::class)->middleware('existe');
Route::apiResource("comitesdocentes",ComiteDocenteController::class)->middleware('existe');
