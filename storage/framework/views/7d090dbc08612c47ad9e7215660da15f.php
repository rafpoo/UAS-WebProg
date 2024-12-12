<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Acara</title>
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

    <?php if(session('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '<?php echo e(session('success')); ?>',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>
    <?php if($errors->has('photo')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo e($errors->first('photo')); ?>',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>
    <div class="container">
        <h1>Tambah Acara</h1>
        <form action="<?php echo e(route('admin.acara.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Nama</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan nama acara" required>
            </div>

            <div class="mb-3">
                <label for="descriptions" class="form-label">Deskripsi Acara</label>
                <textarea class="form-control" id="descriptions" name="descriptions" rows="4" 
                          placeholder="Masukkan deskripsi acara" required></textarea>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar (Ukuran Max 2MB)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="validateFileSize(this)" required>
                
            </div>

            <button type="submit" class="btn btn-primary w-100">Tambahkan</button>
        </form>
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('js/validateImg.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/admin/acara/create.blade.php ENDPATH**/ ?>