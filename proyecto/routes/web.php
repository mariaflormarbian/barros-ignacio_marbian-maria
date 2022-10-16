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

// HOME

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
->name('home');

    // NOTA: Cambiar el controlador a "HomeController" ya que el controllador "ProductosController" ira solamente las funciones relacionadas con el admin de productos
Route::get('/productos', [\App\Http\Controllers\HomeController::class, 'productos'])
->name('productos');

Route::get('producto-detalle/{id}',[\App\Http\Controllers\HomeController::class, 'detalle'])
->name('producto.detalle')
->whereNumber('id');

Route::get('carrito',[\App\Http\Controllers\HomeController::class, 'carrito'])
->name('carrito');

Route::get('contacto',[\App\Http\Controllers\HomeController::class, 'contacto'])
->name('contacto');

// ADMIN

Route::get('admin/productos',[\App\Http\Controllers\AdminProductosController::class, 'index'])
->name('admin.productos.index');

Route::get('admin/productos/nuevo-producto',[\App\Http\Controllers\AdminProductosController::class, 'nuevoForm'])
->name('admin.productos.nuevo.form');

Route::get('admin/productos/eliminar-producto',[\App\Http\Controllers\AdminProductosController::class, 'eliminarForm'])
->name('admin.productos.eliminar.form');


