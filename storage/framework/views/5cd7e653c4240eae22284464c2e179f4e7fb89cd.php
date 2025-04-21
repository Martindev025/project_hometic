

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
                <h1 class="fg-white text-center"><?php echo e(__('validation.monitor.title')); ?></h1>
            </div>s
        </div>
    </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">

            <h2 class="title-section"><?php echo e(__('validation.monitor.title')); ?></h2>

            <p style="text-align: justify"><?php echo e(__('validation.monitor.title-text')); ?></p>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32"  src="<?php echo e(asset('assets/img/nube-bg.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->
<div class="page-section">
    <div class="container">
        <h2 class="title-section"><?php echo e(__('validation.monitor.funtion')); ?></h2>
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="<?php echo e(asset('assets/img/funciones-monitor-1.png')); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="<?php echo e(asset('assets/img/funciones-monitor-2.png')); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="<?php echo e(asset('assets/img/funciones-monitor-3.png')); ?>" alt="">
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hometic\resources\views/monitor.blade.php ENDPATH**/ ?>