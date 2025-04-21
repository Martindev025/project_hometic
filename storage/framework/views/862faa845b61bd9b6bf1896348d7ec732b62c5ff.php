<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title><?php echo $__env->yieldContent('title'); ?> - All Group Technology</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/maicons.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/animation.scss">
    <link rel="stylesheet" href="assets/ css/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <?php echo $__env->yieldContent('css'); ?>

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="top-bar animate__animated animate__fadeIn">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-inline-block">
                            <span class="mai-mail fg-primary"></span> <a href="mailto:info@allgrouptechnology.com">info@allgrouptechnology.com</a>
                        </div>
                        <div class="d-inline-block ml-2">
                            <span class="mai-home fg-primary"></span> <a>Carrera 18 No.86ª-14</a>
                            <span style="margin-left: 20px"></span> <a>Visitas:</a>
                            <?php
                                $archivo = "archivo.txt";
                                $contador = intval(trim(file_get_contents($archivo)));

                                $file = fopen($archivo, 'w');
                                fwrite($file, $contador + 1 . PHP_EOL);

                                // $file = fopen($archivo, 'r');
                                // echo fgets($file);
                                // fclose($file);
                                ?>
                            <span style="margin-left: 5px"></span> <a> <?php $file = fopen($archivo, 'r'); echo fgets($file); fclose($file); ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right d-none d-md-block">
                        <div class="social-mini-button">
                            <a href="https://www.facebook.com/ALL-GROUP-Technology-102694528121800"><span class="mai-logo-facebook-f"></span></a>
                            <a href="https://www.instagram.com/allgrouptech/?hl=es-la "><span class="mai-logo-instagram"></span></a>
                            <a href="https://www.linkedin.com/company/all-group-technology-s-a-s"><span class="mai-logo-linkedin"></span></a>
                            <a href=""><span class="mai-logo-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .top-bar -->

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <img src="assets/img/logo2.png" style="margin-left: -8%;  " alt="">

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                        <li class="nav-item">
                            <a href="<?php echo e(route('home')); ?>" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/about')); ?>" class="nav-link">Acerca de nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                Herramientas Cloud
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <a href="<?php echo e(url('/seguridad')); ?>" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>Herramientas de seguridad
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/abc')); ?>" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i>Costos ABC
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/monitor')); ?>" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Monitor tracker
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/ipsn')); ?>" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Herramientas de IPSN
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/acronix')); ?>" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>ACRONIX
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                Servicios de tecnología
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <a href="<?php echo e(url('/soporte')); ?>" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>Soporte y mantenimiento de equipos
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/servicios')); ?>" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i>Servicio de mesa de ayuda
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/services')); ?>" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Servicios de fábrica de software
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo e(url('/wen')); ?>" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Desarrollo de software bajo WEM
                                    <span class="float-right text-muted text-sm"></span>
                                </a>

                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('/contact')); ?>" class="nav-link">Contáctenos</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/aliados')); ?>" class="nav-link">Aliados</a>
                        </li>
            
                        <li class="nav-item">
                            <a href="<?php echo e(url('/tickets')); ?>" class="nav-link">Gestión de Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/cons')); ?>" class="nav-link">Intranet</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- .container -->
        </nav> <!-- .navbar -->
 <a href="https://wa.me/573183059586/?text=Me%20interesa%20conocer%20mas%20acerca%20de%20sus%20servicios" style="position:fixed;
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
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="row row-cols-md-4 row-cols-lg-3 justify-content-between ">
                <div class="col-lg-4 py-4">
                    <img src="<?php echo e(asset('assets/img/logo2.png')); ?> " alt="">
                    <p style="text-align: justify">Con más de 5 años de experiencia, buscamos generar un marco de confianza con el cliente y
                        convertirnos en
                        su socio tecnológico para ayudar a consolidar el crecimiento de su negocio y conseguir el éxito
                        para su
                        empresa.</p>
                </div>
                <div class="col-lg-4 py-4" style="margin-top: 3.5%">
                    <h5>Información de contácto</h5>
                    <p>Centro de Negocios Carrera 18 No.86ª-14| Bogotá-Colombia</p>
                    <p>info@allgrouptechnology.com</p>
                    <p>+57 (1) 6386460 / (+57) 3183059586</p>
                </div>

                <div class="col-lg-4 py-4">
                    <div class="maps-container">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Carrera%2018%20No.86%C2%AA-14%20bogota&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 500px;
                                        width: 600px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">embedded maps google</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 900px;
                                        width: 600px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mt-4">
                <div class="col-md-6">
                    <p>Copyright 2020 © – All Group Technology – Desarrollado por IPN SAS</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="assets/vendor/wow/wow.min.js"></script>

    <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="assets/js/google-maps.js"></script>

    <script src="assets/js/theme.js"></script>

    <script src="assets/js/aos.js"></script>


    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH D:\dev\Front\laravel\allgroup-app\resources\views/index.blade.php ENDPATH**/ ?>