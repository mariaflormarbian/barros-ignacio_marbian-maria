<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Producto[] $productos*/


?>

@extends('layouts.admin-main')

@section('title', 'Administrar Productos')

@section('h1', 'Administrar Producto')

@section('main')

    <section>

        <div class="main-dashboard">

            @if (Session::has('statusMessage'))

                <p>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/></svg>
                    </span>
                    {!! Session::get('statusMessage') !!}
                </p>

            @endif

            <div class="cards">

                <div class="card-single">

                    <div>
                        <p class="h3">{{ count($productos) }}</p>
                        <span>Productos</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
                    </div>

                </div>

                <div class="card-single">
                    <div>
                        <p class="h3">{{ count($categorias) }}</p>
                        <span>Categorías</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>

                </div>

                <div class="card-single">

                    <div>
                        <p class="h3">{{ $ocultos }}</p>
                        <span>Ocultos</span>
                    </div>
                    <div>
                        <span class="las la-eye-slash"></span>
                    </div>

                </div>

            </div>

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-header">
                            <h2>Productos</h2>
                            <a href="{{ route('admin.productos.nuevo.form') }}">Agregar Producto</a>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">
                                                ID
                                            </th>
                                            <th scope="col">
                                                Producto
                                            </th>
                                            <th scope="col">
                                                Categoría
                                            </th>
                                            <th scope="col">
                                                Precio
                                            </th>
                                            <th scope="col">
                                                Talles
                                            </th>
                                            <th scope="col">
                                                Imagen
                                            </th>
                                            <th scope="col">
                                                Destacado
                                            </th>
                                            <th scope="col">
                                                Público
                                            </th>
                                            <th scope="col">
                                                Acciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($productos as $producto)

                                            <tr class="text-center">
                                                <td>{{ $producto->producto_id }}</td>
                                                <td>{{ $producto->nombre }}</td>
                                                <td>{{ $producto->categoria->nombre }}</td>
                                                <td>$ {{ $producto->precio }}</td>
                                                <td>
                                                    @forelse ($producto->talles as $talle)
                                                        {{ $talle->nombre }}
                                                    @empty
                                                        No especificado
                                                    @endforelse
                                                </td>

                                                @if ($producto->imagen != null && Storage::disk('public')->has('imgs/' . $producto->imagen))

                                                    <td>
                                                        <img src="{{ Storage::disk('public')->url('imgs/' . $producto->imagen) }}" class="d-block mx-auto img-table" alt=" {{producto->imagen_descripcion }} ">
                                                    </td>

                                                @endif

                                                <td>{{ $producto->destacado ? 'si' : 'no' }}</td>
                                                <td>{{ $producto->publico ? 'si' : 'no' }}</td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <form action="{{ route('admin.productos.editar.form', ['id' => $producto->producto_id]) }}" class="pb-3 pt-3" method="get">
                                                        <button type="submit" class="btn me-3 btn-success">Editar</button>
                                                    </form>
                                                    <form action="{{ route('admin.productos.eliminar.confirmar', ['id' => $producto->producto_id]) }}" class="pb-3 pt-3" method="get">
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
