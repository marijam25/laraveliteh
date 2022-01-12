<?php

use App\Http\Controllers\API\AuthentificationController;
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


Route::post('register', [AuthentificationController::class, 'register']);
Route::post('login', [AuthentificationController::class, 'login']);
Route::get('galaksija', [GalaksijaController::class, 'index']);
Route::get('galaksija/{galaksija}', [GalaksijaController::class, 'show']);
Route::get('planeta', [PlanetaController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::delete('galaksija/{galaksija}', [GalaksijaController::class, 'destroy']);
    Route::delete('planeta/{planeta}', [PlanetaController::class, 'destroy']);
    Route::post('planeta', [PlanetaController::class, 'store']);
    Route::post('logout', [AuthentificationController::class, 'logout']);
});
