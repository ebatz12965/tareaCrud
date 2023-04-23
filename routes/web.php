<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [\App\Http\Controllers\PersonaController::class, 'index'])->name('persona.index');
Route::get('/create', [\App\Http\Controllers\PersonaController::class, 'create'])->name('persona.create');
Route::post('/store', [\App\Http\Controllers\PersonaController::class, 'store'])->name('persona.store');
Route::get('/edit/{id}', [\App\Http\Controllers\PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/update/{id}', [\App\Http\Controllers\PersonaController::class, 'update'])->name('persona.update');
Route::get('/show/{id}', [\App\Http\Controllers\PersonaController::class, 'show'])->name('persona.show');
Route::delete('destroy/{id}', [\App\Http\Controllers\PersonaController::class, 'destroy'])->name('persona.destroy');

Route::get('/listaT', [\App\Http\Controllers\TransporteController::class, 'index'])->name('transporte.index');
Route::get('/listaC', [\App\Http\Controllers\CamionController::class, 'index'])->name('camion.index');

Route::get('/inicio', [\App\Http\Controllers\Controller::class, 'index'])->name('inicio');
