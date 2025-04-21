

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="<?php echo e(asset('assets/img/bg_image_1.jpg')); ?>" alt="">
                <div class="img-caption">
                    <h2 style="background-color: rgba(0, 54, 99, 0.5);">ESPECIALISTAS EN HERRAMIENTAS
                        TECNOLÓGICAS</h2>
                    <h4 style="background-color: rgba(255, 255, 255, 0.5);">CONOCER MAS INFORMACIÓN</h4>
                    <!-- <a href="<?php echo e(url('/coreplus')); ?>" class="btn btn-outline-light btn-three" style="margin: 1%; margin-left: -77%;">COREPLUS</a>
                    <br>
                    <a href="<?php echo e(url('/lims')); ?>" class="btn btn-outline-light btn-three" style="margin: 1%; margin-left: -43%;">Licenciamiento y servicios laboratorios-LIMS</a>
                    <br>
                    <a href="<?php echo e(url('/pqrs')); ?>" class="btn btn-outline-light btn-three" style="margin: 1%; margin-left: -55%;">Licenciamiento y servicios PQRS</a>
                    <br>
                    <a href="<?php echo e(url('/gestion')); ?>" class="btn btn-outline-light btn-three" style="margin: 1%; margin-left: -41%; " data-aos="fade-up" data-aos-delay="600">Licenciamiento y servicios gestión documental</a>
                
                -->
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

<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="http://allgrouptechnology.com/wp-content/uploads/2020/03/3.jpg" alt="">
                <div class="img-caption">
                    <h1 class="mb-4">Coreplus</h1>
                    <a href="<?php echo e(url('/coreplus')); ?>" class="btn btn-outline-light">Más información</a>
                </div>
            </div>
            <div class="hero-carousel-item">
                <img src="http://allgrouptechnology.com/wp-content/uploads/2020/03/9.jpg" alt="">
                <div class="img-caption">
                    <h1 class="mb-4">Licenciamiento y servicios laboratorios-LIMS</h1>
                    <a href="<?php echo e(url('/lims')); ?>" class="btn btn-outline-light">Más información</a>
                </div>
            </div>
            <div class="hero-carousel-item">
                <img src="http://allgrouptechnology.com/wp-content/uploads/2020/03/10.jpg" alt="">
                <div class="img-caption">
                    <h1 class="mb-4">Licenciamiento y servicios PQRS</h1>
                    <a href="<?php echo e(url('/pqrs')); ?>" class="btn btn-outline-light">Más información</a>
                </div>
            </div>
            <div class="hero-carousel-item">
                <img src="http://allgrouptechnology.com/wp-content/uploads/2020/03/17.jpg" alt="">
                <div class="img-caption">
                    <h1 class="mb-4">Licenciamiento y servicios gestion documental</h1>
                    <a href="<?php echo e(url('/gestion')); ?>" class="btn btn-outline-light">Más información</a>
                </div>
            </div>
        </div>
    </div> <!-- .slider-wrapper -->
</div> <!-- .page-banner -->

<div class="page-section">
    <div class="container">
        <div class="text-center">
            <h2 class="title-section mb-3">CONTÁCTENOS</h2>
            <p>Déjanos tus datos y en breve un asesor se comunicará contigo.</p>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <form action="<?php echo e(route('mail.store')); ?>" class="form-contact" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-6 py-2">
                            <label for="name" class="fg-grey">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre..">
                        </div>
                        <div class="col-sm-6 py-2">
                            <label for="email" class="fg-grey">Correo</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el correo..">
                        </div>
                        <div class="col-12 py-2">
                            <label for="subject" class="fg-grey">Asunto</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Ingrese el asunto..">
                        </div>
                        <div class="col-12 py-2">
                            <label for="message" class="fg-grey">Mensaje</label>
                            <textarea id="message" rows="8" class="form-control" name="message" placeholder="Ingrese el mensaje.."></textarea>
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
                            <button type="submit" class="btn btn-outline-primary  px-5 button32" id="boton">Enviar mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

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
                <img src="<?php echo e(asset('assets/img/clients/sinergy.png')); ?>" alt="" style="margin: 20px 0px 0px 0px;">
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
                <img src="<?php echo e(asset('assets/img/clients/luma.png')); ?>" alt="">
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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tecnología_Servicios_y_Outsourcing\resources\views/home.blade.php ENDPATH**/ ?>