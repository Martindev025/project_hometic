

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>

<!-- Banner Index -->
<div class="banner-container">
    <img class="banner-img" src="<?php echo e(asset('assets/img/background-index.png')); ?>" alt="Banner de Inicio">
    <div class="banner-overlay"></div> <!-- Capa semitransparente -->
    <div class="banner-title">
        <?php echo e(__('validation.home.title')); ?>

    </div>
    <div class="banner-text">
        <h2 class="text-index-h2"><?php echo trans('validation.home.title-text'); ?></h2>
    </div>
</div>
<!-- Fin Banner Index -->

<!-- Seccion acerca de -->
<section class="acerca-index">
        <div class="contenedor-index">
            <img src="<?php echo e(asset('assets/img/negocios-index.png')); ?>" alt="Acerca de Nosotros">
            <div class="texto-index">
                <h1><?php echo e(__('validation.home.about')); ?></h1>
                <p><?php echo trans('validation.home.about-text'); ?></p>
                <button onclick="window.location.href = '<?php echo e(route('acerca')); ?>'"><?php echo e(__('validation.home.more')); ?></button>
            </div>
        </div>
    </section>

    <!-- Nuestros servicios -->
    <section class="nuestros-servicios">
        <h1><?php echo e(__('validation.home.our')); ?></h1>
        <div class="servicio reverso">
            <div class="texto">
                <h2><?php echo e(__('validation.home.our-subtitle')); ?></h2>
                <div class="linea"></div>
                <p><?php echo e(__('validation.home.our-text')); ?></p>
                <button onclick="window.location.href = '<?php echo e(route('consultoria')); ?>'"><?php echo e(__('validation.home.more')); ?></button>
            </div>
            <img src="<?php echo e(asset('assets/img/preservacion-index.png')); ?>" alt="Software de gestión documental">
        </div>
        <div class="servicio">
            <img src="<?php echo e(asset('assets/img/documental-index.png')); ?>" alt="Software de preservación digital">
            <div class="texto">
                <h2><?php echo e(__('validation.home.our-subtitle-2')); ?></h2>
                <div class="linea"></div>
                <p><?php echo e(__('validation.home.our-text-2')); ?></p>
                <button onclick="window.location.href = '<?php echo e(route('software-pre')); ?>'"><?php echo e(__('validation.home.more')); ?></button>
            </div>
        </div>
    </section>

    <!-- Otros servicios -->
<h2 class="box-ti"><?php echo e(__('validation.home.other')); ?></h2>
<div class="unique-container">
    <div class="unique-box">
        <div class="unique-image">
            <img src="<?php echo e(asset('assets/img/consultoria-index.png')); ?>" alt="Imagen 1">
            <div class="unique-overlay">
                <h2><?php echo e(__('validation.home.other-text')); ?></h2>
 
                <a class="fancy" href="<?php echo e(route('gestiondoc')); ?>">
                    <span class="top-key"></span>
                    <span class="text"><?php echo e(__('validation.home.more')); ?></span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                  </a>
            </div>
        </div>
    </div>
    <div class="unique-box">
        <div class="unique-image">
            <img src="<?php echo e(asset('assets/img/organizacion-index.png')); ?>" alt="Imagen 2">
            <div class="unique-overlay">
                <h2><?php echo e(__('validation.home.other-text-2')); ?></h2>
                <a class="fancy" href="<?php echo e(route('organizacion')); ?>">
                    <span class="top-key"></span>
                    <span class="text"><?php echo e(__('validation.home.more')); ?></span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                  </a>
            </div>
        </div>
    </div>
    <div class="unique-box">
        <div class="unique-image">
            <img src="<?php echo e(asset('assets/img/custodia-index.png')); ?>" alt="Imagen 3">
            <div class="unique-overlay">
                <h2><?php echo e(__('validation.home.other-text-3')); ?></h2>
                <a class="fancy" href="<?php echo e(route('custodia')); ?>">
                    <span class="top-key"></span>
                    <span class="text"><?php echo e(__('validation.home.more')); ?></span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                  </a>
            </div>
        </div>
    </div>
</div>

  <!-- .page-section -->

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">

          </div>
        </div>
        <div class="col-lg-6 py-3">
          <div class="about-img">
          </div>
        </div>
      </div>
    </div> <!-- .container -->


<!-- contador inicio -->
<section id="counts" class="counts">
    <div class="container">
        <!-- Fila para el contador y el contenido adicional -->
        <div class="row justify-content-center">
            <!-- Columna para el nuevo elemento a la izquierda -->
            <div class="col-lg-4 col-md-4 mt-5 mt-lg-0">
                <div class="count-box">

                    <!-- Texto del nuevo elemento -->
                    <h2></h2>
                    <!-- Imagen del contenido adicional -->
                    <img src="<?php echo e(asset('assets/img/iconos/south-america-index.png')); ?>" alt="Descripción de la imagen 2" style="max-width: 25%;">
                    <h6><?php echo e(__('validation.home.level')); ?></h6>
                    <h4><?php echo e(__('validation.home.national')); ?></h4>
                </div>
            </div>
            <!-- Columna para el contador -->
            <div class="col-lg-4 col-md-4 mt-5 mt-lg-0">
                <div class="count-box">
                    <!-- Icono del contador -->
                    <i class="fas fa-award"></i>
                    <!-- Imagen del contenido adicional -->
                    <img src="<?php echo e(asset('assets/img/iconos/eye-index.png')); ?>" alt="Descripción de la imagen 2" style="max-width: 30%;">
                    <span><h6><a><?php echo e(__('validation.home.visits')); ?></a></h6></span>
                    <?php
                        $archivo = "archivo.txt";
                        $contador = intval(trim(file_get_contents($archivo)));

                        $file = fopen($archivo, 'w');
                        fwrite($file, $contador + 1 . PHP_EOL);
                        // $file = fopen($archivo, 'r');
                        // echo fgets($file);
                        // fclose($file);
                    ?>
                    <!-- Cantidad de visitas -->
                    <span style="margin-left: 5px"></span> <a> <?php $file = fopen($archivo, 'r'); echo fgets($file); fclose($file); ?></a>
                </div>
            </div>
            <!-- Columna para el contenido adicional a la derecha -->
            <div class="col-lg-4 col-md-4 mt-5 mt-lg-0">
                <div class="count-box">
                    <h2><?php echo e(__('validation.home.than')); ?></h2>
                    <!-- Imagen del contenido adicional -->
                    <img src="<?php echo e(asset('assets/img/iconos/group-index.png')); ?>" alt="Descripción de la imagen 2" style="max-width: 30%;">
                    <h4><?php echo e(__('validation.home.ages')); ?></h4>
                    <h6><?php echo e(__('validation.home.exp')); ?></h6>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<!-- contacto -->
<section id="contact" class="contact">
    <div class="espacio1234">
    <div class="container">
    <div class="section-title">

    <h2 class="title-section-contact" style="text-align: center;"><?php echo e(__('validation.contact.title')); ?></h2>

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

        <h4><?php echo e(__('validation.contact.direc')); ?></h4>

        <p>Cl 98ª #51-37  </p>
        <p><?php echo e(__('validation.contact.edif')); ?></p>
        <p>Bogotá</p>

    </div>
<br>
        <div class="phone">
        <i class="fa-solid fa-phone-volume"></i>

        <h4><?php echo e(__('validation.contact.phone')); ?></h4>

        <p>323 6567087</p>



    </div>
<br>
        <div class="email">
        <i class="fa-solid fa-envelope-circle-check"></i>

        <h4><?php echo e(__('validation.contact.email')); ?></h4>

        <p>info@hometicsa.com</p>

        </div>
    </div>
</div>

        <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="<?php echo e(route('mail.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="<?php echo e(__('validation.contact.name')); ?>" required>
            </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">

                    <input type="text" class="form-control" name="phone" id="subject"
                        placeholder="<?php echo e(__('validation.contact.phone')); ?>" required>
            </div>
        </div>
                <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(__('validation.contact.mail')); ?>" required>
            </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="<?php echo e(__('validation.contact.message')); ?>" required></textarea>
            </div>

                <div class="text-center">

                    <button type="submit" class="btn btn-success btn-xl mt-3"><?php echo e(__('validation.contact.send')); ?></button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hometic\resources\views/home.blade.php ENDPATH**/ ?>