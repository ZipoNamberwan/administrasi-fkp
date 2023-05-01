<?php

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::post('/generate', [App\Http\Controllers\MainController::class, 'generate']);

Route::get('/entry/village/{id}', [App\Http\Controllers\MainController::class, 'getVillage']);

