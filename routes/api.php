<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
Route::post('/login', [
    AuthController::class, 'login',
]);
Route::apiResource('/user',
    UserController::class, );
Route::apiResource('/commande',
    CommandeController::class, );
Route::apiResource('/livraison',
    LivraisonController::class, );
Route::apiResource('/livraison',
    ZoneController::class, );
Route::apiResource('/catalogue',
    CatalogueController::class, );
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
