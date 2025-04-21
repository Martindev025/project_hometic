

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
                <h1 class="fg-white text-center"><?php echo e(__('validation.help.title')); ?></h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
<!-- Incio box -->

<div class="page-section1">
    <div class="container-fluid">
        <!-- Columnas -->
        <div class="row align-items-start align-items-stretch d-flex">
            <!-- Columna 1 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/mesa-ayuda.png')); ?>" alt="Imagen 1" class="img-fluid mb-3 mx-auto d-block" style="width: 128px;">
                    <h5 class="title-section text-center"><?php echo e(__('validation.help.help')); ?></h5>
                    <p style="text-align: justify"><?php echo trans('validation.help.help-text'); ?></p>
                    <a href="soporte.php" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.help.more')); ?></a>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/mesa-preventivo.png')); ?>" alt="Imagen 2" class="img-fluid mb-3 mx-auto d-block" style="width: 128px;">
                    <h5 class="title-section text-center"><?php echo e(__('validation.help.prevent')); ?></h5>
                    <p style="text-align: justify"><?php echo trans('validation.help.prevent-text'); ?></p>
                    <a href="servicio2.php" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.help.more')); ?></a>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-lg-4 py-3">
                <div class="border rounded p-3 h-100">
                    <img src="<?php echo e(asset('assets/img/mesa-remoto.png')); ?>" alt="Imagen 3" class="img-fluid mb-3 mx-auto d-block" style="width: 128px;">
                    <h5 class="title-section text-center"><?php echo e(__('validation.help.support')); ?></h5>
                    <p style="text-align: justify"><?php echo e(__('validation.help.support-text')); ?></p>
                    <?php echo e(__('validation.help.support-text-2')); ?>


                    <a href="servicio3.php" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;"><?php echo e(__('validation.help.')); ?><?php echo e(__('validation.help.more')); ?></a>
                </div>
            </div>
        </div>
    </div>
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hometic\resources\views/servicios.blade.php ENDPATH**/ ?>