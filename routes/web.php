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

Route::get('/', [\App\Http\Controllers\Controller::class, 'index'])->name('inicio.index');

/*Persona*/

Route::get('/welcome', [\App\Http\Controllers\PersonaController::class, 'index'])->name('persona.index');
Route::get('/create', [\App\Http\Controllers\PersonaController::class, 'create'])->name('persona.create');
Route::post('/store', [\App\Http\Controllers\PersonaController::class, 'store'])->name('persona.store');
Route::get('/edit/{id}', [\App\Http\Controllers\PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/update/{id}', [\App\Http\Controllers\PersonaController::class, 'update'])->name('persona.update');
Route::get('/show/{id}', [\App\Http\Controllers\PersonaController::class, 'show'])->name('persona.show');
Route::delete('destroy/{id}', [\App\Http\Controllers\PersonaController::class, 'destroy'])->name('persona.destroy');

/*Transporte*/

Route::get('/listaT', [\App\Http\Controllers\TransporteController::class, 'index'])->name('transporte.index');
Route::get('/createT', [\App\Http\Controllers\TransporteController::class, 'create'])->name('transporte.create');
Route::post('/storeT', [\App\Http\Controllers\TransporteController::class, 'store'])->name('transporte.store');
Route::get('/editT/{id}', [\App\Http\Controllers\TransporteController::class, 'edit'])->name('transporte.edit');
Route::put('/updateT/{id}', [\App\Http\Controllers\TransporteController::class, 'update'])->name('transporte.update');
Route::get('/showT/{id}', [\App\Http\Controllers\TransporteController::class, 'show'])->name('transporte.show');
Route::delete('destroyT/{id}', [\App\Http\Controllers\TransporteController::class, 'destroy'])->name('transporte.destroy');




/*Camion*/

Route::get('/listaC', [\App\Http\Controllers\CamionController::class, 'index'])->name('camion.index');
Route::get('/createC', [\App\Http\Controllers\CamionController::class, 'create'])->name('camion.create');
Route::post('/storeC', [\App\Http\Controllers\CamionController::class, 'store'])->name('camion.store');
Route::get('/editC/{id}', [\App\Http\Controllers\CamionController::class, 'edit'])->name('camion.edit');
Route::put('/updateC/{id}', [\App\Http\Controllers\CamionController::class, 'update'])->name('camion.update');
Route::get('/showC/{id}', [\App\Http\Controllers\CamionController::class, 'show'])->name('camion.show');
Route::delete('destroyC/{id}', [\App\Http\Controllers\CamionController::class, 'destroy'])->name('camion.destroy');


/*Predios*/
Route::get('/listaP', [\App\Http\Controllers\ControllerPredio::class, 'index'])->name('predio.index');
Route::get('/createP', [\App\Http\Controllers\ControllerPredio::class, 'create'])->name('predio.create');

Route::get('/editP/{id}', [\App\Http\Controllers\ControllerPredio::class, 'edit'])->name('predio.edit');

Route::get('/showP/{id}', [\App\Http\Controllers\ControllerPredio::class, 'show'])->name('predio.show');


/*Mercancias*/


/*Tipo Mercancias*/
