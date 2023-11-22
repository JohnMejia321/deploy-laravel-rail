<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RecetasController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\ControllerSuma;
use App\Http\Controllers\ControllerPrueba;
use App\Http\Controllers\ControllerPrueba2;





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

//Route::get('/api', ' RecetasController@obtenerRecetaAleatoria');

Route::get('/api', RecetasController::class . '@obtenerRecetaAleatoria');

Route::get('/data', IngredienteController::class . '@index');

Route::get('/faltante', RecetasController::class . '@obtenerIngredientesFaltantes');











