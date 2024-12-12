<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Program Pembelajaran - TK Islam Kinasih</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

        <?php echo $__env->make('css_in_view.aktivitas_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
    <?php echo $__env->make('partials.adminnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php if(session('success')): ?>
        <script>
            Swal.fire(
                'Berhasil!',
                '<?php echo e(session('success')); ?>',
                'success'
            );
        </script>
    <?php endif; ?>

    <div class="container my-5">
        <h2>Program Pembelajaran</h2>
        <p>"Kami menyediakan berbagai program pembelajaran untuk mendukung perkembangan anak secara menyeluruh."</p>
        
        <h3>Kegiatan Harian</h3>
        <div class="accordion" id="dailyActivitiesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRegular">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegular" aria-expanded="true" aria-controls="collapseRegular">
                        Reguler (07.00 – 11.15 WIB)
                    </button>
                </h2>
                <div id="collapseRegular" class="accordion-collapse collapse show" aria-labelledby="headingRegular" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul>
                            
                            <?php $__currentLoopData = $reguler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($aktivitas->nama_aktivitas); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingHalfDay">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalfDay" aria-expanded="false" aria-controls="collapseHalfDay">
                        Half Day (07.00 – 13.00 WIB)
                    </button>
                </h2>
                <div id="collapseHalfDay" class="accordion-collapse collapse" aria-labelledby="headingHalfDay" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul>
                            
                            <?php $__currentLoopData = $halfDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($aktivitas->nama_aktivitas); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFullDay">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFullDay" aria-expanded="false" aria-controls="collapseFullDay">
                        Full Day (07.00 – 17.00 WIB)
                    </button>
                </h2>
                <div id="collapseFullDay" class="accordion-collapse collapse" aria-labelledby="headingFullDay" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul>
                            
                            <?php $__currentLoopData = $fullDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($aktivitas->nama_aktivitas); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/admin/aktivitas/aktivitas.blade.php ENDPATH**/ ?>