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

    Route::get('contacto', 'contacto')
        ->name('contacto');

    Route::get('blog', 'blog')
        ->name('blog');
        
        Route::get('blog_detalle', 'blog_detalle')
        ->name('blog_detalle');

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


// ADMIN PRODUCTOS

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
Route::middleware('auth')
    ->controller(\App\Http\Controllers\AdminBlogsController::class)
    ->group(function (){

        // Admin BLOGS

        Route::get('admin/blogs','index')
        ->name('admin.blogs.index');

    
// GRABAR
Route::get('admin/blogs/nuevo', 'nuevoForm')
->name('admin.blogs.nuevo.form');


Route::post('admin/blogs/nuevo', 'nuevoEjecutar')
->name('admin.blogs.nuevo.ejecutar');


        
// EDITAR
    Route::get('admin/blogs/{id}/editar', 'editarForm')
    ->name('admin.blogs.editar.form')
    ->whereNumber('id');

Route::post('admin/blogs/{id}/editar', 'editarEjecutar')
    ->name('admin.blogs.editar.ejecutar')
    ->whereNumber('id');

    
// ELIMINAR
Route::get('admin/blogs/{id}/eliminar', 'eliminarConfirmar')
->name('admin.blogs.eliminar.confirmar')
->whereNumber('id');

Route::post('admin/blogs/{id}/eliminar','eliminarEjecutar')
->name('admin.blogs.eliminar.ejecutar')
->whereNumber('id');



    }


    

);