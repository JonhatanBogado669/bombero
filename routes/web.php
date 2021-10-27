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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('herramienta', App\Http\Controllers\HerramientaController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
]);
Route::resource('vehiculo', App\Http\Controllers\VehiculoController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
]);
Route::resource('insumo', App\Http\Controllers\InsumoController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
]);
Route::resource('estadoherramienta', App\Http\Controllers\EstadoHerramientaController::class)->only([
    'index']);
//Route::get('herramienta', [HerramientaController::class, 'show'])->name('herramienta.show');
//Route::post('herramienta', [HerramientaController::class, 'store'])->name('herramienta.store');*/