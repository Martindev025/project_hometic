

<?php $__env->startSection('title', 'Seguridad'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">info</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">SEGURIDAD</h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  Ups...
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Estamos trabajando para mejorar nuestros servicios.</p>
                    <footer class="blockquote-footer">Pronto estaremos en funcionamiento. <cite title="Source Title">Gracias</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dev\laravel\allgroup-app\resources\views/seguridad.blade.php ENDPATH**/ ?>