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



// AUTENTICACIÓN

Route::get('iniciar-sesion',[\App\Http\Controllers\AuthController::class, 'loginForm'])
    ->name('auth.login.form');
Route::post('iniciar-sesion',[\App\Http\Controllers\AuthController::class, 'loginEjecutar'])
    ->name('auth.login.ejecutar');
Route::post('cerrar-sesion',[\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth');


Route::middleware('auth')
    ->controller(\App\Http\Controllers\AdminProductosController::class)
    ->group(function (){


// ADMIN

    Route::get('admin/productos','index')
        ->name('admin.productos.index');

// GRABAR
    Route::get('admin/productos/nuevo', 'nuevoForm')
        ->name('admin.productos.nuevo.form');


    Route::post('admin/productos/nuevo', 'nuevoEjecutar')
        ->name('admin.productos.nuevo.ejecutar');


// EDITAR
    Route::get('admin/productos/{id}/editar', 'editarForm')
        ->name('admin.productos.editar.form')
        ->whereNumber('id');

    Route::post('admin/productos/{id}/editar', 'editarEjecutar')
        ->name('admin.productos.editar.ejecutar')
        ->whereNumber('id');

// ELIMINAR
    Route::get('admin/productos/{id}/eliminar', 'eliminarConfirmar')
        ->name('admin.productos.eliminar.confirmar')
        ->whereNumber('id');

    Route::post('admin/productos/{id}/eliminar','eliminarEjecutar')
        ->name('admin.productos.eliminar.ejecutar')
        ->whereNumber('id');




}


);

