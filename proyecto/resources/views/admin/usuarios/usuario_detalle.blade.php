<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Usuario[] $usuarios*/


?>

@extends('layouts.admin-main')

@section('title', 'Detalles Usuarios')

@section('h1', 'Detalle Usuario')

@section('main')



<section id="featured" class="my-5 py-5">

    <div class="container mt-5 py-5">
            <h2 class="font-weight-bold h2">{{ $usuario-> nombre }}({{ $usuario-> email }})</h2>
        <hr>
       
            <div class="row mx-auto container">
                <h3 class="mb-1">Lista de productos:</h3>

                    @foreach($usuario->productos as $producto)

                    <article class="product text-center col-lg-3 col-md-4 col-12">
                        <picture>
                            <img class="img-fluid mb-3" src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}"
                                alt="{{ $producto->imagen_descripcion }}">
                        </picture>

                        <h4 class="p-name h4">{{ $producto->nombre }}</h4>
                        <p class="p-price h4">${{ $producto->precio }}</p>                
                    </article>

                    @endforeach
                        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-primary">Volver</a>
                </div>
            
    </div>


</section>


@endsection
