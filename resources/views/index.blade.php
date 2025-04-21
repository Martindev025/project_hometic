<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>

    <title>Hometic</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- ======= Favicons ======= -->
    <link href="{{ asset('assets\img\iconos/logo.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>@yield('title') - Tecnología Servicios y Outsourcing</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animation.scss') }}">
    <link rel="stylesheet" href="{{ asset('assets/ css/aos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    @yield('css')

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
     
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <img class="img-body" src="{{ asset('assets/img/logo.png') }}"  alt="">

                <div class="cornerimages">
                    <a href="{{ route('setLocale', ['locale' => 'es']) }}"><img src="{{ asset('assets\img\espana.png') }}" alt="Imagen 1"></a>
                    <a href="{{ route('setLocale', ['locale' => 'en']) }}"><img src="{{ asset('assets\img\ingles.png') }}" alt="Imagen 2"></a>
                </div>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">{{ __('validation.header.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('acerca') }}" class="nav-link">{{ __('validation.header.about') }}</a>
                        </li>

                        
                         <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                {{ __('validation.header.our') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="{{ route('gestiondoc') }}" class="dropdown-item">
                                {{ __('validation.header.doc') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('organizacion') }}" class="dropdown-item">
                                    {{ __('validation.header.archiv') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('custodia') }}" class="dropdown-item">
                                    {{ __('validation.header.cust') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('preservacion') }}" class="dropdown-item">
                                    {{ __('validation.header.digital') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('consultoria') }}" class="dropdown-item">
                                    {{ __('validation.header.soft-doc') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('software-pre') }}" class="dropdown-item">
                                    {{ __('validation.header.soft-dig') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('archivistico') }}" class="dropdown-item">
                                    {{ __('validation.header.service') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('aprovisionamiento') }}" class="dropdown-item">
                                    {{ __('validation.header.desktop') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('soporte') }}" class="dropdown-item">
                                    {{ __('validation.header.support-desk') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('servicios') }}" class="dropdown-item">
                                    {{ __('validation.header.help') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('wem') }}" class="dropdown-item">
                                    {{ __('validation.header.wem') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('monitor') }}" class="dropdown-item">
                                    {{ __('validation.header.monitor') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('itsm') }}" class="dropdown-item">
                                    {{ __('validation.header.itsm') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('acronis') }}" class="dropdown-item">
                                    {{ __('validation.header.cloud') }}
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="{{ route('aliados') }}" class="nav-link">{{ __('validation.header.partners') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('tickets') }}" class="nav-link">{{ __('validation.header.support') }}</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">{{ __('validation.header.blog') }}</a>
                        </li> 
                        
                        <li class="nav-item">
                            <a href="{{ route('contacto') }}" class="nav-link">{{ __('validation.header.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 
 <a href="https://wa.me/573236567087/?text=Me%20interesa%20conocer%20mas%20acerca%20de%20sus%20servicios" style="position:fixed;
  width:60px;
  height:60px;
  bottom:70px; 
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:40px;
  z-index:100;"><i class="mai-logo-whatsapp" style=" margin-top:13px;"></i></i></a>


    </header>

    <main>
        @yield('content')
    </main>

<!--  ======= Modal  ======= -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
          <h5 class="modal-title" id="exampleModalLabel">Estamos trabajando para ti</h5>
        
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
      </div>
        <div class="modal-body">        
      </div>
        <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn-contact" href="malito: comercial@aytcol.com">Contactanos</button>

      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
        <div class="footer-content">
            <div class="contact-info">
            © Copyright 2024 <strong><span>HOMETIC S.A</span></strong> . All Rights Reserved
            </div>
            <div class="social-icons">
                <a href="https://twitter.com/HometicSAS" class="social-icon"><i class="fa-brands fa-x-twitter"></i>
                <a href="https://www.facebook.com/profile.php?id=61555651842720&locale=es_LA" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/hometicsas/" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/c3145fe7b9.js" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/google-maps.js') }}"></script>

    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <script src="https://kit.fontawesome.com/ec1c9da28d.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <script>
    $(document).ready(function() {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: '¡Mensaje enviado!',
                text: 'Tu mensaje ha sido enviado con éxito.',
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    });
    </script>


    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

    @yield('js')
</body>

</html>