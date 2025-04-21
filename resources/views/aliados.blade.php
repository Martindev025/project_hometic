@extends('index')

@section('title', 'Inicio')

@section('content')

<div class="page-banner bg-img bg-img-parallax overlay-dark" 
style="background-image: url('{{ asset('assets/img/bg_image_3.jpg') }}')">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('validation.general.init') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('validation.general.info') }}</li>
          </ol>
        </nav>
        <h1 class="fg-white text-center">{{ __('validation.partners.title') }}</h1>
      </div>
    </div>
  </div>
</div>

<div class="page-section1" style="margin-top: -170px">
  <div class="container">
    <div class="row justify-content-center">
      <div class="page-section1">
        <div class="container-fluid">
            <div class="text-center"  style="padding: 10% 0% 0% 0%;">
<br>              
                <h2 class="title-section mb-3">{{ __('validation.partners.part') }}</h2>
                <p>{{ __('validation.partners.part-text') }}</p>
            </div>
            <div class="row row-cols-md-3 row-cols-lg-3 justify-content-center text-center">
                <div class="py-3 px-1">
                    <img src="{{ asset('assets/img/clients/andina-inmobiliaria.png') }}" alt=""style="height: 100%; margin: 10px 0px 0px 80px">
                </div>
                <div class="py-3 px-5" style="margin-top: 2%;">
                    <img src="{{ asset('assets/img/clients/koral.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="py-3 px-5">
                    <img src="{{ asset('assets/img/clients/andina-life.png') }}" alt="">
                </div>
                <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/aldesarrollo.png') }}" alt="">
                </div>
                
                <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/comsistelco.png') }}" alt="" style="width: 90%; height: 65%; margin: 40px 0px 0px 20px;">
                </div>
                <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/aranda.png') }}" alt="">
                </div>
                <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/redcompu.png') }}" alt="" style= "width: 60%; height: 45%; margin: 40px 0px 0px 20px;">
            </div>
            <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/dinamica.png') }}" alt="" style= "width: 60%; height: 45%; margin: 40px 0px 0px 20px;">
            </div>
            <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/acronis.png') }}" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/kaspersky.png') }}" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/easycloud.png') }}" alt="" style= "width: 60%; height: 45%; margin: 30px;">
            </div>
            <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/hostdime.png') }}" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="{{ asset('assets/img/clients/microsoft.png') }}" alt="">
            </div> 
            
    
            </div>
        </div> <!-- .container-fluid -->
     
    </div> <!-- .page-section -->
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