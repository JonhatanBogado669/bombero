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
//ENRUTADO DE CONTROLLERS Y FUNCIONALIDADES
Route::get('/', function () {
    return view('welcome');
});
Route::resource('herramienta', App\Http\Controllers\HerramientaController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
]);
Route::resource('bocaagua', App\Http\Controllers\BocaAguaController::class)->only([
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
Route::resource('menu', App\Http\Controllers\MenuController::class)->only([
    'index']);
Route::resource('personal', App\Http\Controllers\PersonalController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',]);    
Route::resource('siniestro', App\Http\Controllers\SiniestroController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
]);   
//Route::get('herramienta', [HerramientaController::class, 'show'])->name('herramienta.show');
//Route::post('herramienta', [HerramientaController::class, 'store'])->name('herramienta.store');*/

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
