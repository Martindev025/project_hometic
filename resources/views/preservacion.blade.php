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
                <h1 class="fg-white text-center">{{ __('validation.preserv.title') }}</h1>
            </div>
        </div>
    </div>
</div> 
<div class="page-section3">
    <div class="container">
        <div class="text-center">
            <h2 class="title-section mb-3">{{ __('validation.general.you') }}</h2>
            <p>{{ __('validation.general.ask') }}</p>
        </div>
        <div class="row justify-content-center mt-5">
       
            <div class="col-lg-8">    
                   
                    <img src="{{ asset('assets/img/pronto/pronto.gif') }}" alt=""  style="width: 130%; height: 100%; margin-left: -15%">
                
                
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->


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