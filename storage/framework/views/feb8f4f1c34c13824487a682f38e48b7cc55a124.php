

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>

<!-- Banner Index -->
<div class="banner-container-acerca">
    <img class="banner-img" src="<?php echo e(asset('assets/img/background-index.png')); ?>" alt="Banner de Inicio">
    <div class="banner-overlay"></div>
    <div class="banner-title-acerca">
        <?php echo trans('validation.soft-pre.title'); ?>

   </div>
</div>

<!-- Descubre -->

<section class="preservacion-software">
<h2><?php echo e(__('validation.soft-pre.ise')); ?></h2>
        <div class="preservacion">
            <div class="texto">

                <h3><?php echo trans('validation.soft-pre.ise-subtitle'); ?></h3>
                
                <div class="linea"></div>
                <p><?php echo e(__('validation.soft-pre.ise-text')); ?></p>
            </div>
            <img src="<?php echo e(asset('assets/img/cloud-preservacion.png')); ?>" alt="Software de gestión documental">
        </div>
    </section>

    <!-- Caracteristicas principales -->

    <section class="caracteristicas">
    <h2><?php echo e(__('validation.soft-pre.principal')); ?></h2>
    <div class="fila">
        <div class="contenedor-digital">
            <h3><?php echo e(__('validation.soft-pre.principal-subtitle')); ?></h3>
            <div class="linea"></div>
            <p><?php echo e(__('validation.soft-pre.principal-text')); ?></p>
        </div>
        <div class="contenedor-digital">
            <h3><?php echo e(__('validation.soft-pre.principal-subtitle-2')); ?></h3>
            <div class="linea"></div>
            <p><?php echo e(__('validation.soft-pre.principal-text-2')); ?></p>
        </div>
        <div class="contenedor-digital">
            <h3><?php echo e(__('validation.soft-pre.principal-subtitle-3')); ?></h3>
            <div class="linea"></div>
            <p><?php echo e(__('validation.soft-pre.principal-text-3')); ?></p>
        </div>
    </div>
    <div class="fila-abajo">
        <div class="contenedor-digital">
            <h3><?php echo e(__('validation.soft-pre.principal-subtitle-4')); ?></h3>
            <div class="linea"></div>
            <p><?php echo e(__('validation.soft-pre.principal-text-4')); ?></p>
        </div>
        <div class="contenedor-digital">
            <h3><?php echo e(__('validation.soft-pre.principal-subtitle-5')); ?></h3>
            <div class="linea"></div>
            <p><?php echo e(__('validation.soft-pre.principal-text-5')); ?></p>
        </div>
    </div>
</section>

<!-- brochure -->
<section class="transforma-digital">
    <div class="contenedor-transforma">
        <h2><?php echo e(__('validation.soft-pre.transform')); ?></h2>
        <p><?php echo trans('validation.soft-pre.transform-text'); ?></p>

        <a href="<?php echo e(asset('assets/HT preservación digital.pdf')); ?>" class="btn-transforma" download><?php echo e(__('validation.soft-pre.down')); ?></a>
    </div>
</section>

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
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hometic\resources\views/software-pre.blade.php ENDPATH**/ ?>