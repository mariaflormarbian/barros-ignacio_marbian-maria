@extends('layouts.main')

@section('title', 'Iniciar Sesión')

@section('main')

    <h1 class="login">Iniciar Sesión</h1>


    <form action="{{ route('auth.login.ejecutar') }}" method="post"  class="mt-3 mx-auto w-50" id="form-login">
        @csrf
     <div>
         <label for="email" class="form-label">Nombre</label>
         <input
             type="email"
             id="email"
             name="email"
             class="form-control"
         >

     </div>
        <div class="mt-3">
            <label for="password" class="form-label">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
            >

        </div>

        <button type="submit" class="btn col-md-3 mx-auto mt-3">Ingresar</button>
    </form>

@endsection
