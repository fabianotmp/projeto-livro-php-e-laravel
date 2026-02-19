<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos',[ProdutoController::class, 'index']);
Route::get('/produtos/show/{id}',[ProdutoController::class, 'show']);
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos/store', [ProdutoController::class, 'store']);