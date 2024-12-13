<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Aktivitas</title>
    <link rel="icon" href="<?php echo e(asset('images/LogoTK.jpg')); ?>" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #85C7B3 0%, #68A895 100%);
            color: #333;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #4F998A;
        }

        .btn-primary {
            background-color: #4F998A;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3B7F6F;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container">
        
        <h1>Edit Aktivitas</h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('admin.aktivitas.update', $aktivitas->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nama_aktivitas" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_aktivitas" name="nama_aktivitas" value="<?php echo e($aktivitas->nama_aktivitas); ?>" >
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Tipe Aktivitas</label>
                <select id="tipe" name="tipe" class="form-select" >
                    <option value="Reguler" <?php echo e(old('tipe', $aktivitas->tipe) == 'Reguler' ? 'selected' : ''); ?>>Reguler</option>
                    <option value="Half Day" <?php echo e(old('tipe', $aktivitas->tipe) == 'Half Day' ? 'selected' : ''); ?>>Half Day</option>
                    <option value="Full Day" <?php echo e(old('tipe', $aktivitas->tipe) == 'Full Day' ? 'selected' : ''); ?>>Full Day</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="urutan" class="form-label">Urutan</label>
                <input type="number" name="urutan" class="form-control" value="<?php echo e($aktivitas->urutan); ?>" >
            </div>
            

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('admin.aktivitas.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/admin/aktivitas/edit.blade.php ENDPATH**/ ?>