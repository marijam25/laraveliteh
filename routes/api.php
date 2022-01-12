<?php

use App\Http\Controllers\API\GalaksijaController;
use App\Http\Controllers\API\PlanetaController;
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

Route::get('galaksija', [GalaksijaController::class, 'index']);
Route::get('galaksija/{galaksija}', [GalaksijaController::class, 'show']);
Route::delete('galaksija/{galaksija}', [GalaksijaController::class, 'destroy']);

Route::get('planeta', [PlanetaController::class, 'index']);
Route::delete('planeta/{planeta}', [PlanetaController::class, 'destroy']);
Route::post('planeta', [PlanetaController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
