

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>

<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url('<?php echo e(asset('assets/img/bg_image_3.jpg')); ?>')">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('validation.general.init')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('validation.general.info')); ?></li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center"><?php echo e(__('validation.gest.title')); ?></h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->



<!-- Inicicio de columnas -->
            <div class="page-section-documental">
    <div class="container">
    <div class="row justify-content-center">
      <div class="page-section">
        <div class="container-fluid">
            <div class="text-center">
<br>              
                <h2 class="title-section mb-3"><?php echo e(__('validation.gest.funcion')); ?></h2>
                <p><?php echo e(__('validation.gest.funcion-text')); ?></p>
            </div>
        </div>
      </div>
    </div>


        <!-- Columnas -->
        <div class="row align-items-start align-items-stretch d-flex">
            <!-- Columna 1 -->
            <div class="col-lg-3 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/gestion/planeacion.jpg')); ?>" alt="Imagen 1" class="img-fluid mb-3">
                    <h5 class="title-section"><?php echo e(__('validation.gest.plan')); ?></h5>
                    <p style="text-align: justify"><?php echo e(__('validation.gest.plan-text')); ?></p>
                    <a href="#" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.gest.more')); ?></a>
                </div>
            </div>
            <!-- Fin de Columna 1 -->

            <!-- Columna 2 -->
            <div class="col-lg-3 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/gestion/gestion-tramite.jpg')); ?>" alt="Imagen 2" class="img-fluid mb-3">
                    <h4 class="title-section"><?php echo e(__('validation.gest.tram')); ?></h4>
                    <p style="text-align: justify"><?php echo e(__('validation.gest.tram-text')); ?></p>
                    <a href="#" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.gest.more')); ?></a>
                </div>
            </div>
            <!-- Fin de Columna 2 -->

            <!-- Columna 3 -->
            <div class="col-lg-3 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/gestion/documentos.jpg')); ?>" alt="Imagen 3" class="img-fluid mb-3">
                    <h4 class="title-section"><?php echo e(__('validation.gest.document')); ?></h4>
                    <p style="text-align: justify"><?php echo e(__('validation.gest.document-text')); ?></p>
                    <a href="#" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.gest.more')); ?></a>
                </div>
            </div>
            <!-- Fin de Columna 3 -->

            <!-- Columna 4 -->
            <div class="col-lg-3 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/gestion/transferencia.jpg')); ?>" alt="Imagen 4" class="img-fluid mb-3">
                    <h4 class="title-section"><?php echo e(__('validation.gest.transfer')); ?></h4>
                    <p style="text-align: justify"><?php echo e(__('validation.gest.transfer-text')); ?></p>
                    <a href="#" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.gest.more')); ?></a>
                </div>
            </div>
            <!-- Fin de Columna 4 -->

            <!-- Columna 5 -->
            <div class="col-lg-3 py-3 mx-auto">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/gestion/organizacion.jpg')); ?>" alt="Imagen 5" class="img-fluid mb-3">
                    <h4 class="title-section"><?php echo e(__('validation.gest.orga')); ?></h4>
                    <p style="text-align: justify"><?php echo e(__('validation.gest.orga-text')); ?></p>
                    <a href="#" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.gest.more')); ?></a>
                </div>
            </div>
            <!-- Fin de Columna 5 -->
            
            <!-- Columna 6 -->
            <div class="col-lg-3 py-3 mx-auto">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/gestion/preservacion.jpg')); ?>" alt="Imagen 6" class="img-fluid mb-3">
                    <h4 class="title-section"><?php echo e(__('validation.gest.plaz')); ?></h4>
                    <p style="text-align: justify"><?php echo e(__('validation.gest.plaz-text')); ?></p>
                    <a href="#" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.gest.more')); ?></a>
                </div>
            </div>
            <!-- Fin de Columna 6 -->
        </div>
        <!-- Fin de Columnas -->
    </div> <!-- .container -->
</div>

<!-- Fin de columnas -->



</div>

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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hometic\resources\views/gestiondoc.blade.php ENDPATH**/ ?>