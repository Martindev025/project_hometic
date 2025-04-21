@extends('index')

@section('title', 'Inicio')

@section('content')

<!-- Banner Index -->
<div class="banner-container-acerca">
    <img class="banner-img" src="{{ asset('assets/img/background-index.png') }}" alt="Banner de Inicio">
    <div class="banner-overlay"></div>
    <div class="banner-title-acerca">
      {!! trans('validation.consul.title') !!} 
   </div>
</div>

<!-- Que es -->

<section class="gestion-documental">
        <div class="documental">
            <div class="texto">
                <h2>{{ __('validation.consul.what') }}</h2>
                <div class="linea"></div>
                <p>{{ __('validation.consul.what-text') }}</p>
            </div>
            <img src="{{ asset('assets/img/software-gestion.png') }}" alt="Software de gestión documental">
        </div>
    </section>
        
<!-- Jonas SGDEA -->

<section class="jonas-documental">
        <div class="contenedor-documental">
            <img src="{{ asset('assets/img/jonas-documental.png') }}" alt="Acerca de Nosotros">
            <div class="texto-documental">
                <h1>{{ __('validation.consul.sgdea') }}</h1>
                <div class="linea"></div>
                <p>{{ __('validation.consul.sgdea-text') }}</p>
            </div>
        </div>
    </section>

    <!-- Ventajas -->

    <section class="ventajas-section">
  <h2>{{ __('validation.consul.vent') }}</h2>
  <div class="ventajas-lista">
    <div class="ventaja-item">
      <span class="numero">1.</span>
      <p>{{ __('validation.consul.vent-text') }}</p>
    </div>
    <div class="ventaja-item">
      <span class="numero">2.</span>
      <p>{{ __('validation.consul.vent-text-2') }}</p>
    </div>
    <div class="ventaja-item">
      <span class="numero">3.</span>
      <p>{{ __('validation.consul.vent-text-3') }}</p>
    </div>
    <div class="ventaja-item">
      <span class="numero">4.</span>
      <p>{{ __('validation.consul.vent-text-4') }}</p>
    </div>
    <h3>{{ __('validation.consul.vent-final') }}</h3>
  </div>
</section>

<!-- brochure -->
<section class="descargar-brochure">
    <div class="contenedor-brochure">
        <h2>{{ __('validation.consul.more') }}</h2>
        <p>{{ __('validation.consul.more-text') }}</p>
        <a href="{{ asset('assets/HT Gestión Documental JONAS SGDEA.pdf') }}" class="btn-descargar" download>{{ __('validation.consul.more-down') }}</a>
    </div>
</section>


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