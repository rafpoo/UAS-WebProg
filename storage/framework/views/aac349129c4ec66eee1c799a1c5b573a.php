<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
    color: white;
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-attachment: fixed;
    }
    .container {
    background: rgba(255, 255, 255, 0.05); /* Sedikit background transparan */
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 30px;
}
/* Variasi warna untuk elemen lain */
.features .feature {
    background-color: rgba(76, 127, 112, 0.7); /* Sedikit transparan */
    transition: background-color 0.3s ease;
}

.features .feature:hover {
    background-color: rgba(76, 127, 112, 0.9);
}

@media (max-width: 768px) {
    .container {
        padding: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
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
      background-color: rgba(255, 255, 255, 1.0);
      margin: 4px 0;
    }

    .card {
      background-color: #2D6A4F;
      border-radius: 20px;
      padding: 20px;
      color: white;
      text-align: center;
      margin: 20px;
    }

    .card img {
      border-radius: 15px;
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>

  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <div class="container">
  <h1 style="text-align: center;">Event</h1>
  <p style="text-align: center;">
    Event di Taman Kanak-Kanak (TK) merupakan bagian penting<br />
    dari kegiatan sekolah yang dirancang untuk memberikan<br />
    pengalaman belajar yang menyenangkan sekaligus mendukung<br />
    perkembangan anak secara holistik. Berikut adalah contoh<br />
    keterangan mengenai event yang sering diadakan di TK:<br />
    
  </p>
  
  
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card h-100">
                    <!-- Gambar -->
                    <img src="<?php echo e(asset('storage/' . $event->image)); ?>" 
                         class="card-img-top img-fluid" 
                         alt="<?php echo e($event->title); ?>" 
                         style="object-fit: cover; height: 200px;">
                    
                    <!-- Body Card -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($event->title); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($event->date); ?></h6>
                        <p class="card-text"><?php echo e($event->descriptions); ?></p>
                    </div>

                    <!-- Footer Card -->
                    
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <br /><br /><br />
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\uazz\UAS-WebProg\resources\views/user/acara.blade.php ENDPATH**/ ?>