<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Novedad;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('index', [
            'productos' => $productos
        ]);
    }

    public function detalle(int $id)
    {

        $producto = Producto::findOrFail($id);
        $productos = Producto::with('categoria')->get();

        return view('home.detalle', [
            'producto' => $producto,
            'productos' => $productos
        ]);

    }



    public function contacto()
    {

        return view('home.contacto');

    }


    public function novedades()
    {

        $novedades = Novedad::all();
        
        return view('home.novedades', [
        'novedades' => $novedades
        ]);
    }

   public function novedadDetalle(int $id)
    {
        $novedad = Novedad::findOrFail($id);

        $novedades = Novedad::all();
        return view('home.novedad_detalle', [
       
            'novedad' => $novedad,
            ]);
    }

    
    public function productos()
    {
        $productos = Producto::all();
        return view('home.productos',[
            'productos'=>$productos,
        ]);

    }
}