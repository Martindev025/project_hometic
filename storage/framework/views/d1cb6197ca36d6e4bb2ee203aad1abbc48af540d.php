

<?php $__env->startSection('title', 'Tickets'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(<?php echo e(asset('assets/img/bg_image_3.jpg')); ?>);">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tickets</li>
          </ol>
        </nav>
        <h1 class="fg-white text-center">Tickets</h1>
      </div>
    </div>
  </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="text-center">
            <h2 class="title-section mb-3">INICIAR SESIÓN</h2>
            <p>“Si tienes un requerimiento, inicia sesión para diligenciarlo”</p>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <form action="<?php echo e(route('mail.store')); ?>" class="form-contact" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        
                        <div class="col-12 py-2">
                            <label for="subject" class="fg-grey">Usuario</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Ingrese el usuario..">
                        </div>       
                        <div class="col-12 py-2">
                            <label for="subject" class="fg-grey">Contraseña</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Ingrese el contraseña..">
                        </div>                   
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-outline-primary  px-5 button32" id="boton">Ingresar</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dev\laravel\allgroup-app\resources\views/tickets.blade.php ENDPATH**/ ?>