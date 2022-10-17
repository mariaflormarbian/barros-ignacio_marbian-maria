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

Route::get('sobre-nosotros',[\App\Http\Controllers\HomeController::class, 'sobre_nosotros'])
    ->name('sobre.nosotros');


// ADMIN

Route::get('admin/productos',[\App\Http\Controllers\AdminProductosController::class, 'index'])
->name('admin.productos.index');

// GRABAR
Route::get('admin/productos/nuevo',[\App\Http\Controllers\AdminProductosController::class, 'nuevoForm'])
->name('admin.productos.nuevo.form');

Route::post('admin/productos/nuevo',[\App\Http\Controllers\AdminProductosController::class, 'nuevoEjecutar'])
->name('admin.productos.nuevo.ejecutar');

// EDITAR
Route::get('admin/productos/{id}/editar',[\App\Http\Controllers\AdminProductosController::class, 'editarForm'])
->name('admin.productos.editar.form')
->whereNumber('id');

Route::post('admin/productos/{id}/editar',[\App\Http\Controllers\AdminProductosController::class, 'editarEjecutar'])
->name('admin.productos.editar.ejecutar')
->whereNumber('id');

// ELIMINAR
Route::get('admin/productos/{id}/eliminar',[\App\Http\Controllers\AdminProductosController::class, 'eliminarConfirmar'])
->name('admin.productos.eliminar.confirmar')
->whereNumber('id');

Route::post('admin/productos/{id}/eliminar',[\App\Http\Controllers\AdminProductosController::class, 'eliminarEjecutar'])
->name('admin.productos.eliminar.ejecutar')
->whereNumber('id');




