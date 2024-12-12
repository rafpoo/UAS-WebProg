<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih</title>
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
        <h1>Tambah Foto</h1>
        <form action="<?php echo e(route('admin.galeri.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- Contoh input form -->
            <div class="mb-3">
                <label for="nama" class="form-label">Keterangan Foto</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto Profil</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="validateFileSize(this)">
            </div>
    
            <!-- Tambahkan input lainnya sesuai dengan kolom di tabel -->
            
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script>
    function validateFileSize(input) {
        const file = input.files[0];
        if (file.size > 2097152) { // 2 MB
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ukuran file maksimal 2 MB!',
                confirmButtonText: 'OK'
            });
            input.value = ''; // Reset input
        }
    }

</script>
</html>
<?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/admin/galeri/create.blade.php ENDPATH**/ ?>