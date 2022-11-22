<?php
/** @var \App\Models\Producto $producto */
?>

@extends('layouts.admin-main')

@section('title', 'Confirmar eliminar ' . $producto->nombre)

@section('h1', 'Eliminar Producto')

@section('main')

    <section class="main-dashboard">

        <div class="row">

            <div class="shadow-lg bg-body rounded p-3 mb-5 mt-4 m-auto" id="form-login">


                <h2 class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">

                Confirmar eliminación de {{ $producto->nombre }}

                </h2>

                <dl class= "d-flex  flex-column align-items-center mw-100">
                    <dt>Producto</dt>
                    <dd>{{ $producto->nombre }}</dd>
                    <dt>Categoría</dt>
                    <dd>{{ $producto->categoria->nombre }}</dd>
                    <dt>Precio</dt>
                    <dd>$ {{ $producto->precio }}</dd>
                    <dt class="w-50">Descripción</dt>
                    <dd>{{ $producto->descripcion }}</dd>
                    <dt>Imagen</dt>
                    <dd>
                        @if ($producto->imagen !=null && Storage::disk('public')->has('imgs/' . $producto->imagen))
                            <img src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}" class="d-block mx-auto img-fluid" alt="{{$producto->imagen_descripcion}} ">
                        @else
                            No contiene ninguna imagen para eliminar
                        @endif
                </dl>

                <form action="{{ route('admin.productos.eliminar.ejecutar', ['id' => $producto->producto_id]) }}" method="post" class=" d-flex">

                    @csrf
                    <p>Estás por eliminar el siguiente producto. ¿Estás seguro/a de querer continuar?</p>
                    <input type="hidden" name="id" value="">
                    <button type="submit" class="boton col-md-3 m-auto mt-3">Eliminar</button>
                </form>

            </div>

        </div>

    </section>

@endsection
