<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Producto[] $productos*/
    ?>

@extends('layouts.main')

@section('title', 'Productos')

@section('productos', 'active')

@section('main')

<section id="featured" class="my-5 py-5">

    <div class="container mt-5 py-5">

        <h1 class="font-weight-bold h2">Productos</h1>
        <hr>
        <p>Navegá y descubrí nuestra gran variedad de jeans y polleras con diseños exclusivos</p>

    </div>

    <div class="row mx-auto container">
        @foreach($productos as $producto)

        @if ($producto->publico)

        <article class="product text-center col-lg-3 col-md-4 col-12">
            <picture>
                <img class="img-fluid mb-3" src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}"
                    alt="{{ $producto->imagen_descripcion }}">
            </picture>

            <div class="star">

                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>

            </div>

            <h2 class="p-name h4">{{ $producto->nombre }}</h2>
            <p class="p-price h4">${{ $producto->precio }}</p>
            <a href="{{ route('producto.detalle', ['id' => $producto->producto_id]) }}" class="buy-btn">Ver
                producto</a>

        </article>

        @endif

        @endforeach

    </div>

</section>

@endsection