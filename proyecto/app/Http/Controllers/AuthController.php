<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function loginEjecutar(Request $request)
    {
        $credenciales= $request->only('email', 'password');

        if(\Auth::attempt($credenciales)){
            $request->session()->regenerate();

            return redirect()
                ->route('admin.productos.index')
                ->with('statusMessage', 'Sesión iniciada con éxito. ¡Bienvenido/a a Ieta!')
                ->with('statusType', 'succes');
        }else{
            return redirect()
                ->route('auth.login.form')
                ->with('statusMessage', 'Credenciales incorrectas. Por favor, inténtelo de nuevo.')
                ->with('statusType', 'danger');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login.form')
            ->with('statusMessage', 'Sesión cerrada de manera exitosa.')
            ->with('statusType', 'success');
    }


}