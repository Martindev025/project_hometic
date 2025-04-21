

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
                <h1 class="fg-white text-center"><?php echo e(__('validation.support.title')); ?></h1>
            </div>
        </div>
    </div>
</div> 
<section id="service-ticket" class="service-ticket" >
    <div class="container">
        <div class="section-ticket">
    
            <h2 style="font-size: 55px;"><?php echo e(__('validation.request.title')); ?></h2>
            <p class="space"><?php echo e(__('validation.request.text-title')); ?></p> 
    
    <!-- Que ofrecemos -->
<section id="datos" class="d-flex flex-column align-items-center justify-content-center" style="background-size: cover; padding: 0; margin: 0; padding-bottom: 50px;">
    <div class="">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <a href="http://192.168.10.115" target="_blank" class="icon-box rgba-icon" style="text-decoration: none; color: inherit; ">
                        <i class="fa-solid fa-magnifying-glass style-icons"></i>
                        <h4 class="title" style="font-size: 35px; font-weight: 600;"><?php echo e(__('validation.request.consult')); ?></h4>
                    </a>
                </div>
        
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <a href="http://192.168.10.115" target="_blank" class="icon-box rgba-icon" style="text-decoration: none; color: inherit;">
                        <i class="fa-regular fa-user style-icons"></i>
                        <h4 class="title" style="font-size: 35px; font-weight: 600;"><?php echo e(__('validation.request.generate')); ?></h4>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <a href="http://192.168.10.115" target="_blank" class="icon-box rgba-icon" style="text-decoration: none; color: inherit;">
                        <i class="fa-regular fa-paste style-icons"></i>
                        <h4 class="title" style="font-size: 35px; font-weight: 600;"><?php echo e(__('validation.request.pqr')); ?></h4>
                    </a>
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hometic\resources\views/tickets.blade.php ENDPATH**/ ?>