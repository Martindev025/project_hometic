

<?php $__env->startSection('title', 'Acerca de nosotros'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner bg-img bg-img-parallax overlay-dark" 
style="background-image: url(../assets/img/bg_image_3.jpg)">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Acerca de Nosotros</li>
          </ol>
        </nav>
        <h1 class="fg-white text-center">Acerca de Nosotros</h1>
      </div>
    </div>
  </div>
</div> <!-- .page-banner -->
<main>
  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">

          <h2 class="title-section">ALL GROUP TECHNOLOGY</h2>

          <p style="text-align: justify">Es una empresa que se sitúa en el sector de la Nuevas Tecnologías de la Información y la Comunicación.
            Nace con la idea de innovar en el área de las tecnologías, además de ofrecer soluciones de consultoría y
            servicios informáticos para las pequeñas y medianas empresas.</p>
        </div>
        <div class="col-lg-6 py-3">
          <div class="about-img">
            <img class="img15" src="<?php echo e(asset('assets/img/2.jpg')); ?>" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">

          <h2 class="title-section">NUESTRO OBJETIVO</h2>

          <p style="text-align: justify">Crear soluciones caracterizadas por su innovación, creatividad y calidad que permitan a los clientes
            mejorar sus procesos de negocio. Para ello contamos con un equipo joven y experimentado dispuesto a llegar
            donde las necesidades de nuestros clientes exijan.</p>
        </div>
        <div class="col-lg-6 py-3" style="margin-top: -3%;">

          <h2 class="title-section">NUESTRA FILOSOFÍA</h2>

          <p style="text-align: justify">Generar un marco de confianza con el cliente y convertirnos en su socio tecnológico para ayudar a
            consolidar el crecimiento de su negocio y conseguir el éxito para su empresa.</p>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" style="margin-top: -12%;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <div class="about-img">
            <img class="img10" src="<?php echo e(asset('assets/img/equipo.jpg')); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3">
          <div class="about-img">
            <img class="img10" src="<?php echo e(asset('assets/img/filosofia.jpg')); ?>" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dev\laravel\allgroup-app\resources\views/about.blade.php ENDPATH**/ ?>