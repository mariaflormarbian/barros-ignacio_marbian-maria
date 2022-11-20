<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Novedad[] $novedades*/


?>

@extends('layouts.admin-main')

@section('title', 'Administrar Blogs')

@section('h1', 'Administrar Blog')

@section('main')

    <section>

        <div class="main-dashboard">


            <!-- contadores -->

            <div class="cards">

                <div class="card-single">

                    <div>
                        <p class="h3">{{ count($novedades) }}</p>
                        <span>Novedades</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
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

                            <h2>
                                Novedades
                            </h2>

                            <a href="{{ route('admin.blogs.nuevo.form') }}">Agregar Novedad</a>

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
                                                Título	
                                            </th>
                                            <th scope="col">
                                                Texto
                                            </th>
                                            <th scope="col">
                                                Sinópsis
                                            </th>
                                            
                                            <th scope="col">
                                                Imagen
                                            </th>
                                            <th scope="col">
                                                Autor
                                            </th>
                                             <th scope="col">
                                                Fecha
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

                                        @foreach ($novedades as $novedad)

                                            <tr class="text-center">
                                                <td>{{ $novedad->novedad_id }}</td>
                                                <td>{{ $novedad->titulo }}</td>
                                                <td>{{ $novedad->texto }}</td>
                                                <td> {{ $novedad->sinopsis }}</td>

                                    

                                                @if ($novedad->imagen != null && Storage::disk('public')->has('imgs/' . $novedad->imagen))

                                                    <td>

                                                        <img src="{{ Storage::disk('public')->url('imgs/' . $novedad->imagen) }}" class="d-block mx-auto img-table" alt=" {{ $novedad->imagen_descripcion }} ">

                                                    </td>

                                                @endif

                                                <td>{{ $novedad->usuario_id }}</td>
                                                <td>{{ $novedad->publico ? 'si' : 'no' }}</td>

                                                <td class="d-flex justify-content-center align-items-center">

                                                    <form action="{{ route('admin.blogs.editar.form', ['id' => $novedad->novedad_id]) }}" class="pb-3 pt-3" method="get">

                                                        <button type="submit" class="btn me-3 btn-success">Editar</button>

                                                    </form>

                                                    <form action="{{ route('admin.blogs.eliminar.confirmar', ['id' => $novedad->novedad_id]) }}" class="pb-3 pt-3" method="get">

                                                        <button type="submit" class="btn btn-danger">Eliminar</button>

                                                    </form>

                                                </td>
                                               <td>poner fecha</td>

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
