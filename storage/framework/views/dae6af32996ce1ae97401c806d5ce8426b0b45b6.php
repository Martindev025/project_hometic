

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="<?php echo e(asset('assets/img/header.png')); ?>" alt="">
                <div class="img-caption">
                    <h2 style="background-color: rgba(0, 54, 99, 0.5);">ESPECIALISTAS EN HERRAMIENTAS
                        TECNOLÓGICAS</h2>
                    <h4 style="background-color: rgba(255, 255, 255, 0.5);">CONOCER MAS INFORMACIÓN</h4>
                </div>
            </div>
        </div>
    </div> <!-- .slider-wrapper -->
</div> <!-- .page-banner -->
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <h2 class="title-section">Quiénes Somos</h2>

                <p style="text-align: justify">Nuestro objetivo es crear soluciones caracterizadas por su innovación, creatividad y calidad
                    que permitan
                    a los clientes mejorar sus procesos de negocio. Para ello contamos con un equipo joven y
                    experimentado
                    dispuesto a llegar donde las necesidades de nuestros clientes exijan.</p>

                <a href="<?php echo e(url('/about')); ?>" class="btn btn-primary mt-4 btn-two" style="background-color: #00abd4;">ACERCA DE
                    NOSOTROS</a>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img class="img32" src="<?php echo e(asset('assets/img/1.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .page-section -->

<!-- contador inicio -->
<section id="counts" class="counts">
            <div class="container">

                <div class="row" style="justify-content: center;">

                    <div class="col-lg-6 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <spa"></span> <h6><a>Visitas:</a></h6>

                            <?php
                                $archivo = "archivo.txt";
                                $contador = intval(trim(file_get_contents($archivo)));

                                $file = fopen($archivo, 'w');
                                fwrite($file, $contador + 1 . PHP_EOL);

                                // $file = fopen($archivo, 'r');
                                // echo fgets($file);
                                // fclose($file);
                                ?>
                            <span style="margin-left: 5px"></span> <a> <?php $file = fopen($archivo, 'r'); echo fgets($file); fclose($file); ?></a>
                            </div>
                      </div>
                        </div>
                        </div>
</section>

<!-- contador Fin -->

<!-- Pruebas alidos -->
<div class="clients-container">
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/2.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/3.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/1.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/4.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/aldesarrollo.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/comsistelco.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/aranda.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/impretics.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/redcompu.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/dinamica11.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/acronis.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/kaspersky.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/easycloud.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/hostdime.png')); ?>" alt="">
    </div>
    <div class="client-logo">
        <img src="<?php echo e(asset('assets/img/clients/microsoft.png')); ?>" alt="">
    </div>

</div>
    <!-- Añade el resto de tus logos aquí -->
    
</div>

<!-- Fin pruebas aliados -->

<!-- .page-section -->

<div class="page-section">
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="title-section mb-3">ALIADOS</h2>
            <p>Estos son nuestros más fieles aliados.</p>
        </div>
        <div class="row row-cols-md-3 row-cols-lg-3 justify-content-center text-center">
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/2.png')); ?>" alt="" style="height: 100%; margin: 10px 0px 0px 80px">
            </div>
            <div class="py-3 px-5" style="margin-top: 2%;">
                <img src="<?php echo e(asset('assets/img/clients/3.png')); ?>" alt="" style="height: 100%;">
            </div>
            <div class="py-3 px-5">
                <img src="<?php echo e(asset('assets/img/clients/1.png')); ?>" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/4.png')); ?>" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/aldesarrollo.png')); ?>" alt="">
            </div>

            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/comsistelco.png')); ?>" alt="" style="width: 90%; height: 65%; margin: 40px 0px 0px 20px;">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/aranda.png')); ?>" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/impretics.png')); ?>" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/redcompu.png')); ?>" alt="" style= "width: 60%; height: 45%; margin: 40px 0px 0px 20px;">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/dinamica11.png')); ?>" alt="" style= "width: 60%; height: 45%; margin: 40px 0px 0px 20px;">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/acronis.png')); ?>" alt="">
            </div>

            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/kaspersky.png')); ?>" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/easycloud.png')); ?>" alt="" style= "width: 60%; height: 45%; margin: 30px;">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/hostdime.png')); ?>" alt="">
            </div>
            <div class="py-3 px-1">
                <img src="<?php echo e(asset('assets/img/clients/microsoft.png')); ?>" alt="">
            </div>



        </div>
    </div> <!-- .container-fluid -->

</div> <!-- .page-section -->

<!-- contacto nuevo -->
<section id="contact" class="contact">
    <div class="espacio1234">
    <div class="container">
    <div class="section-title">

    <h2 class="title-section-contact" style="text-align: center;">Contactanos</h2>

    </div>
    </div>

    <div>

    </div>

        <div class="container">
            <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                    <i class="fa-solid fa-location-dot"></i>

        <h4>Dirección:</h4>

        <p>Calle 98 A # 51- 72 Bogotá-Colombia</p>
        <p>Edificio Arimetria Oficina 403</p>
        <p>Bogotá</p>

    </div>
<br>
        <div class="phone">
        <i class="fa-solid fa-phone-volume"></i>

        <h4>Teléfonos:</h4>

        <p>+57 (1) 6386460 / (+57) 3183059586</p>



    </div>
<br>
        <div class="email">
        <i class="fa-solid fa-envelope-circle-check"></i>

        <h4>Correo: </h4>

        <p>info@tecsersas.com</p>

        </div>
    </div>
</div>

        <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?php echo e(route('mail.store')); ?>" method="POST" enctype="multipart/form-data">
                <p>
                    <p>
                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="Nombre" required>
            </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">

                    <input type="text" class="form-control" name="phone" id="subject"
                        placeholder="Teléfono" required>
            </div>
        </div>
                <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
            </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
            </div>

                <div class="text-center">

                    <button type="submit" class="btn btn-success btn-xl mt-3">Enviar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<!--  Fin contacto nuevo -->

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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tecser\resources\views/home.blade.php ENDPATH**/ ?>