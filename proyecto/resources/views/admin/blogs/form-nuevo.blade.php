<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */

?>

@extends('layouts.admin-main')

@section('title', 'Agregar Novedad')

@section('h1', 'Registrar una Nueva Novedad')

@section('main')

    <section>

        <div class="main-dashboard">

            <div class="row">

                <div class="col">

                    <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded m-auto" id="form-login">

                        <div class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">

                            <h2 class="h5">Completá los datos del formulario.</h2>
                          

                        </div>

                        <form action="{{ route('admin.productos.nuevo.ejecutar') }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                            @csrf

                            @if ($errors->any())
                                <p class="mb-3 text-danger fs-6">Hay errores de validación en el formulario. Por favor, revisá los datos e intentá de nuevo.</p>
                            @endif

                            @include('admin.blogs._form-data')

                            <button type="submit" class="col-5 m-auto mt-3 mb-3 boton">Agregar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>


    </section>

@endsection



