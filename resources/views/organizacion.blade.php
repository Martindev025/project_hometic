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
                <h1
                    class="fg-white g-white text-center display-4 font-weight-bold"
                >
                    {{ __("validation.orga.title") }}
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="page-section3">
    <div class="container">
        <div class="text-left mt-5 pb-3">
            <h3 class="text-h2 mb-3 font-weight-bold">
                {{ __("validation.orga.subtitle") }}
            </h3>
            <h3>
                <p class="text-p font-weight-normal">
                    {{ __("validation.orga.subtitle-text") }}
                </p>
            </h3>
        </div>
    </div>
    <div class="row justify-content-center mt-5 text-center">
        <div class="col-12">
            <h3 class="title-section-cust mb-3 font-weight-bold">
                {{ __("validation.cust.method") }}
            </h3>
        </div>
    </div>

    <div class="row justify-content-center gx-5 text-center pb-5">
        <div class="col-12 col-md-4 mb-4 border-div-blue-org">
            <p class="text-p mt-3">
                {{ __("validation.orga.meth-head-1") }}
            </p>
            <ul class="text-left">
                <li>
                    {{ __("validation.orga.meth-text-1-1") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-1-2") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-1-3") }}
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-4 mb-4 border-div-blue-org ml-5 mr-5">
            <p class="text-p mt-3">
                {{ __("validation.orga.meth-head-2") }}
            </p>
            <ul class="text-left">
                <li>
                    {{ __("validation.orga.meth-text-2-1") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-2-2") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-2-3") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-2-4") }}
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-4 mb-4 border-div-blue-org">
            <p class="text-p mt-3">
                {{ __("validation.orga.meth-head-3") }}
            </p>
            <ul class="text-left">
                <li>
                    {{ __("validation.orga.meth-text-3-1") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-3-2") }}
                </li>
                <li>
                    {{ __("validation.orga.meth-text-3-3") }}
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="text-left mt-5 pb-3">
            <h3 class="title-section-cust mb-3 font-weight-bold">
                {{ __("validation.orga.info") }}
            </h3>
        </div>
    </div>
</div>

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
