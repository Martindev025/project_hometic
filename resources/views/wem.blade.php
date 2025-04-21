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
                <h1 class="fg-white text-center">{{ __('validation.wem.title') }}</h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">

                <h2 class="title-section">{{ __('validation.wem.aplications') }}</h2>

                <p style="text-align: justify">{{ __('validation.wem.aplications-text') }}</p>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="{{ asset('assets/img/nube-bg.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->
<!--Imagen izquierda y texto Derecha-->    
<div class="page-section3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <div class="about-img1">
                    <img class="img32" src="{{ asset('assets/img/wem.png') }}" alt="" style="width: 100%";>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <h2 class="title-section">{{ __('validation.wem.free') }}</h2>
                <p style="text-align: justify">{{ __('validation.wem.free-text') }}</p>
            </div>
        </div>
    </div>
</div>
<!--Imagen izquierda y texto Derecha Fin-->

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