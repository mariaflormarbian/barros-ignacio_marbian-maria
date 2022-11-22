<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Producto[] $productos*/
?>

@extends('layouts.main')

@section('title', 'Pagina Principal')

@section('home', 'active')

@section('main')

<section id="home">

    <div class="container">
        <h1><span>Diseños a medida,</span> cómodos y suaves</h1>
        <p>Aprovechá nuestros descuentos en efectivo</p>
        <a class="nav-link text-uppercase boton" href="{{ route('productos') }}">Comprá ahora</a>
    </div>
</section>

<section id="featured" class="my-5 pb-5">

    <div class="container text-center mt-5 py-5">
        <h2>Destacados</h2>
        <hr class="mx-auto">
        <p>Aquí puede ver nuestros productos más vendidos</p>
    </div>

    <div class="row mx-auto container-fluid">

        @foreach($productos as $producto)

        @if($producto->destacado === 1)
        
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}"alt="{{ $producto->imagen_descripcion  }}">
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

        @endif
        @endforeach
    </div>

</section>

<section id="banner" class="my-5 py-5">

    <div class="container">
        <h2>Aprovechá<br> descuentos hasta 20% OFF</h2>
        <a class="nav-link text-uppercase boton" href="{{ route('productos') }}">Comprá</a> 
    </div>

</section>

<section id="clothes" class="my-5">

    <div class="container text-center mt-5 py-5">
        <h2>Jeans & Polleras</h2>
        <hr class="mx-auto">
        <p>Aquí podés ver nuestros nuevos productos a un precio justo en ieta.</p>
    </div>

    <div class="row mx-auto container-fluid">

        @foreach($productos as $producto)

        @if($producto->producto_id > 4 and $producto->producto_id < 9) <div class="product text-center col-lg-3 col-md-4 col-12">

            <img class="img-fluid mb-3" src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}"alt="{{ $producto->imagen_descripcion  }}">

            <div class="star">
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
            </div>

            <h3 class="p-name">{{ $producto->nombre  }}</h3>
            <p class="p-price h4">${{ $producto->precio }}</p>
            <a href="{{ route('producto.detalle', ['id' => $producto->producto_id]) }}" class="buy-btn">Ver producto</a>
    </div>

    @endif

    @endforeach





    </div>

</section>

<section id="newsletter" class="py-3">

    <div class="container">

        <div class="d-flex flex-column align-items-center justify-content-center">

            <div class="title text-center pt-3 pb-5">
                <h2 class="position-relative d-inline-block ms-4">Subscripción al Newsletter</h2>
                <hr class="mx-auto">
            </div>

            <p class="text-center text-muted">Podés recibir todas las noticias de último momento</p>

            <div class="input-group mb-5 mt-3">
                <input type="text" class="form-control" placeholder="Tu Email ...">
                <button class="btn" type="submit">Subscribir</button>
            </div>

        </div>

    </div>

</section>

@endsection