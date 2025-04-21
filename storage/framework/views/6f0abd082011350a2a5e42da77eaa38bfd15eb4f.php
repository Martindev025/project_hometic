

<?php $__env->startSection('title', 'Costos ABC'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Info</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">COSTOS ABC</h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">

                <h2 class="title-section" Style="text-align: justify">
                    Nuestro software de análisis de costos y rentabilidad
                    permite una trazabilidad completa
                    y precisa de los costos, no alcanzable con planillas
                    de cálculo o su ERP.</h2>


            </div>
            <div class="col-lg-6 py-3">


                <p> Asigne de forma precisa los costos indirectos.</p>
                <p> Conozca cómo los costos asociados a clientes afectan la rentabilidad.</p>
                <p> Encuentre oportunidades de reducción de costos sin pérdida de valor.</p>
                <p> Conozca el costo real de sus productos y servicios para fijar la correcta estructura de precios.</p>
                <form action="<?php echo e(route('cotizacion.store')); ?>" class="form-contact" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary px-5">Solicitar Cotizacion</button>
                    </div>
                </form>    
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->



</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dev\laravel\allgroup-app\resources\views/abc.blade.php ENDPATH**/ ?>