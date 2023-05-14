<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClotheController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);


Route::get('/clothe',[ClotheController::class, 'index']);

Route::get('/clothe/{id}',[ClotheController::class, 'show']);

Route::get('/clothe/data/create',[ClotheController::class, 'create']);

Route::post('/clothe',[ClotheController::class, 'store']);

Route::get('/clothe/{id}/edit',[ClotheController::class, 'edit']);

Route::put('/clothe/{id}',[ClotheController::class, 'update']);

Route::delete('/clothe/{id}',[ClotheController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
