<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sampahs', [SampahsController::class, 'index']);
Route::post('/sampahs/store', [SampahsController::class, 'store']); 
Route::get('/sampahs/{id}', [SampahsController::class, 'show']);
Route::patch('/sampahs/update/{id}', [SampahsController::class, 'update']);
Route::delete('/sampahs/delete/{id}', [SampahsController::class, 'destroy']);
Route::get('/sampahs/show/trash', [SampahsController::class, 'trash']);
Route::get('/sampahs/trash/restore/{id}', [SampahsController::class, 'restore']);
Route::get('/sampahs/trash/delete/permanent/{id}', [SampahsController::class, 'permanentDelete']);  