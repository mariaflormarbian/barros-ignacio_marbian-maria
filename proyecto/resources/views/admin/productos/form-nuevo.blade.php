<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.admin-main')

@section('title', 'Agregar Producto')

@section('h1', 'Registrar un Nuevo Producto')

@section('main')

    <section>

        <div class="main-dashboard">

            <div class="row">

                <div class="col">

                    <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded m-auto" id="form-login">

                        <div class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">

                            Completa los datos del formulario.

                        </div>

                        {{-- FORMULARIO ORIGINAL --}}
                        {{-- <form action="{{ route('admin.productos.nuevo.grabar') }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                            @csrf

                            <!-- Titulo -->
                            <div class="col-md-4">

                                <label for="titulo" class="form-label">Título</label>
                                <input
                                    type="text"
                                    id="titulo"
                                    name="titulo"
                                    class="form-control"
                                    maxlength="60"
                                >


                            </div>

                            <!-- Artista -->
                            <div class="col-md-4">

                                <label for="artista" class="form-label">Artista</label>
                                <input
                                    type="text"
                                    id="artista"
                                    name="artista"
                                    class="form-control"
                                    maxlength="45"
                                >


                            </div>

                            <!-- Precio -->
                            <div class="col-md-4">

                                <label for="precio" class="form-label">Precio</label>
                                <input
                                    type="number"
                                    max="99999"
                                    id="precio"
                                    name="precio"
                                    class="form-control"
                                >


                            </div>

                            <!-- Categoria -->
                            <div class="col-md-9">

                                <label for="categoria_fk" class="form-label">Categoría</label>
                                <select
                                    id="categoria_fk"
                                    name="categoria_fk"
                                    class="form-select"
                                >
                                    <option selected disabled value="">Seleccionar Categoría</option>

                                    <option value="1">Rap</option>

                                    <option value="2">Rock Internacional</option>

                                    <option value="3">Jazz</option>

                                </select>


                            </div>

                            <!-- Destacado -->
                            <div class="col-md-3 align-items-center d-flex">

                                <div class="form-check form-switch ">
                                    <label for="destacado" class="form-check-label">Destacado</label>
                                    <input
                                        type="checkbox"
                                        id="destacado"
                                        name="destacado"
                                        class="form-check-input"
                                        value="1"
                                    >

                                </div>

                            </div>

                            <!-- Imagen -->
                            <div class="col-md-6">

                                <label for="imagen" class="form-label">Imagen</label>
                                <input
                                    type="file"
                                    id="imagen"
                                    name="imagen"
                                    class="form-control"
                                >

                                <div class="invalid-feedback" id="error-titulo"><span class="visually-hidden">Error:</span>Suba una imagen</div>

                            </div>

                            <!-- Imagen Descripcion -->
                            <div class="col-md-6">

                                <label for="imagen_descripcion" class="form-label">Descripción de la Imagen</label>
                                <input
                                    type="text"
                                    id="imagen_descripcion"
                                    name="imagen_descripcion"
                                    class="form-control"
                                    maxlength="255"
                                >


                            </div>

                            <!-- Formato -->
                            <div class="col-md-3">

                                <label for="formato" class="form-label">Formato</label>
                                <select
                                    id="formato"
                                    name="formato"
                                    class="form-select"
                                >

                                    <option selected disabled value="">Seleccionar Formato</option>
                                    <option value="Vinilo Doble">Vinilo Doble</option>
                                    <option value="4 LP">4 LP</option>
                                    <option value="12 + CD">12 + CD</option>
                                    <option value="12">12</option>


                                </select>

                            </div>

                            <!-- Sello -->
                            <div class="col-md-3">

                                <label for="sello" class="form-label">Sello</label>
                                <input
                                    type="text"
                                    id="sello"
                                    name="sello"
                                    class="form-control"
                                    maxlength="45"
                                    required
                                    value=""
                                >


                            </div>

                            <!-- Año -->
                            <div class="col-md-3">

                                <label for="anio" class="form-label">Año</label>
                                <select
                                    id="anio"
                                    name="anio"
                                    class="form-select"
                                >

                                    <option selected disabled value="">Seleccionar Año</option>


                                <option value="2022">2022</option>


                                <option value="2021">2021</option>


                                <option value="2020">2020</option>


                                <option value="2019">2019</option>


                                <option value="2018">2018</option>


                                <option value="2017">2017</option>


                                <option value="2016">2016</option>


                                <option value="2015">2015</option>


                                <option value="2014">2014</option>


                                <option value="2013">2013</option>


                                <option value="2012">2012</option>


                                <option value="2011">2011</option>


                                <option value="2010">2010</option>


                                <option value="2009">2009</option>


                                <option value="2008">2008</option>


                                <option value="2007">2007</option>


                                <option value="2006">2006</option>


                                <option value="2005">2005</option>


                                <option value="2004">2004</option>


                                <option value="2003">2003</option>


                                <option value="2002">2002</option>


                                <option value="2001">2001</option>


                                <option value="2000">2000</option>


                                <option value="1999">1999</option>


                                <option value="1998">1998</option>


                                <option value="1997">1997</option>


                                <option value="1996">1996</option>


                                <option value="1995">1995</option>


                                <option value="1994">1994</option>


                                <option value="1993">1993</option>


                                <option value="1992">1992</option>


                                <option value="1991">1991</option>


                                <option value="1990">1990</option>


                                <option value="1989">1989</option>


                                <option value="1988">1988</option>


                                <option value="1987">1987</option>


                                <option value="1986">1986</option>


                                <option value="1985">1985</option>


                                <option value="1984">1984</option>


                                <option value="1983">1983</option>


                                <option value="1982">1982</option>


                                <option value="1981">1981</option>


                                <option value="1980">1980</option>


                                <option value="1979">1979</option>


                                <option value="1978">1978</option>


                                <option value="1977">1977</option>


                                <option value="1976">1976</option>


                                <option value="1975">1975</option>


                                <option value="1974">1974</option>


                                <option value="1973">1973</option>


                                <option value="1972">1972</option>


                                <option value="1971">1971</option>


                                <option value="1970">1970</option>


                                <option value="1969">1969</option>


                                <option value="1968">1968</option>


                                <option value="1967">1967</option>


                                <option value="1966">1966</option>


                                <option value="1965">1965</option>


                                <option value="1964">1964</option>


                                <option value="1963">1963</option>


                                <option value="1962">1962</option>


                                </select>

                            </div>

                            <!-- Origen -->
                            <div class="col-md-3">

                                <label for="origen" class="form-label">Origen</label>
                                <input
                                    type="text"
                                    id="origen"
                                    name="origen"
                                    class="form-control"
                                    maxlength="45"
                                    required
                                    value=""
                                >


                            </div>

                            <button type="submit" class="btn col-5 m-auto mt-3 mb-3">Registrar</button>

                        </form> --}}

                        <form action="{{ route('admin.productos.nuevo.ejecutar') }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                            @csrf

                            @if ($errors->any()) {{-- Si la variable $errors guarda algun error, entonces... --}}
                                <p class="mb-3 text-danger fs-6">Hay errores de validacion en el formulario. Por favor, revisa los datos e intenta de nuevo.</p>
                            @endif

                            <!-- Nombre -->
                            <div class="col-md-4">

                                <label for="nombre" class="form-label">Nombre</label>
                                <input
                                    type="text"
                                    id="nombre"
                                    name="nombre"
                                    class="form-control"
                                    value="{{ old('nombre') }}"
                                    @error('nombre') aria-describedby="error-nombre" @enderror
                                >

                                @error ('nombre')

                                    <div class="text-danger fs-6" id="error-nombre"><span class="visually-hidden">Error:</span>{{ $message }}</div>

                                @enderror

                            </div>

                            <!-- Precio -->
                            <div class="col-md-4">

                                <label for="precio" class="form-label">Precio</label>
                                <input
                                    type="number"
                                    id="precio"
                                    name="precio"
                                    class="form-control"
                                    value="{{ old('precio') }}"
                                    @error('precio') aria-describedby="error-precio" @enderror
                                >

                                @error ('precio')

                                    <div class="text-danger fs-6" id="error-precio"><span class="visually-hidden">Error:</span>{{ $message }}</div>

                                @enderror
                            </div>

                            <!-- Destacado -->
                            <div class="col-md-4 align-items-center d-flex">

                                <div class="form-check form-switch ">
                                    <label for="destacado" class="form-check-label">Destacado</label>
                                    <input
                                        type="checkbox"
                                        id="destacado"
                                        name="destacado"
                                        class="form-check-input"
                                        @if(old('destacado') == 1) checked @endif
                                        value="{{ old('destacado', 1) }}"
                                    >

                                </div>

                            </div>

                            <!-- Imagen -->
                            <div class="col-md-6">

                                <label for="imagen" class="form-label">Imagen</label>
                                <input
                                    type="file"
                                    id="imagen"
                                    name="imagen"
                                    class="form-control"
                                >

                                {{-- <div class="text-danger fs-6" id="error-imagen"><span class="visually-hidden">Error:</span>Suba una imagen</div> --}}

                            </div>

                            <!-- Imagen Descripcion -->
                            <div class="col-md-6">

                                <label for="imagen_descripcion" class="form-label">Descripción de la Imagen</label>
                                <input
                                    type="text"
                                    id="imagen_descripcion"
                                    name="imagen_descripcion"
                                    class="form-control"
                                    value="{{ old('imagen_descripcion') }}"
                                    @error('imagen_descripcion') aria-describedby="error-imagen_descripcion" @enderror
                                >

                                @error ('imagen_descripcion')

                                    <div class="text-danger fs-6" id="error-imagen_descripcion"><span class="visually-hidden">Error:</span>{{ $message }}</div>

                                @enderror

                            </div>

                            {{-- Descripcion --}}
                            <div class="col-md-12">

                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea
                                    id="descripcion"
                                    name="descripcion"
                                    class="form-control"
                                    @error('descripcion') aria-describedby="error-descripcion" @enderror
                                >{{ old('descripcion') }}</textarea>

                                @error ('descripcion')

                                    <div class="text-danger fs-6" id="error-descripcion"><span class="visually-hidden">Error:</span>{{ $message }}</div>

                                @enderror

                            </div>

                            <button type="submit" class="btn col-5 m-auto mt-3 mb-3">Agregar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>


    </section>

@endsection



