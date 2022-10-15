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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

    // NOTA: Cambiar el controlador a "HomeController" ya que el controllador "ProductosController" ira solamente las funciones relacionadas con el admin de productos
Route::get('/productos', [\App\Http\Controllers\ProductosController::class, 'index'])
    ->name('productos');

Route::get('producto-detalle/{id}',[\App\Http\Controllers\HomeController::class, 'detalle'])
    ->name('producto.detalle')
    ->whereNumber('id');

Route::get('carrito',[\App\Http\Controllers\HomeController::class, 'carrito'])
    ->name('carrito');

Route::get('contacto',[\App\Http\Controllers\HomeController::class, 'contacto'])
    ->name('contacto');
