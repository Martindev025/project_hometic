@extends('index') @section('title', 'Inicio') @section('content')

<div
    class="page-banner bg-img bg-img-parallax"
    style="background-image: url('{{
        asset('assets/img/background-index.png')
    }}')"
>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <!--<nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">{{__("validation.general.init")}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ __("validation.general.info") }}
                        </li>
                    </ol>
                </nav>-->
                <h1
                    class="fg-white g-white text-center display-4 font-weight-bold"
                >
                    {{ __("validation.gest.title") }}
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- .page-banner -->

<!-- Inicicio de columnas -->
<div class="page-section-documental">
    <div class="container">
        <div class="row justify-content-center gx-5">
            <div class="col-12 col-md-6 mb-4">
                <div class="title-section-cust-gest mb-3 mt-4">
                    <h2 class="title-section-cust-gest">
                        {{ __("validation.gest.info") }}
                    </h2>
                </div>
                <div class="w-90">
                    <p class="text-left mt-3 text-h5">
                        {{ __("validation.gest.specific-info") }}
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mt-4">
                <img
                    src="{{ asset('assets/img/laptop-working.png') }}"
                    alt="Imagen consultoria en gestion documental"
                    class="img-index"
                />
            </div>
        </div>
        <div class="text-center mt-5 pb-3">
            <div class="">
                <h3 class="title-section-high-bold mb-3">
                    {{ __("validation.gest.politics") }}
                </h3>
                <h3>
                    <p class="text-p text-left font-weight-normal">
                        {{ __("validation.gest.politics-text") }}
                    </p>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center gx-5 mb-4">
            <div class="col-12 col-md-5 mb-4 border-div-blue ml-5 mr-5">
                <p class="font-weight-bold text-center mt-5 ml-4 mr-4">
                    {{ __("validation.gest.law") }}
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 ml-5">
                <img
                    src="{{ asset('assets/img/hold-books.jpg') }}"
                    alt="Imagen consultoria en gestion documental"
                    class="img-section"
                />
            </div>
        </div>
        <div class="row justify-content-center text-center pb-5">
            <div class="col-12 col-md-4 mb-4 gest-div-info">
                <img
                    src="{{ asset('assets/img/talking.jpeg') }}"
                    alt="Imagen consultoria en gestion documental"
                    class="img-section"
                />
                <p class="text-section-cust-gest">
                    {{ __("validation.gest.cust-serv-1") }}
                </p>
            </div>
            <div class="col-12 col-md-4 mb-4 gest-div-info ml-5 mr-5">
                <img
                    src="{{ asset('assets/img/meeting.jpg') }}"
                    alt="Imagen consultoria en gestion documental"
                    class="img-section"
                />
                <p class="text-section-cust-gest-blue">
                    {{ __("validation.gest.cust-serv-2") }}
                </p>
            </div>
            <div class="col-12 col-md-4 mb-4 gest-div-info">
                <img
                    src="{{ asset('assets/img/call-service.jpg') }}"
                    alt="Imagen consultoria en gestion documental"
                    class="img-section"
                />
                <p class="text-section-cust-gest">
                    {{ __("validation.gest.cust-serv-3") }}
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Fin de columnas -->


<!-- contacto -->
<section id="contact" class="contact">
    <div class="espacio1234">
        <div class="container">
            <div class="section-title">
                <h2 class="title-section-contact" style="text-align: center">
                    {{ __("validation.contact.title") }}
                </h2>
            </div>
        </div>

        <div></div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot"></i>

                            <h4>{{ __("validation.contact.direc") }}</h4>

                            <p>Cl 98ª #51-37</p>
                            <p>{{ __("validation.contact.edif") }}</p>
                            <p>Bogotá</p>
                        </div>
                        <br />
                        <div class="phone">
                            <i class="fa-solid fa-phone-volume"></i>

                            <h4>{{ __("validation.contact.phone") }}</h4>

                            <p>323 6567087</p>
                        </div>
                        <br />
                        <div class="email">
                            <i class="fa-solid fa-envelope-circle-check"></i>

                            <h4>{{ __("validation.contact.email") }}</h4>

                            <p>info@hometicsa.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form
                        action="{{ route('mail.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    id="name"
                                    placeholder="{{
                                        __('validation.contact.name')
                                    }}"
                                    required
                                />
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="phone"
                                    id="subject"
                                    placeholder="{{
                                        __('validation.contact.phone')
                                    }}"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="{{
                                    __('validation.contact.mail')
                                }}"
                                required
                            />
                        </div>
                        <div class="form-group mt-3">
                            <textarea
                                class="form-control"
                                name="message"
                                rows="5"
                                placeholder="{{
                                    __('validation.contact.message')
                                }}"
                                required
                            ></textarea>
                        </div>

                        <div class="text-center">
                            <button
                                type="submit"
                                class="btn btn-success btn-xl mt-3"
                            >
                                {{ __("validation.contact.send") }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop @section('css') @stop @section('js')
<script>
    document.getElementById("boton").disabled = true;
</script>

<script>
    var checkbox = document.getElementById("test");
    checkbox.addEventListener("change", function () {
        if (this.checked) {
            document.getElementById("boton").disabled = false;
        } else {
            document.getElementById("boton").disabled = true;
        }
    });
</script>
@stop
