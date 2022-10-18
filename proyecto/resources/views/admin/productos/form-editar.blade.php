<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>



@extends('layouts.admin-main')

@section('title', 'Editar '. $producto->nombre)

@section('h1', 'Editar Producto')

@section('main')

    <section>

        <div class="main-dashboard">

            <div class="row">

                <div class="col">

                    <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded m-auto" id="form-login">

                        <div class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">

                            Modificá los datos de {{ $producto->nombre }}.

                        </div>

                        <form action="{{ route('admin.productos.editar.ejecutar', ['id' => $producto->producto_id]) }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                            @csrf

                            @if ($errors->any()) {{-- Si la variable $errors guarda algun error, entonces... --}}
                                <p class="mb-3 text-danger fs-6">Hay errores de validacion en el formulario. Por favor, revisa los datos e intenta de nuevo.</p>
                            @endif
                            @include('admin.productos._form-data')


                            <button type="submit" class=" col-5 m-auto mt-3 mb-3 boton">Editar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>


    </section>

@endsection
