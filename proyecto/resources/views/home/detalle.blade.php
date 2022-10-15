<?php
    /** @var \App\Models\Producto $producto */
?>

@extends('layouts.main')

@section('title', 'Detalle Producto')

@section('main')

<section class="container sproduct my-5 pt-5">

    <div class="row mt-5">

        <div class="col-lg-5 col-md-12 col-12">

            <img class="img-fluid w-100 pb-1" src="{{ url('imgs/proyecto/' . $producto->imagen) }}" id="MainImg" alt="">

            <div class="small-img-group">

                {{-- NOTA: conseguir mas imagenes y ponerlas en un tamaño correcto --}}
                <div class="small-img-col">
                    <img src="{{ url('imgs/proyecto/' . $producto->imagen) }}" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="{{ url('imgs/shop/24.jpg') }}" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="{{ url('imgs/proyecto/' . $producto->imagen) }}" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="{{ url('imgs/proyecto/' . $producto->imagen) }}" width="100%" class="small-img" alt="">
                </div>

            </div>

        </div>

        <div class="col-lg-5 col-md-12 col-12">

            <h2>{{ $producto->nombre }}</h2>
            <h3 class="py-4">PONER LA CATEGORIA</h3>
            <p>${{ $producto->precio }}</p>

            <select class="my-3">
                <option>Seleccionar Tamaño</option>
                <option>S</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>

            <input type="number" value="1">

            <button class="buy-btn">Agregar al carrito</button>

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

    {{-- NOTA: Aca tiene que llegar un array con los productos correspondientes a su categoria --}}

    <div class="row mx-auto container-fluid">

        <div class="product text-center col-lg-3 col-md-4 col-12">
            
            <img class="img-fluid mb-3" src="../img/featured/1.jpg" alt="">

            <div class="star">

                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>

            </div>

            <h5 class="p-name">Sport Boots</h5>
            <h4 class="p-price">$92.00</h4>
            <button class="buy-btn">Buy Now</button>

        </div>

        <div class="product text-center col-lg-3 col-md-4 col-12">

            <img class="img-fluid mb-3" src="../img/featured/2.jpg" alt="">

            <div class="star">

                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>

            </div>

            <h5 class="p-name">Sport Boots</h5>
            <h4 class="p-price">$92.00</h4>
            <button class="buy-btn">Buy Now</button>

        </div>

        <div class="product text-center col-lg-3 col-md-4 col-12">

            <img class="img-fluid mb-3" src="../img/featured/3.jpg" alt="">

            <div class="star">

                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>

            </div>

            <h5 class="p-name">Sport Boots</h5>
            <h4 class="p-price">$92.00</h4>
            <button class="buy-btn">Buy Now</button>

        </div>

        <div class="product text-center col-lg-3 col-md-4 col-12">

            <img class="img-fluid mb-3" src="../img/featured/4.jpg" alt="">

            <div class="star">

                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>

            </div>

            <h5 class="p-name">Sport Boots</h5>
            <h4 class="p-price">$92.00</h4>
            <button class="buy-btn">Buy Now</button>

        </div>

    </div>

</section>

@endsection

@section('script')

    <script src="{{ url('js/main.js') }}"></script>

@endsection
