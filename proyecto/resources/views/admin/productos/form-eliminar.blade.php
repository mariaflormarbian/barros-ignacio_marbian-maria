<?php
/** @var \App\Models\Producto $producto */
?>

@extends('layouts.admin-main')

@section('title', 'Eliminar Producto')

@section('h1', 'Eliminar Producto')

@section('main')

    <section class="main-dashboard">

        <div class="row">

            <div class="shadow-lg bg-body rounded p-3 mb-5 mt-4 m-auto" id="form-login">


                <h2 class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">

                Confirmar eliminación de {{ $producto->nombre }}

                </h2>

                <dl class= "d-flex  flex-column align-items-center">
                    <dt>Producto</dt>
                    <dd>{{ $producto->nombre }}</dd>
                    <dt>Categoría</dt>
                    <dd>ACA VA LA CATEGORIA</dd>
                    <dt>Precio</dt>
                    <dd>$ {{ $producto->precio }}</dd>
                    <dt>Imagen</dt>
                    <dd><img src="{{ url('imgs/proyecto/' . $producto->imagen) }}" alt="{{ $producto->imagen_descripcion }}" class="img-table"></dd>
                </dl>

                <form action="{{ route('admin.productos.eliminar.ejecutar', ['id' => $producto->producto_id]) }}" method="post" class=" d-flex">

                    @csrf

                    <input type="hidden" name="id" value="">
                    <button type="submit" class="btn col-md-3 m-auto mt-3">Eliminar</button>
                </form>

            </div>

        </div>

    </section>

@endsection
