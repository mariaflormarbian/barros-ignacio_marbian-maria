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

Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
    // HOME

    Route::get('/', 'index')
        ->name('home');

    Route::get('/productos',  'productos')
        ->name('productos');

    Route::get('producto-detalle/{id}', 'detalle')
        ->name('producto.detalle')
        ->whereNumber('id');

    Route::get('contacto', 'contacto')
        ->name('contacto');

    Route::get('novedades', 'novedades')
        ->name('novedades');

    Route::get('novedad_detalle/{id}', 'novedadDetalle')
        ->name('novedad.detalle')
        ->whereNumber('id');
});

Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    // AUTENTICACIÓN

    Route::get('iniciar-sesion', 'loginForm')
        ->name('auth.login.form');
    Route::post('iniciar-sesion', 'loginEjecutar')
        ->name('auth.login.ejecutar');
    Route::post('cerrar-sesion', 'logout')
        ->name('auth.logout')
        ->middleware('auth');
});

Route::middleware('auth', 'auth.admin')
->controller(\App\Http\Controllers\AdminProductosController::class)
->group(function () {

    // ADMIN PRODUCTOS
    Route::get('admin/productos', 'index')
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
    Route::post('admin/productos/{id}/eliminar', 'eliminarEjecutar')
        ->name('admin.productos.eliminar.ejecutar')
        ->whereNumber('id');
});

Route::middleware('auth', 'auth.admin')
->controller(\App\Http\Controllers\AdminNovedadesController::class)
->group(function () {

    // Admin Novedades
    Route::get('admin/novedades', 'index')
        ->name('admin.novedades.index');

    // GRABAR
    Route::get('admin/novedades/nuevo', 'nuevoForm')
        ->name('admin.novedades.nuevo.form');
    Route::post('admin/novedades/nuevo', 'nuevoEjecutar')
        ->name('admin.novedades.nuevo.ejecutar');

    // EDITAR
    Route::get('admin/novedades/{id}/editar', 'editarForm')
        ->name('admin.novedades.editar.form')
        ->whereNumber('id');
    Route::post('admin/novedades/{id}/editar', 'editarEjecutar')
        ->name('admin.novedades.editar.ejecutar')
        ->whereNumber('id');

    // ELIMINAR
    Route::get('admin/novedades/{id}/eliminar', 'eliminarConfirmar')
        ->name('admin.novedades.eliminar.confirmar')
        ->whereNumber('id');
    Route::post('admin/novedades/{id}/eliminar', 'eliminarEjecutar')
        ->name('admin.novedades.eliminar.ejecutar')
        ->whereNumber('id');
});

Route::middleware('auth', 'auth.admin')
->controller(\App\Http\Controllers\AdminUsuariosController::class)
->group(function () {

    // ADMIN Usuarios
    Route::get('admin/usuarios', 'index')
        ->name('admin.usuarios.index');

    // Detalle Usuarios
    Route::get('usuario_detalle/{id}', 'usuarioDetalle')
        ->name('usuario.detalle')
        ->whereNumber('id');
});