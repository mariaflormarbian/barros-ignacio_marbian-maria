<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Talle;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductosController extends Controller
{

    public function index()
    {

        $productos = Producto::with(['categoria', 'talles'])->get();
        $categorias = Categoria::all(); 

        return view('admin.productos.index', [
            'productos' => $productos,
            'categorias' => $categorias,
        ]);

    }

    public function nuevoForm()
    {

        return view('admin.productos.form-nuevo', [
        'categorias' => Categoria::orderBy('nombre')->get(),
        'talles' => Talle::orderBy('talle_id')->get(),
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


        try {
            
            DB::transaction(function() use ($data) {
                $producto = Producto::create($data);
                $producto->talles()->attach($data['talles'] ?? []);
            });
            
            return redirect()
            ->route('admin.productos.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'El producto <b>' . e($data['nombre']) . '</b> fue creado exitosamente');
        
        } catch (\Throwable $th) {
            
            return redirect()
            ->route('admin.productos.nuevo.form')
            ->with('statusType', 'danger')
            ->with('statusMessage', 'Ocurrio un error inesperado. El producto no pudo ser creado.')
            ->withInput();

        }

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

        try {
            
            DB::transaction(function() use($producto){
                $producto->talles()->detach();
                $producto->delete();
            });
            
            return redirect()
            ->route('admin.productos.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'El producto <b>' . e($producto->nombre) . '</b> fue eliminado correctamente.');

         } catch (\Throwable $th) {
            
            return redirect()
            ->route('admin.productos.eliminar.confirmar', ['id' => $id])
            ->with('statusType', 'danger')
            ->with('statusMessage', 'Ocurrio un error inesperado. La producto no pudo ser eliminado.')
            ->withInput();

         }
    }

    public function editarForm(int $id)
    {

        $producto = Producto::find($id);

        return view('admin.productos.form-editar', [
            'producto' => $producto,
            'categorias' => Categoria::orderBy('nombre')->get(),
            'talles' => Talle::orderBy('talle_id')->get(),
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

        try {

            DB::transaction(function() use ($producto, $data) {
                $producto->update($data);
                $producto->talles()->sync($data['talles'] ?? []);
            });

            if (isset($imagenVieja) && Storage::disk('public')->has('imgs/' . $imagenVieja)) {
                Storage::disk('public')->delete('imgs/' . $imagenVieja);
            };
    
            DB::commit();

            return redirect()
            ->route('admin.productos.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'La producto <b>' . e($producto->nombre) . '</b> fue actualizado correctamente.');

        } catch (\Throwable $th) {

            return redirect()
            ->route('admin.productos.editar.form', ['id' => $id])
            ->with('statusType', 'danger')
            ->with('statusMessage', 'Ocurrio un error inesperado. La producto no pudo ser actualizado.')
            ->withInput();

        }
    }
}
