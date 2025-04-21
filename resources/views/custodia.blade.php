@extends('index') @section('title', 'Inicio') @section('content')
<div class="page-banner bg-img bg-img-parallax" style="background-image: url('{{ asset('assets/img/background-index.png') }}')">
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

        <div class="row justify-content-center gx-5">
            <div class="col-12 col-md-6 mb-4 border-div-blue ml-5 mr-5">
                <p class="font-weight-bold text-center mt-3">{{ __("validation.cust.title") }}</p>
                <ul class="text-left">
                    <li>{{ __("validation.cust.frst-item-cust") }}</li>
                    <li>{{ __("validation.cust.scd-item-cust") }}</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mb-4 border-div-blue ml-5 mr-5">
                <p class="font-weight-bold text-center mt-3">{{ __("validation.gest.title") }}</p>
                <ul class="text-left">
                    <li>{{ __("validation.cust.frst-item-doc") }}</li>
                    <li>{{ __("validation.cust.scd-item-doc") }}</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center gx-5">
            <div class="col-12 col-md-6 mb-4">
                <p class="font-weight-bold text-center mt-3">{{ __("validation.cust.importance") }}</p>

            </div>
            <div class="col-12 col-md-6 mb-4">
                <p class="font-weight-bold text-center mt-3">{{ __("validation.gest.title") }}</p>

            </div>
        </div>
    </div>

    <!-- .container -->
</div>
<!-- .page-section -->

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
