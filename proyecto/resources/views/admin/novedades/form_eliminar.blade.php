<?php
/** @var \App\Models\Producto $producto */
?>

@extends('layouts.admin-main')

@section('title', 'Confirmar eliminar ' . $novedad->titulo)

@section('h1', 'Eliminar Novedad')

@section('main')

    <section class="main-dashboard">

        <div class="row">

            <div class="shadow-lg bg-body rounded p-3 mb-5 mt-4 m-auto" id="form-login">
                <h2 class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">Confirmar eliminación de {{ $novedad->titulo}}
                </h2>
                <dl class= "d-flex  flex-column align-items-center mw-100 ">
                    <dt>Novedad</dt>
                    <dd>{{ $novedad->titulo }}</dd>
                    <dt>Texto</dt>
                    <dd>{{ $novedad->texto }}</dd>
                    <dt>Sinópsis</dt>
                    <dd> {{ $novedad->sinopsis }}</dd>        
                    <dt>Imagen</dt>
                    <dd>
                        @if ($novedad->imagen !=null && Storage::disk('public')->has('imgs/' . $novedad->imagen))
                            <img src="{{ Storage::disk('public')->url('imgs/' . $novedad->imagen) }}" class="d-block mx-auto img-fluid" alt="{{$novedad->imagen_descripcion}} ">
                        @else
                            No contiene ninguna imagen para eliminar
                        @endif
                </dl>
                <form action="{{ route('admin.novedades.eliminar.ejecutar', ['id' => $novedad->novedad_id]) }}" method="post" class=" d-flex flex-column">

                    @csrf
                    <p class="text-center">Estás por eliminar la siguiente novedad. ¿Estás seguro/a de querer continuar?</p>
                    <input type="hidden" name="id" value="">
                    <button type="submit" class="boton col-md-3 m-auto mt-3">Eliminar</button>
                </form>
            </div>

        </div>

    </section>

@endsection
