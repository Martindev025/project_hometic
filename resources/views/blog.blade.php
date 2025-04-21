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
                <h1 class="fg-white text-center">{{ __('validation.blog.title') }}</h1>
            </div>
        </div>
    </div>
</div> 
<!-- Blog -->
<section>
    
    
    <div class="container">
        <div class="blog-separacion" style="margin-top: 30px;">

<div class="blog-item">
    <a href="#">
    <div class="icon">
            <img src="{{ asset('assets\img\eventos\eventob1.jpg') }}" alt="">
        </div>
        <div class="content">
            <div class="title">{{ __('validation.blog.content-1') }}<span class="blog-date">28.02.2024 - 01.03.2024</span></div>
            <div class="rounded-blog"></div>

            <p>{{ __('validation.blog.content-text-1') }}</p>
        </div>

        <div class="item-arrow">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </div>
    </a>

</div>
</div>


   </section>

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