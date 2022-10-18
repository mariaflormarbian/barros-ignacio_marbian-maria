@extends('layouts.main')

@section('title', 'Iniciar Sesión')

@section('main')

    <h1 class="mt-3 login">Iniciar Sesión</h1>


    <form action="{{ route('auth.login.ejecutar') }}" method="post"  class="mt-3 mx-auto w-50">
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
        <div>
            <label for="password" class="form-label">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
            >

        </div>

        <button type="submit" class="btn col-md-3 m-auto mt-3">Ingresar</button>
    </form>

@endsection
