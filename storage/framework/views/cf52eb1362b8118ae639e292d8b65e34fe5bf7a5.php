

<?php $__env->startSection('title', 'Monitor tracker'); ?>

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
                <h1 class="fg-white text-center">MONITOR TRACKER</h1>
            </div>
        </div>
    </div>
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">

                <h2 class="title-section">Monitor Tracker</h2>

                <p Style="text-align: justify">Monitor tracker, nuestra solución de monitoreo,
                    ofrece análisis e información profundos para ayudar
                    a medir y optimizar la productividad entre las personas,
                    los procesos y la tecnología. Nuestro proceso seguro y
                    eficiente de recopilación y entrega de datos funciona para
                    brindar visibilidad inmediata y análisis avanzados mientras
                    mantiene sus datos protegidos, encriptados y privados.
                    El agente de Monitor tracker, funciona en equipos de cómputo
                    fijos o en escritorios virtuales.
                </p>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32"  src="../assets/img/2.jpg" alt="">
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->
<div class="page-section">
    <div class="container">
        <h2 class="title-section">Funciones:</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="../assets/img/Imagen3.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="../assets/img/Imagen4.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="../assets/img/Imagen5.png" alt="">
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->
<div class="page-section">
    <div class="container">
        <h2 class="title-section">Solicitar DEMO</h2>
        <form action="<?php echo e(route('cotizacion.store')); ?>" class="form-contact" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-6 py-2">
                    <label for="name" class="">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre..">
                </div>
                <div class="col-sm-6 py-2">
                    <label for="name" class="">Apellido</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el apellido..">
                </div>
                <div class="col-sm-6 py-2">
                    <label class="">Empresa</label>
                    <input type="text" class="form-control" id="name" name="empresa" placeholder="Ingrese la empresa..">
                </div>
                <div class="col-sm-6 py-2">
                    <label for="number" class="">Numero de telefono</label>
                    <input type="text" class="form-control" id="email" name="numero" placeholder="Ingrese el numero telefonico..">
                </div>
                <div class="col-12 py-2">
                    <label for="subject" class="">Correo</label>
                    <input type="text" class="form-control" id="subject" name="correo" placeholder="Ingrese el Correo..">
                </div>
                <div class="col-12 py-2">
                    <select class="custom-select" id="inputGroupSelect04" name="select">
                        <option selected>Colombia</option>
                        <option value="1">Chile</option>
                        <option value="2">Ecuador</option>
                        <option value="3">Aregentina</option>
                    </select>
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
                    <button type="submit" class="btn btn-outline-primary px-5 button32" id="boton">Enviar solicitud</button>
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dev\Front\laravel\allgroup-app\resources\views/monitor.blade.php ENDPATH**/ ?>