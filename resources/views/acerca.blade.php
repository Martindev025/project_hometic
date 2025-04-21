@extends('index')

@section('title', 'Inicio')

@section('content')

<!-- Banner Index -->
<div class="banner-container-acerca">
    <img class="banner-img" src="{{ asset('assets/img/background-index.png') }}" alt="Banner de Inicio">
    <div class="banner-overlay"></div> <!-- Capa semitransparente -->
    <div class="banner-title-acerca">
      {{ __('validation.us.title') }}
    </div>
</div>

<!-- Seccion acerca de -->
<section class="acerca-nosotros">
        <div class="contenedor-nosotros">
            <img src="{{ asset('assets/img/quienes-acerca.png') }}" alt="Acerca de Nosotros">
            <div class="texto-nosotros">
                <h1>{{ __('validation.us.what') }}</h1>
                <p>{!! trans('validation.us.what-text') !!}</p>
            </div>
        </div>
    </section>

<!-- Mision y Vision -->
<div class="mision-vision">
  <div class="mision">
    <h2>{{ __('validation.us.mis') }}</h2>
    <div class="line"></div>
    <p>{{ __('validation.us.mis-text') }}</p>
  </div>
  <div class="vision">
    <h2>{{ __('validation.us.vis') }}</h2>
    <div class="line"></div>
    <p>{{ __('validation.us.vis-text') }}</p>
  </div>
</div>

<!-- Porque elegirnos -->
<div class="eleccion">
  <div class="elegirnos">
    <h2>{{ __('validation.us.why') }}</h2>
    <div class="line"></div>
    <p>{{ __('validation.us.why-text') }}</p>
  </div>
</div>

<div class="features-section">
  <div class="feature">
    <img src="{{ asset('assets/img/experiencia-acerca.png') }}" alt="Imagen 1">
    <h3>{{ __('validation.us.exp') }}</h3>
    <p>{{ __('validation.us.exp-text') }}</p>
  </div>
  <div class="feature">
    <img src="{{ asset('assets/img/tecnologia-acerca.png') }}" alt="Imagen 2">
    <h3>{{ __('validation.us.inno') }}</h3>
    <p>{{ __('validation.us.inno-text') }}</p>
  </div>
  <div class="feature">
    <img src="{{ asset('assets/img/cumplimiento-acerca.png') }}" alt="Imagen 3">
    <h3>{{ __('validation.us.norma') }}</h3>
    <p>{{ __('validation.us.norma-text') }}</p>
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
