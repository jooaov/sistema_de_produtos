<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::middleware('auth')->group(function () {
//view
Route::get('/produtos/novo',[produtosController::class, 'view_create']);
Route::get('/',[produtosController::class, 'view_read']);
Route::get('/produtos/{id}',[produtosController::class, 'view_edit']);

//create
Route::post('/produtos/novo',[produtosController::class, 'store'])->name('registrar_produto');
//edit
Route::post('/produtos/{id}',[produtosController::class, 'edit']);
//delete
Route::get('/produtos/delete/{id}',[produtosController::class, 'delete']);
});