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
                <h1 class="fg-white g-white text-center display-4 font-weight-bold">
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
            <div class="col-12 col-md-6 mb-4 ">
                <div
                    class="title-section-cust-gest mb-3 mt-4"
                >
                    <h2 class="title-section-cust-gest">{{ __("validation.gest.info") }}</h2>
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
            <h3 class="title-section-high-bold mb-3">
                {{ __("validation.gest.politics") }}
            </h3>
            <h3>
                <p class="text-p text-left font-weight-normal">
                    {{ __("validation.gest.politics-text") }}
                </p>
            </h3>
        </div>
        <div class="row justify-content-center gx-5 mb-4">
            <div class="col-12 col-md-5 mb-4 border-div-blue ml-5 mr-5">
                <p class="font-weight-bold text-center mt-5 ml-4 mr-4 ">
                    {{ __("validation.gest.law") }}
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 ml-5 ">
                <img
                    src="{{ asset('assets/img/hold-books.jpg') }}"
                    alt="Imagen consultoria en gestion documental"
                    class="img-section"
                />
            </div>
        </div>
    </div>
</div>

<!-- Fin de columnas -->

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
