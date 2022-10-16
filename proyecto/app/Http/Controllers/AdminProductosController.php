<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class AdminProductosController extends Controller
{
    
    public function index(){

        $productos = Producto::all();

        return view('admin.productos.index', [
            'productos' => $productos
        ]);

    }
    
    public function nuevoForm(){

        return view('admin.productos.form-nuevo');

    }
    
    public function eliminarForm(){

        return view('admin.productos.form-eliminar');

    }
    
}
