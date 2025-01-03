<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Data PPDB</title>
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
        <h1>Edit Data PPDB</h1>
        <form action="<?php echo e(route('ppdb.update', $ppdb->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
    
            <!-- Contoh input form -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($ppdb->nama); ?>" >
            </div>
    
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" >
                        <option value="Laki-laki" <?php echo e(old('jenis_kelamin', $ppdb->jenis_kelamin) == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo e(old('jenis_kelamin', $ppdb->jenis_kelamin) == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="tempat_lahir" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo e($ppdb->tempat_lahir); ?>" >
            </div>

            <div class="mb-3">
                <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
                <input type="nama_orang_tua" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="<?php echo e($ppdb->nama_orang_tua); ?>" >
            </div>

            <div class="mb-3">
                <label for="no_telepon" class="form-label">Nomor Telepon</label>
                <input type="no_telepon" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo e($ppdb->no_telepon); ?>" >
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" value="<?php echo e($ppdb->alamat); ?>" >
            </div>
    
            <!-- Tambahkan input lainnya sesuai dengan kolom di tabel -->
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body><?php /**PATH C:\Users\ziyad\Downloads\finalproject\UAS-WebProg\resources\views/admin/ppdb/edit.blade.php ENDPATH**/ ?>