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


Route::controller(\App\Http\Controllers\HomeController::class)->group(function ()
{

// HOME

    Route::get('/', 'index')
        ->name('home');

    Route::get('/productos',  'productos')
        ->name('productos');

    Route::get('producto-detalle/{id}', 'detalle')
        ->name('producto.detalle')
        ->whereNumber('id');

    Route::get('carrito', 'carrito')
        ->name('carrito');

    Route::get('contacto', 'contacto')
        ->name('contacto');

    Route::get('sobre-nosotros', 'sobre_nosotros')
        ->name('sobre.nosotros');

}
);



Route::controller(\App\Http\Controllers\AuthController::class)->group(function ()
{
    // AUTENTICACIÓN

    Route::get('iniciar-sesion', 'loginForm')
        ->name('auth.login.form');
    Route::post('iniciar-sesion', 'loginEjecutar')
        ->name('auth.login.ejecutar');
    Route::post('cerrar-sesion', 'logout')
        ->name('auth.logout')
        ->middleware('auth');
}
);

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

