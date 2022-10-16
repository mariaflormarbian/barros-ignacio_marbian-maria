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

    public function nuevoGrabar(Request $request){

        $data = $request->except(['_token']);
        
        $request->validate(Producto::VALIDATE_RULES, Producto::VALIDATE_MESSAGES);
        
        // Si el producto no esta marcado como destacado, entonces le agrego un false. Esto lo hago porq por defecto viene null, y el campo no acepta null.
        $data['destacado'] = $data['destacado'] ?? false;


        Producto::create($data);

        return redirect()->route('admin.productos.index');

    }

    public function eliminarForm(){

        return view('admin.productos.form-eliminar');

    }

}
