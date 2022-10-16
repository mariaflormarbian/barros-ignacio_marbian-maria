<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Producto[] $productos*/
?>

@extends('layouts.admin-main')

@section('title', 'Administrar Productos')

@section('h1', 'Administrar Producto')

@section('main')

    <section>

        <div class="main-dashboard">

            <!-- contadores -->

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
                        <p class="h3">0</p>
                        <span>Categorias</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>

                </div>

            </div>

            <!-- vinilos -->

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-header">

                            <h2>
                                Vinilos
                            </h2>

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
                                                Imagen
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
                                                <td>Aca va Categoría</td>
                                                <td>$ {{ $producto->precio }}</td>
                                                <td>
                                                    <img src="{{ url('imgs/proyecto/' . $producto->imagen) }}" alt="{{ $producto->imagen_descripcion }}" class="img-table">
                                                </td>

                                                <td class="d-flex justify-content-center align-items-center">

                                                    <form action="#" class="pb-3 pt-3" method="post">

                                                        <button type="submit" class="btn me-3 btn-success">Editar</button>

                                                    </form>

                                                    <form action="#" class="pb-3 pt-3" method="post">

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
