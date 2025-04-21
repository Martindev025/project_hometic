<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title><?php echo $__env->yieldContent('title'); ?> - Tecnología Servicios y Outsourcing</title>

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
     
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <img class="img-body" src="assets/img/logo.png"  alt="">

                <div class="cornerimages">
  <a href="index.php"><img src="assets\img\espana.png" alt="Imagen 1"></a>
  <a href="lenguajes\Ingles\public\index.php"><img src="assets\img\ingles.png" alt="Imagen 2"></a>
</div>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                        <li class="nav-item">
                            <a href="index.php " class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="acercadenosotros.php" class="nav-link">Acerca de nosotros</a>
                        </li>

                        
                         <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                Nuestros Servicios 
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <a href="soporte.php" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>Soporte y mantenimiento de equipos
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="servicios.php" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i>Servicio de mesa de ayuda
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="services.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Servicios de fábrica de software
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="wen.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Desarrollo de software bajo WEM
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="seguridad.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Herramientas de seguridad
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="abc.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Costos ABC
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="monitor.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Monitor tracker
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="ipsn.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Herramientas de IPSN
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="acronis.php" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>ACRONIS
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="aliados.php" class="nav-link">Aliados</a>
                        </li>
            
                        <li class="nav-item">
                            <a href="intranet.php" class="nav-link">Intranet</a>
                        </li>

                        <li class="nav-item">
                            <a href="tickets.php" class="nav-link">Soporte</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contáctenos</a>
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
<!--  ======= Fin Modal ======= -->

    <footer class="page-footer">
        <div class="container">
            <div class="row row-cols-md-4 row-cols-lg-3 justify-content-between ">
                <div class="col-lg-4 py-4">
                    <img src="<?php echo e(asset('assets/img/image.png')); ?> " alt="">
                    <p style="text-align: justify">Con más de 5 años de experiencia, buscamos generar un marco de confianza con el cliente y
                        convertirnos en
                        su socio tecnológico para ayudar a consolidar el crecimiento de su negocio y conseguir el éxito
                        para su
                        empresa.</p>
                </div>
                <div class="col-lg-4 py-4" style="margin-top: 3.5%">
                    <h5>Información de contácto</h5>
                    <p>Centro de Negocios Calle 98 A # 51-37 OFICINA 501 CENTRO EMPRESARIAL ECOTORRE | Bogotá-Colombia</p>
                    <p>correo</p>
                    <p>+57 (1) 6386460 / (+57) 3183059586</p>
                </div>

                <div class="col-lg-4 py-4">
                    <div class="maps-container">
                        <div class="mapouter">
                        <br>
                                <iframe width="600" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4786673735293!2d-74.06464692442962!3d4.686562495288399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ac27be45355%3A0xb01b226f9392aa1!2sCentro%20Empresarial%20Eco%20Torre!5e0!3m2!1sen!2sco!4v1683262408493!5m2!1sen!2sco" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></iframe>
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
                <center> <p>© Copyright 2023  – TECSER S.A.S. Todos los derechos reservados </p> </center>  
                </div>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/c3145fe7b9.js" crossorigin="anonymous"></script>

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

</html><?php /**PATH C:\xampp\htdocs\Tecnología_Servicios_y_Outsourcing\resources\views/index.blade.php ENDPATH**/ ?>