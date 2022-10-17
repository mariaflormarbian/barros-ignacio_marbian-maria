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

        return view('home.detalle', [
            'producto' => $producto
        ]);

    }

    public function carrito()
    {

        return view('home.carrito');

    }

    public function contacto()
    {

        return view('home.contacto');

    }


    public function sobre_nosotros()
    {
        return view('home.sobre-nosotros');
    }

    public function productos()
    {
        $productos = Producto::all();
        return view('home.productos',[
            'productos'=>$productos,
        ]);

    }
}
