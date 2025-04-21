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
                <h1 class="fg-white text-center">{{ __('validation.desktop.title') }}</h1>
            </div>
        </div>
    </div>
</div> 

<!-- Incio box -->

<div class="page-section1">
    <div class="container-fluid">
        <!-- Columnas -->
        <div class="row align-items-start align-items-stretch d-flex">
            <!-- Columna 1 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="{{ asset('assets/img/services/board.png') }}" alt="Imagen 1" class="img-fluid mb-3 mx-auto d-block">
                    <h5 class="title-section text-center">{{ __('validation.desktop.hard-soft') }}</h5>
                    <p style="text-align: justify">{!! trans('validation.desktop.hard-soft-text') !!}</p>
                    <a href="soporte.php" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;">{{ __('validation.desktop.more') }}</a>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="{{ asset('assets/img/services/conectando.png') }}" alt="Imagen 2" class="img-fluid mb-3 mx-auto d-block">
                    <h5 class="title-section text-center">{{ __('validation.desktop.conect') }}</h5>
                    <p style="text-align: justify">{!! trans('validation.desktop.conect-text') !!}
                </p>
                    <a href="servicio2.php" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;">{{ __('validation.desktop.more') }}</a>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="{{ asset('assets/img/services/innovacion.png') }}" alt="Imagen 3" class="img-fluid mb-3 mx-auto d-block">
                    <h5 class="title-section text-center">{{ __('validation.desktop.inno') }}</h5>
                    <p style="text-align: justify">{{ __('validation.desktop.inno-text') }}</p>
                    <a href="servicio3.php" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;">{{ __('validation.desktop.more') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contacto -->
<section id="contact" class="contact">
    <div class="espacio1234">
    <div class="container">
    <div class="section-title">

    <h2 class="title-section-contact" style="text-align: center;">{{ __('validation.contact.title') }}</h2>

    </div>
    </div>

    <div>

    </div>

        <div class="container">
            <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                    <i class="fa-solid fa-location-dot"></i>

        <h4>{{ __('validation.contact.direc') }}</h4>

        <p>Cl 98ª #51-37  </p>
        <p>{{ __('validation.contact.edif') }}</p>
        <p>Bogotá</p>

    </div>
<br>
        <div class="phone">
        <i class="fa-solid fa-phone-volume"></i>

        <h4>{{ __('validation.contact.phone') }}</h4>

        <p>323 6567087</p>



    </div>
<br>
        <div class="email">
        <i class="fa-solid fa-envelope-circle-check"></i>

        <h4>{{ __('validation.contact.email') }}</h4>

        <p>info@hometicsa.com</p>

        </div>
    </div>
</div>

        <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="{{ route('mail.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="{{ __('validation.contact.name') }}" required>
            </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">

                    <input type="text" class="form-control" name="phone" id="subject"
                        placeholder="{{ __('validation.contact.phone') }}" required>
            </div>
        </div>
                <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('validation.contact.mail') }}" required>
            </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="{{ __('validation.contact.message') }}" required></textarea>
            </div>

                <div class="text-center">

                    <button type="submit" class="btn btn-success btn-xl mt-3">{{ __('validation.contact.send') }}</button>

                    </div>
                </form>
            </div>
        </div>
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