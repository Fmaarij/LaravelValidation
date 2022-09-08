<?php

use App\Http\Controllers\GoldenbookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GoldenbookController::class,'index'])->name('home');
Route::get('/form', [GoldenbookController::class,'create'])->name('ajouter');
Route::post('/create', [GoldenbookController::class,'store']);
Route::get('/show/{id}', [GoldenbookController::class,'show'])->name('show');
Route::get('/edit/{id}', [GoldenbookController::class,'edit']);
Route::put('/edit/{id}/update', [GoldenbookController::class,'update']);
Route::delete('/{id}/delete', [GoldenbookController::class,'destroy']);


