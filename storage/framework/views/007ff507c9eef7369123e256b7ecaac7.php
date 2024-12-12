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
        <h1>Edit Guru</h1>

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

        <form action="<?php echo e(route('admin.guru.update', $teacher->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Nama guru -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($teacher->nama); ?>" required>
            </div>

            <!-- Deskripsi guru -->
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input class="form-control" id="jabatan" name="jabatan" value="<?php echo e($teacher->jabatan); ?>" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_bergabung" class="form-label">Tanggal bergabung</label>
                <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" value="<?php echo e($teacher->tanggal_bergabung); ?>"  required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="date" class="form-control" id="keterangan" name="keterangan"><?php echo e($teacher->keterangan); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Gambar (kosongkan jika tidak ingin mengganti)(Ukuran Max 2MB)</label>
                <img src="<?php echo e(asset('storage/' . $teacher->photo)); ?>" alt="Gambar Saat Ini" style="width: 150px; display: block; margin-bottom: 10px;">
            </div>
            
            <div class="mb-3">
                <input type="file" class="form-control" id="photo" name="photo" accept="photo/*" onchange="validateFileSize(this)">
            </div>
            

            <button type="submit" class="btn btn-primary">Update</button>
        </form><br />
        <form action="<?php echo e(route('admin.guru.photo.destroy', $teacher->id)); ?>" method="POST" style="margin-bottom: 10px;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">
                Hapus Foto Profil
            </button>
        </form>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script src="<?php echo e(asset('js/validateImg.js')); ?>"></script>
</html>
<?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/admin/guru/edit.blade.php ENDPATH**/ ?>