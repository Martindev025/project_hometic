

<?php $__env->startSection('title', 'Aliados'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home' )); ?>">Aliados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Info</li>
          </ol>
        </nav>
        <h1 class="fg-white text-center">Nuestros Aliados</h1>
      </div>
    </div>
  </div>
</div> <!-- .page-banner -->

<div class="page-section">
  <div class="container">
    <div class="row justify-content-center mt-2">
      <div class="col-lg-8">
        <form action="<?php echo e(url('/cons')); ?>" class="form-contact" >
          <?php echo csrf_field(); ?>
          
        </form>
      </div>
    </div>

  </div> <!-- .container -->
</div> <!-- .page-section -->

<div class="page-section" style="margin-top: -170px">
  <div class="container">
    <div class="row justify-content-center">
      <div class="page-section">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="title-section mb-3">ALIADOS</h2>
                <p>Estos son nuestros más fieles aliados.</p>
            </div>
            <div class="row row-cols-md-3 row-cols-lg-3 justify-content-center text-center">
                <div class="py-3 px-1">
                    <img src="<?php echo e(asset('assets/img/clients/2.png')); ?>" alt="">
                </div>
                <div class="py-3 px-5" style="margin-top: 2%;">
                    <img src="<?php echo e(asset('assets/img/clients/3.png')); ?>" alt="">
                </div>
                <div class="py-3 px-5">
                    <img src="<?php echo e(asset('assets/img/clients/1.png')); ?>" alt="">
                </div>
                <div class="py-3 px-1">
                    <img src="<?php echo e(asset('assets/img/clients/4.png')); ?>" alt="">
                </div>
    
            </div>
        </div> <!-- .container-fluid -->
     
    </div> <!-- .page-section -->
    </div>

  </div> <!-- .container -->
</div> <!-- .page-section -->







<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dev\Front\laravel\allgroup-app\resources\views/aliados.blade.php ENDPATH**/ ?>