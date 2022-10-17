<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class AdminProductosController extends Controller
{

    public function index()
    {

        $productos = Producto::with(['categoria'])->get();


        return view('admin.productos.index', [
            'productos' => $productos
        ]);

    }

    public function nuevoForm()
    {

        return view('admin.productos.form-nuevo', [
        'categorias'=>Categoria::orderBy('nombre')->get(),
        ]);
    }

    public function nuevoEjecutar(Request $request)
    {

        $data = $request->except(['_token']);

        $request->validate(Producto::VALIDATE_RULES, Producto::VALIDATE_MESSAGES);

        // Si el producto no esta marcado como destacado, entonces le agrego un false. Esto lo hago porq por defecto viene null, y el campo no acepta null.
        $data['destacado'] = $data['destacado'] ?? false;

        // Upload de imagen
        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = date('YmdHis') . "_" . \Str::slug($data['nombre']) . "." . $imagen->extension();
            $imagen->storeAs('imgs', $nombreImagen, 'public');
            $data['imagen'] = $nombreImagen;
        }


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

    public function editarEjecutar(Request $request, int $id)
    {
        $request->validate(Producto::VALIDATE_RULES, Producto::VALIDATE_MESSAGES);

        $producto = Producto::findOrFail($id);
        $data = $request->except(['_token']);



        // Upload de imagen
        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = date('YmdHis') . "_" . \Str::slug($data['nombre']) . "." . $imagen->extension();

            $imagen->storeAs('imgs', $nombreImagen, 'public');
            $data['imagen'] = $nombreImagen;

            $imagenVieja = $producto->imagen;
        }
        $producto->update($data);
        if (isset($imagenVieja) && \Storage::disk('public')->has('imgs/' . $imagenVieja)){
          \Storage::disk('public')->delete('imgs/' . $imagenVieja);
        }

        return redirect()
            ->route('admin.productos.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'El producto <b>' . e($producto->nombre) . '</b> fue actulizado correctamente');    }

}
