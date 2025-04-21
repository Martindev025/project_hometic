<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>

    <title>Hometic</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- ======= Favicons ======= -->
    <link href="assets\img\iconos/logo.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <a href=""><img src="assets\img\ingles.png" alt="Imagen 2"></a>
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
                            <a href="consultory.php" class="dropdown-item">
                                Servicios de consultoría en gestión documental
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="organizacion.php" class="dropdown-item">
                                Organización y clasificación de archivos
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="custodia.php" class="dropdown-item">
                                Custodia de archivos
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="preservacion-digital.php" class="dropdown-item">
                                Servicios de preservacion digital
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="software-documental.php" class="dropdown-item">
                                Software de gestion documental
                                    <span class="float-right text-muted text-sm"></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="software-preservacion.php" class="dropdown-item">
                                Software de preservación digital
                                    <span class="float-right text-muted text-sm"></span>
                                </a>

                        </li>

                        
                        <li class="nav-item">
                            <a href="" class="nav-link">Aliados</a>
                        </li>

                        <li class="nav-item">
                            <a href="tickets.php" class="nav-link">Soporte</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link">Blog</a>
                        </li> 
                        
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contáctenos</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- .container -->
        </nav> <!-- .navbar -->
 <!-- 
 
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
-->

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

<!-- pruebas -->
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
    <!-- fin prueba -->

    <script src="https://kit.fontawesome.com/c3145fe7b9.js" crossorigin="anonymous"></script>

    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="assets/vendor/wow/wow.min.js"></script>

    <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="assets/js/google-maps.js"></script>

    <script src="assets/js/theme.js"></script>

<script src="https://kit.fontawesome.com/ec1c9da28d.js" crossorigin="anonymous"></script>

    <script src="assets/js/aos.js"></script>


    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\hometic\resources\views/index.blade.php ENDPATH**/ ?>