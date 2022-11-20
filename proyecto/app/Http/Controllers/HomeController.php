<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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


    public function blog()
    {
        return view('home.blog');
    }

   public function blog_detalle()
    {
        return view('home.blog_detalle');
    }

    
    public function productos()
    {
        $productos = Producto::all();
        return view('home.productos',[
            'productos'=>$productos,
        ]);

    }
}