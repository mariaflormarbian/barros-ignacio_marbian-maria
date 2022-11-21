<?php

namespace App\Http\Controllers;
use App\Models\Novedad;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNovedadesController extends Controller
{
    public function index()
    {
       

        $novedades = Novedad::all();
        $ocultos = 0;

        foreach ($novedades as $novedad) {
            if(!$novedad->publico){
                $ocultos ++;
            }
        }

        return view('admin.novedades.index', [
            'novedades' => $novedades,
            'ocultos' => $ocultos,
        ]);

    }

    public function nuevoForm()
    {

        return view('admin.novedades.form-nuevo');
        
    }

    public function nuevoEjecutar(Request $request)
    {

        $data = $request->except(['_token']);

        $request->validate(Novedad::VALIDATE_RULES, Novedad::VALIDATE_MESSAGES);

        $data['publico'] = $data['publico'] ?? false;

        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = date('YmdHis') . "_" . \Str::slug($data['nombre']) . "." . $imagen->extension();
            $imagen->storeAs('imgs', $nombreImagen, 'public');
            $data['imagen'] = $nombreImagen;
        }else{
            $default = 'img-default.png';
            $data['imagen'] = $default;
        }


        try {
            
            DB::transaction(function() use ($data) {
                $novedad = Novedad::create($data);
            });
            
            return redirect()
            ->route('admin.novedades.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'La novedad <b>' . e($data['titulo']) . '</b> fue creada con éxito');
        
        } catch (\Throwable $th) {
            
            return redirect()
            ->route('admin.novedades.nuevo.form')
            ->with('statusType', 'danger')
            ->with('statusMessage', 'Ocurrio un error inesperado. La novedad no pudo ser creada.')
            ->withInput();

        }

    }

    public function eliminarConfirmar(int $id)
    {

        $novedad = Novedad::findOrFail($id);

        return view('admin.novedades.form-eliminar', [
            'novedad' => $novedad
        ]);

    }

    public function eliminarEjecutar(int $id)
    {

        $novedad = Novedad::findOrFail($id);

        try {
            
            DB::transaction(function() use($novedad){
       
                $novedad->delete();
            });
            
            return redirect()
            ->route('admin.novedades.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'La novedad <b>' . e($novedad->nombre) . '</b> fue eliminada con éxito.');

         } catch (\Throwable $th) {
            
            return redirect()
            ->route('admin.novedades.eliminar.confirmar', ['id' => $id])
            ->with('statusType', 'danger')
            ->with('statusMessage', 'Ocurrio un error inesperado al intentar eliminar la novedad.')
            ->withInput();

         }
    }

    public function editarForm(int $id)
    {

        $novedad = Novedad::find($id);

        return view('admin.novedades.form-editar', [
            'novedad' => $novedad
        ]);


    }

    public function editarEjecutar(Request $request, int $id)
    {

        $request->validate(Novedad::VALIDATE_RULES, Novedad::VALIDATE_MESSAGES);

        $novedad = Novedad::findOrFail($id);
        $data = $request->except(['_token']);

        $data['publico'] = $data['publico'] ?? false;

        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = date('YmdHis') . "_" . \Str::slug($data['nombre']) . "." . $imagen->extension();

            $imagen->storeAs('imgs', $nombreImagen, 'public');
            $data['imagen'] = $nombreImagen;

            $imagenVieja = $novedad->imagen;
        }

        try {

            DB::transaction(function() use ($novedad, $data) {
                $novedad->update($data);
            });

            if (isset($imagenVieja) && Storage::disk('public')->has('imgs/' . $imagenVieja)) {
                Storage::disk('public')->delete('imgs/' . $imagenVieja);
            };
    
            DB::commit();

            return redirect()
            ->route('admin.novedades.index')
            ->with('statusType', 'success')
            ->with('statusMessage', 'La novedad <b>' . e($novedad->titulo) . '</b> fue actualizada correctamente.');

        } catch (\Throwable $th) {

            return redirect()
            ->route('admin.novedades.editar.form', ['id' => $id])
            ->with('statusType', 'danger')
            ->with('statusMessage', 'Ocurrio un error inesperado. La novedad no pudo ser actualizada.')
            ->withInput();

        }
    
      
    }
}