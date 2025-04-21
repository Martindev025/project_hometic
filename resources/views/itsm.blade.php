@extends('index')

@section('title', 'Inicio')

@section('content')

<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url('{{ asset('assets/img/bg_image_3.jpg') }}')">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('validation.general.init') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('validation.general.info') }}</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">{{ __('validation.itsm.title') }}</h1>
            </div>
        </div>
    </div>
</div>


<!--Imagen izquierda y texto Derecha-->    
<div class="page-section3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
            <div class="about-img1" style="max-width: 400px;">
                    <img class="img32" src="{{ asset('assets/img/planos-desarrollo.jpg') }}" alt="" style="width: 400px;" ;>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <h2 class="title-section">{{ __('validation.itsm.it') }}</h2>
                <p style="text-align: justify">{{ __('validation.itsm.it-text') }}
            </p>
            </div>
        </div>
    </div>
</div>
<!--Imagen izquierda y texto Derecha Fin-->


<div class="page-section1">
    <div class="container-fluid">
    <div class="text-center">
    <h2 class="title-section mb-3">{{ __('validation.itsm.ask') }}</h2>
    </div>
        <!-- Columnas -->
        <div class="row align-items-start align-items-stretch d-flex">
            <!-- Columna 1 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="{{ asset('assets/img/mesa-ayuda.png') }}" alt="Imagen 1" class="img-fluid mb-3 mx-auto d-block" style="width: 128px;">
                    <h5 class="title-section text-center">{{ __('validation.itsm.problem') }}</h5>
                    <p style="text-align: justify">{!! trans('validation.itsm.problem-text') !!} 
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="{{ asset('assets/img/mesa-preventivo.png') }}" alt="Imagen 2" class="img-fluid mb-3 mx-auto d-block" style="width: 128px;">
                    <h5 class="title-section text-center">{{ __('validation.itsm.gestion') }}</h5>
                    <p style="text-align: justify">{!! trans('validation.itsm.gestion-text') !!}</p>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="{{ asset('assets/img/mesa-remoto.png') }}" alt="Imagen 3" class="img-fluid mb-3 mx-auto d-block" style="width: 128px;">
                    <h5 class="title-section text-center">{{ __('validation.itsm.inform') }}</h5>
                    <p style="text-align: justify">{!! trans('validation.itsm.inform-text') !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')
<script>
    document.getElementById('boton').disabled = true;
</script>

<script>
    var checkbox = document.getElementById('test');
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('boton').disabled = false;
        } else {
            document.getElementById('boton').disabled = true;
        }
    });
</script>
@stop