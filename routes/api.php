<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutosController;
use App\Http\Controllers\Api\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('users','Api\\ProdutosController@index');
Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware('apiJWT')->group(function () {
    Route::get('/produtos',[produtosController::class, 'index']);
    Route::get('/produtos/{id}',[produtosController::class, 'show']);
    Route::delete('/produtos/{id}',[produtosController::class, 'destroy']);
    Route::post('/produtos',[produtosController::class, 'store']);
    Route::put('/produtos/{id}',[produtosController::class, 'update']);
});
