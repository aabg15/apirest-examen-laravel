<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspeccionController;

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

//Route::apiResource('inspeccion', InspeccionController::class);
//Route::get('/inspeccion', [InspeccionController::class, 'index']);
//Route::get('/inspeccion', [InspeccionController::class, 'show']);
//Route::get('/inspeccion', [InspeccionController::class, 'index']);


Route::get('/inspeccion', [InspeccionController::class, 'index']);
//Route::get('/inspeccion', [InspeccionController::class, 'index']);

//Route::resource('photos', PhotoController::class);



//Route::apiResource(name:'inspeccion',controller:InspeccionController::class);
//Route::apiResource(name:'balance',controller:BalanceController::class);
