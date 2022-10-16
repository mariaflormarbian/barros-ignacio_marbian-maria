<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class AdminProductosController extends Controller
{

    public function index()
    {

        $productos = Producto::all();

        return view('admin.productos.index', [
            'productos' => $productos
        ]);

    }

    public function nuevoForm()
    {

        return view('admin.productos.form-nuevo');

    }

    public function nuevoEjecutar(Request $request)
    {

        $data = $request->except(['_token']);

        $request->validate(Producto::VALIDATE_RULES, Producto::VALIDATE_MESSAGES);

        // Si el producto no esta marcado como destacado, entonces le agrego un false. Esto lo hago porq por defecto viene null, y el campo no acepta null.
        $data['destacado'] = $data['destacado'] ?? false;


        Producto::create($data);

        return redirect()
        ->route('admin.productos.index')
        ->with('statusType', 'success')
        ->with('statusMessage', 'El producto <b>' . e($data['nombre']) . '</b> fue creado exitosamente');

    }

    public function eliminarConfirmar(int $id) 
    {

        $producto = Producto::findOrFail($id);

        return view('admin.productos.form-eliminar', [
            'producto' => $producto
        ]);

    }

    public function eliminarEjecutar(int $id) 
    {

        $producto = Producto::findOrFail($id);

        $producto->delete();

        return redirect()
        ->route('admin.productos.index')
        ->with('statusType', 'success')
        ->with('statusMessage', 'El producto <b>' . e($producto->nombre) . '</b> fue eliminado correctamente');

    }

    public function editarForm(int $id)
    {

        $producto = Producto::find($id);

        return view('admin.productos.form-editar', [
            'producto' => $producto
        ]);


    }

    public function editarEjecutar() 
    {

        // Clase 13/09, minuto 12:05 el profe empieza a configurar este metodo

    }

}
