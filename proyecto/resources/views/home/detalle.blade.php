<?php
    /** @var \App\Models\Producto $producto */

?>

@extends('layouts.main')

@section('title', 'Detalle Producto')

@section('main')

    <section class="container sproduct my-5 pt-5">

        <div class="row mt-5">

            <div class="col-lg-5 col-md-12 col-12">

                <img class="img-fluid w-100 pb-1" src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}" id="MainImg" alt="{{url($producto->imagen)}}">

                <div class="small-img-group">


                    <div class="small-img-col">
                        <img src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}" class="small-img img-fluid" alt="{{url($producto->imagen)}}">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ Storage::disk('public')->url('imgs/talles.jpg') }}" class="img-fluid small-img" alt="Foto de la tabla de talles de un jean o pollera">
                    </div>

                    <div class="small-img-col">
                        <img src="{{ Storage::disk('public')->url('imgs/mediciones.png') }}" class="img-fluid small-img" alt="Foto de las instrucciones para medir un jean o pollera">
                    </div>


                </div>

            </div>

            <div class="col-lg-5 col-md-12 col-12">

                <h2>{{ $producto->nombre }}</h2>
                <h3 class="py-4">{{ $producto->categoria->nombre }}</h3>
                <p>${{ $producto->precio }}</p>

                <select class="my-3">

                    @forelse ($producto->talles as $talle)
                        <option value="{{ $talle->talle_id }}">{{ $talle->nombre }}</option>
                    @empty
                        <option value="">Sin talle disponible</option>
                    @endforelse

                </select>

                <input type="number" value="1">

                <button class="buy-btn not-active">Agregar al carrito</button>

                <h3 class="mt-5 mb-5">Descripción</h3>

                <p>{{ $producto->descripcion }}</p>

            </div>

        </div>

    </section>

    <section id="featured" class="my-5 pb-5">

        <div class="container text-center mt-5 py-5">

            <h3>Productos Relacionados</h3>
            <hr class="mx-auto">

        </div>


        <div class="row mx-auto container-fluid">

            @foreach ($productos as $prod)

                @if ($prod->getCategoriaId() === $producto->getCategoriaId())

                    <div  class="product text-center col-lg-3 col-md-4 col-12">
                        <picture>
                            <img class="img-fluid mb-3" src="{{ Storage::disk('public')->url('imgs/' . $prod->imagen) }}" alt="{{ $prod->imagen_descripcion }}">
                        </picture>

                        <div class="star">

                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>

                        </div>

                        <h3 class="p-name">{{ $prod->nombre }}</h3>
                        <p class="p-price h4">${{ $prod->precio }}</p>
                        <a href="{{ route('producto.detalle', ['id' => $prod->producto_id]) }}" class="buy-btn">Ver producto</a>

                    </div>

                @endif

            @endforeach

        </div>

    </section>

@endsection

@section('script')

    <script src="{{ url('js/main.js') }}"></script>

@endsection
