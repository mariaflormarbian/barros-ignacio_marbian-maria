@extends('layouts.admin-main')

@section('title', 'Eliminar Producto')

@section('h1', 'Editar Producto')

@section('main')

    <section class="main-dashboard">

        <div class="row">
            
            <div class="shadow-lg bg-body rounded p-3 mb-5 mt-4 m-auto" id="form-login">


                <h2 class="p-3 mb-2 bg-dark bg-gradient fw-bold text-white">
                    
                Confirmar eliminación de vinilo 

                </h2> 

                <dl class= "d-flex  flex-column align-items-center">
                    <dt>Vinilo</dt>
                    <dd>Checkkkkkk Your Head</dd>
                    <dt>Categoría</dt>
                    <dd>Rap</dd>
                    <dt>Precio</dt>
                    <dd>$ 8990</dd>
                    <dt>Imagen</dt>
                    <dd><img src="../img/beastieboys.jpg" alt="Vinilo Check Your Head, Beastie Boys" class="img-table"></dd>
                </dl>
            
                <form action="acciones/vinilos/vinilos-eliminar.php?id=14" method="post" class=" d-flex">
                    <input type="hidden" name="id" value="">
                    <button type="submit" class="btn col-md-3 m-auto mt-3">Editar</button>
                </form>

            </div>

        </div>

    </section>

@endsection