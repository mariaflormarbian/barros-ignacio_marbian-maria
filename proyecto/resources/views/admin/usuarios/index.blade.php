<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Usuario[] $usuarios*/


?>

@extends('layouts.admin-main')

@section('title', 'Detalles Usuarios')

@section('h1', 'Detalle Usuario')

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

            <!-- contadores -->

            <div class="cards">

                <div class="card-single">

                    <div>
                        <p class="h3">{{ count($usuarios) }}</p>
                        <span>Usuarios</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
                    </div>

                </div>

                <div class="card-single">
                    <div>
                        <p class="h3"></p>
                        <span>Ventas</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>

                </div>

               

            </div>


            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-header">

                            <h2>
                                Usuarios
                            </h2>


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
                                                Usuario
                                            </th>                                  
                                            <th scope="col">
                                                E-Mail
                                            </th>
                                            <th scope="col">
                                                Rol
                                            </th>
                                            <th scope="col">
                                                Productos
                                            </th>                                           
                                            <th scope="col">
                                                Acciones
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        @foreach ($usuarios as $usuario)

                                            <tr class="text-center">
                                                <td>{{ $usuario-> usuario_id }}</td>
                                                <td>{{ $usuario-> nombre }}</td>
                                                <td>{{ $usuario-> email }}</td>
                                                @if($usuario-> roles == 1)
                                                    <td>Administrador</td>
                                                    <td>No puede comprar productos</td>
                                                    <td>No hay acciones que mostrar</td>


                                                @else 
                                                    <td>Usuario común</td>
                                                    <td>{{ count($usuario-> productos) }}</td>
                                                    <td class="d-flex justify-content-center align-items-center">

                                                    <form action="{{ route('usuario.detalle', ['id' => $usuario->usuario_id]) }}" class="pb-3 pt-3" method="get">

                                                        <button type="submit" class="btn me-3 btn-success">Ver</button>

                                                    </form>

                                                </td>

                                                @endif

                                        
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
