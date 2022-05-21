<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Routes for the API
Route::resource('/accesorios', App\Http\Controllers\AccesorioController::class)->only(['index']);
Route::resource('/alimentos', App\Http\Controllers\AlimentoController::class)->only(['index']);
Route::resource('/cuidados', App\Http\Controllers\CuidadoController::class)->only(['index']);
Route::resource('/farmapets', App\Http\Controllers\FarmapetController::class)->only(['index']);
Route::resource('/jueguetes', App\Http\Controllers\JugueteController::class)->only(['index']);
Route::resource('/snacks', App\Http\Controllers\SnackController::class)->only(['index']);
