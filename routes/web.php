<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionesController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\IngenierosController;
use App\Http\Controllers\SolucionesController;
use App\Http\Controllers\ReparacionesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/region',[RegionesController::class,'index']);

Route::get('/departamentos',[DepartamentosController::class,'index']);

Route::get('/ingenieros',[IngenierosController::class,'index']);

Route::get('/soluciones',[SolucionesController::class,'index']);

Route::get('/soluciones',[ReparacionesController::class,'index']);