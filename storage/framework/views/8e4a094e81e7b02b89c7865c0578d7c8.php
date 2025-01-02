<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acara - TK Islam Kinasih</title>
  <link rel="icon" href="<?php echo e(asset('images/LogoTK.jpg')); ?>" type="image/jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .container p {
    line-height: 1.8;
    font-size: 1.1rem;
    margin: 0 auto;
    max-width: 800px;
}
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
    .card-body h5,
    .card-body h6,
    .card-body p {
        color: #000;
    }
</style>
  <?php echo $__env->make('global_css.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('css_in_view.acara_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</head>

<body>
  

  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <div class="container">
  <h1 style="text-align: center;">Event</h1>
  <p style="text-align: justify;">
    Event di Taman Kanak-Kanak (TK) merupakan bagian penting dari kegiatan sekolah yang dirancang untuk memberikan pengalaman belajar yang menyenangkan sekaligus mendukung perkembangan anak secara holistik. Berikut adalah contoh keterangan mengenai event yang sering diadakan di TK:
  </p>
</div>



    
  </p>

  <hr style="height:4px" />

  <?php if($events->isEmpty()): ?>
    <div class="card h-100">
      <p style="color: black;">Tidak ada data tersedia.</p>
    </div>
  <?php else: ?>
  
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
                          <h6 class="card-subtitle mb-2" style="color:#000"><?php echo e($event->date); ?></h6>
                          <p class="card-text"><?php echo e($event->descriptions); ?></p>
                      </div>

                      <!-- Footer Card -->
                      
                  </div>
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
  <?php endif; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <br /><br /><br />
  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/user/acara.blade.php ENDPATH**/ ?>