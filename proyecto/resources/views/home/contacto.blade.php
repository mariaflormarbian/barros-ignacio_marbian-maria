@extends('layouts.main')

@section('title', 'Conatcto')

@section('main')

<section id="featured" class="my-5 py-5">

    <div class="container mt-5 py-5">

        <h1 class="font-weight-bold">Contacto</h1>
        <hr>

    </div>

    <div class="container ">

        <div class="container row d-lg-flex flex-lg-nowrap py-3">

            <div class="col-lg-6">

                <p class="subtitulo d-flex flex-column py-3">Si tuviste un problema realizando una compra o necesitás
                    ayuda con la tienda, escribínos. Contamos con un número de WhatsApp para atención
                    personalizada, podes detallar que medio es por el cuál prefiere ser contactado.</p>

                <form action="#" method="POST">

                    <div class="row">

                        <div class="py-3 w-100">

                            <label class="visually-hidden" for="nombre">Nombre</label>
                            <input type="text" class="form-control bg-light" name="nombre" id="nombre"
                                placeholder="Nombre">

                        </div>

                        <div class="py-3 w-100">

                            <label class="visually-hidden" for="email">Email</label>
                            <input type="email" class="form-control bg-light" name="email" id="email"
                                placeholder="E-mail">

                        </div>

                        <div class="py-3 w-100">

                            <label class="visually-hidden" for="numero">Número</label>
                            <input type="number" class="form-control bg-light" name="numero" id="numero"
                                placeholder="Numero">

                        </div>

                    </div>

                    <div class="row">

                        <div class="py-3 w-100">

                            <label class="visually-hidden" for="opinion">Mensaje</label>
                            <textarea name="opinion" class="form-control bg-light"
                                placeholder="Queremos saber que opinas..." id="opinion" cols="10" rows="5"></textarea>

                        </div>

                        <button type="submit" class="btn1 btn col-md-3 m-auto">Enviar</button>

                    </div>

                </form>

            </div>

            <div class="col-lg-6 py-3">

                <ul class="list-unstyled d-flex justify-content-md-evenly flex-column flex-md-row align-items-center">

                    <li class="mr-3">
                        <p class="h4"><i class="las la-map-marker-alt"></i>Dirección</p>
                        <p>Juana Azurduy 3425</p>
                    </li>

                    <li class="mr-3">
                        <p class="h4 pe-5"><i class="las la-phone"></i>Teléfono</p>
                        <p>+54 9 11 3427-9919</p>

                    </li>

                    <li>
                        <p class="h4"><i class="las la-envelope"></i>Email</p>
                        <p>ieta.@gmail.com</p>
                    </li>

                </ul>

                <figure>
                    <iframe class="mw-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26280.433413040166!2d-58.41783982214583!3d-34.57749569518187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb588f4af5d17%3A0x560fe6ff3f099abf!2sPlaza%20Serrano!5e0!3m2!1ses-419!2sar!4v1655328517125!5m2!1ses-419!2sar"
                        width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                </figure>

            </div>

        </div>

    </div>

</section>


@endsection