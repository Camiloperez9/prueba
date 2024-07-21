<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personitaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/personita', [personitaController::class, "ListarTodas"]);
Route::get('/personita/{d}', [personitaController::class, "ListarUna"]);
Route::post('/personita', [personitaController::class, "Crear"]);
Route::delete('/personita/{d}', [personitaController::class, "Eliminar"]);
Route::put('/personita/{d}', [personitaController::class, "Modificar"]);