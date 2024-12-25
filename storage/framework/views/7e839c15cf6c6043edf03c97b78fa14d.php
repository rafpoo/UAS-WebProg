<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Acara</title>
    <link rel="icon" href="<?php echo e(asset('images/LogoTK.jpg')); ?>" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #85C7B3 0%, #68A895 100%);
            color: white;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #4F998A;
        }

        .navbar-brand img {
            height: 50px;
            /* Adjust logo height */
        }

        .nav-link {
            color: white !important;
        }

        .welcome-section {
            padding: 50px 20px;
            text-align: center;

            border-radius: 10px;
            margin-top: 30px;
        }

    .menu-icon {
      display: inline-block;
      margin: auto auto;
    }

    .menu-icon-bar {
      width: 25px;
      height: 3px;
      background-color: rgba(255,255,255,1.0);
      margin: 4px 0;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <h1>Edit Acara</h1>

        <!-- Tampilkan error jika ada -->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('admin.acara.update', $event->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Nama Acara -->
            <div class="mb-3">
                <label for="title" class="form-label">Nama</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($event->title); ?>" >
            </div>

            <!-- Deskripsi Acara -->
            <div class="mb-3">
                <label for="descriptions" class="form-label">Deskripsi Acara</label>
                <textarea class="form-control" id="descriptions" name="descriptions" ><?php echo e($event->descriptions); ?></textarea>
            </div>

            <!-- Tanggal -->
            <div class="mb-3">
                <label for="date" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo e($event->date); ?>" >
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label for="image" class="form-label">Gambar (kosongkan jika tidak ingin mengganti)(Ukuran Max 2MB)/label>
                <img src="<?php echo e(asset('storage/' . $event->image)); ?>" alt="Gambar Saat Ini" style="width: 150px; display: block; margin-bottom: 10px;">
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="validateFileSize(this)">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('admin.acara.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script src="<?php echo e(asset('js/validateImg.js')); ?>"></script>
</html>
<?php /**PATH C:\Users\ziyad\Downloads\finalproject\UAS-WebProg\resources\views/admin/acara/edit.blade.php ENDPATH**/ ?>