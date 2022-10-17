<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Producto[] $productos*/
    ?>

@extends('layouts.main')

@section('title', 'Productos')

@section('productos', 'active')

@section('main')

<section id="featured" class="my-5 py-5">

    <div class="container mt-5 py-5">

        <h2 class="font-weight-bold">Productos</h2>
        <hr>
        <p>Navegá y descubrí nuestra gran variedad de jeans y polleras con diseños exclusivos</p>

    </div>

    <div class="row mx-auto container">
        @foreach($productos as $producto)

        <div  class="product text-center col-lg-3 col-md-4 col-12">
            <picture>
                <img class="img-fluid mb-3" src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}" alt="{{ $producto->imagen_descripcion }}">
            </picture>

            <div class="star">

                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>

            </div>

            <h3 class="p-name">{{ $producto->nombre }}</h3>
            <p class="p-price h4">${{ $producto->precio }}</p>
            <a href="{{ route('producto.detalle', ['id' => $producto->producto_id]) }}" class="buy-btn">Ver producto</a>

        </div>
      @endforeach

    </div>

</section>

@endsection
