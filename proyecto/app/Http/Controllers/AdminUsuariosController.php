<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class AdminUsuariosController extends Controller
{
    public function index()
    {     
        $usuarios = Usuario::all(); 
        return view('admin.usuarios.index', [
            'usuarios' => $usuarios,
        ]);
    }


    
   public function usuarioDetalle(int $id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('admin.usuarios.usuario_detalle', [
       
            'usuario' => $usuario,
            ]);
    }

}