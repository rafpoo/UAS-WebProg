<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Admin - Data Guru - TK Islam Kinasih</title>
        <link rel="icon" href="<?php echo e(asset('images/LogoTK.jpg')); ?>" type="image/jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <?php echo $__env->make('global_css.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('css_in_view.guru_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

        <div class="container">
            <div class="header">
                <h1>Guru Kami</h1>
                <p>TK Islam Kinasih</p>
                <p>"Guru kami berpendidikan dan penyayang, selalu berdedikasi untuk menginspirasi siswa dengan metode pembelajaran kreatif, serta membentuk karakter positif yang mendukung tumbuh kembang anak secara maksimal."</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
                <a href="<?php echo e(route('admin.guru.create')); ?>" class="btn btn-warning">
                    Tambah Guru Baru
                </a>
            </div>
            <div class="container">
                <div class="staff-profiles">
                    
                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="staff-card">
                            <img src="<?php echo e($teacher->photo ? asset('storage/' . $teacher->photo) : asset('storage/teachers/default-profile.jpg')); ?>" 
                            class="card-img-top img-fluid" 
                            alt="<?php echo e($teacher->nama); ?>" 
                            style="object-fit: cover; height: 300px;"><br /><br />
                            <h2><?php echo e($teacher->nama); ?></h2>
                            <div class="details role" style="color: #ffffff;"><?php echo e($teacher->jabatan); ?></div>
                            <div class="details additional-info" style="color: #ffffff;"><?php echo e($teacher->tanggal_bergabung); ?></div>
                            <div class="experience" style="color: #ffffff;"><?php echo e($teacher->keterangan); ?></div>
                            <div class="d-flex justify-content-between">
                                <!-- Tombol Edit -->
                                <form action="<?php echo e(route('admin.guru.edit', $teacher->id)); ?>" method="GET">
                                    <button type="submit" class="btn btn-warning btn-md">
                                        <i class="bi bi-pencil-square"></i>Edit
                                    </button>
                                </form>
                                
        
                                <!-- Tombol Delete -->
                                <form id="delete-<?php echo e($teacher->id); ?>" action="<?php echo e(route('admin.guru.destroy', $teacher->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo e($teacher->id); ?>)">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script src="<?php echo e(asset('js/confirmDeletion.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/admin/guru/guru.blade.php ENDPATH**/ ?>