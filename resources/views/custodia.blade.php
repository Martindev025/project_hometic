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
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('validation.general.init') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('validation.general.info') }}</li>
                    </ol>
                </nav>-->
                <h1 class="fg-white text-center display-3 font-weight-bold">
                    {{ __("validation.cust.title") }}
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="page-section3">
    <div class="container">
        <div class="text-center blue-bootom-border pb-3">
            <h2 class="title-section-cust mb-3 font-weight-bold">
                {{ __("validation.cust.commitment") }}
            </h2>
        </div>

        <div class="row justify-content-center mt-5 text-center">
            <div class="col-12">
                <h3 class="text-h3 mb-3">
                    {{ __("validation.cust.promise") }}
                </h3>
                <p class="text-p mb-3">
                    {{ __("validation.cust.dedication") }}
                </p>
            </div>
        </div>

        <div class="row justify-content-center gx-5 text-center pb-5">
            <div class="col-12 col-md-6 mb-4">
                <img
                    src="{{ asset('assets/img/experiencia-acerca.png') }}"
                    alt="Imagen integridad y seguridad"
                    class="img-index"
                />
                <h3 class="text-h3 mb-3">
                    {{ __("validation.cust.sec&int") }}
                </h3>
                <p>
                    {{ __("validation.cust.sec&int-text") }}
                </p>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <img
                    src="{{ asset('assets/img/contract.jpg') }}"
                    alt="Imagen cumplimiento normativo"
                    class="img-index"
                />
                <h3 class="text-h3 mb-3">
                    {{ __("validation.cust.rule") }}
                </h3>
                <p>
                    {{ __("validation.cust.rule-text") }}
                </p>
            </div>
        </div>

        <div class="row justify-content-center pb-5">
            <div class="col-12 text-center">
                <h3 class="title-section-cust mb-3 font-weight-bold">
                    {{ __("validation.cust.method") }}
                </h3>
            </div>
        </div>

        <div class="row justify-content-center gx-5 mb-4">
            <div class="col-12 col-md-6 mb-4 border-div-blue ml-5 mr-5">
                <p class="font-weight-bold text-center mt-3">
                    {{ __("validation.cust.title") }}
                </p>
                <ul class="text-left">
                    <li>{{ __("validation.cust.frst-item-cust") }}</li>
                    <li>{{ __("validation.cust.scd-item-cust") }}</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-4 border-div-blue ml-5 mr-5">
                <p class="font-weight-bold text-center mt-3">
                    {{ __("validation.gest.title") }}
                </p>
                <ul class="text-left">
                    <li>{{ __("validation.cust.frst-item-doc") }}</li>
                    <li>{{ __("validation.cust.scd-item-doc") }}</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center gx-5">
            <div class="col-12 col-md-6 mb-4">
                <div
                    class="text-center blue-bootom-border title-section-cust font-weight-bold mb-4"
                >
                    <h2>{{ __("validation.cust.importance") }}</h2>
                </div>
                <div class="w-90">
                    <p class="text-left mt-3 text-h5">
                        <strong>{{
                            __("validation.cust.importance-sub-title")
                        }}</strong>

                        {{ __("validation.cust.importance-text") }}
                    </p>
                    <p class="text-left mt-3 text-h5">
                        <strong>{{
                            __("validation.cust.importance-sub-title-2")
                        }}</strong>

                        {{ __("validation.cust.importance-text-2") }}
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <img
                    src="{{ asset('assets/img/to-do-list.jpg') }}"
                    alt="Imagen cumplimiento normativo"
                    class="img-index"
                />
            </div>
        </div>
    </div>

    <!-- .container -->
</div>
<!-- .page-section -->

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
