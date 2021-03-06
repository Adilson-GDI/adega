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

*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


 Route::get('/lista-produtos', [App\Http\Controllers\ProdutosController::class,'ListaProdutos']);
Route::get('/lista-clientes', [App\Http\Controllers\ClientesController::class,'ListaClientes']);
Route::get('/imagens', [App\Http\Controllers\ProdutosController::class,'ListaImagens']);
Route::get('/lista-marcas', [App\Http\Controllers\ProdutosController::class,'ListaMarcas']);

Route::get('/consulta-carrinho/{id}', [App\Http\Controllers\CartsController::class,'ConsultaCarrinho']);
Route::get('/consulta-produto/{id}', [App\Http\Controllers\ProdutosController::class,'ConsultaProduto']);
Route::get('/soma/{id}', [App\Http\Controllers\CartsController::class,'SomaCarrinho']);
Route::post('/add-carrinho/', [App\Http\Controllers\CartsController::class,'AddCarrinho']);


Route::get('/delete/{id}', [App\Http\Controllers\CartsController::class,'DeleteCarrinho']);