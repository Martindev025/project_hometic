

<?php $__env->startSection('title', 'Wen'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">WEN</li>
                    </ol>
                </nav>
                <h1 class="fg-white text-center">WEM</h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">

                <h2 class="title-section">Cree aplicaciones empresariales de misión crítica a una velocidad increíble</h2>

                <p style="text-align: justify">Únase a cientos de clientes entusiastas que construyen,
                    implementan y mantienen aplicaciones modernas y con
                    píxeles perfectos de cualquier complejidad.</p>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="../assets/img/2.jpg" alt="">
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->


<div class="page-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 py-3">

                <div class="about-img1">
                    <img class="img32" src="../assets/img/Imagen6.png" alt="">
                </div>


                <h2 class="title-section">Comience hoy gratis</h2>

                <p style="text-align: justify">Regístrese hoy para obtener una cuenta WEM gratuita
                    y para un curso de capacitación básico en línea WEM
                    gratuito. La academia WEM también ofrece más cursos
                    avanzados de desarrollo e integración en varios formatcos
                    y geografías.</p>
            </div>

        </div>
        <form action="<?php echo e(route('mail.store')); ?>" class="form-contact" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-6 py-2">
                    <label for="name" class="fg-grey">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre..">
                </div>
                <div class="col-sm-6 py-2">
                    <label for="name" class="fg-grey">Apellido</label>
                    <input type="text" class="form-control" id="lastname" name="lasname" placeholder="Ingrese el apellido..">
                </div>
                <div class="col-sm-6 py-2">
                    <label class="fg-grey">Empresa</label>
                    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Ingrese la empresa..">
                </div>
                <div class="col-sm-6 py-2">
                    <label for="number" class="fg-grey">Número de teléfono</label>
                    <input type="text" class="form-control" id="number" name="number" placeholder="Ingrese el número teléfonico..">
                </div>
                <div class="col-12 py-2">
                    <label for="subject" class="fg-grey">Correo</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el Correo..">
                </div>
                <div class="col-12 py-2">
                    <div class="form-check" recua>
                        <input class="form-check-input" type="checkbox" value="" id="test">
                        <label class="form-check-label" for="flexCheckDefault">
                            He leído y acepto la <a href="#">política de privacidad</a>
                        </label>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary px-5" id="boton">Enviar solicitud</button>
                </div>
            </div>
        </form>
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\allgroup\resources\views/wen.blade.php ENDPATH**/ ?>