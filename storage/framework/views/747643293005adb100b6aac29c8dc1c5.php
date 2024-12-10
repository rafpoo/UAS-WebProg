<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <?php echo $__env->make('global_css.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('css_in_view.acara_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
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

  <hr style="height:4px" />

  <?php if($events->isEmpty()): ?>
    <div class="card h-100">
      <p>Tidak ada data tersedia.</p>
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
                          <h6 class="card-subtitle mb-2" style="color:#AAAAAA"><?php echo e($event->date); ?></h6>
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

</html>
<?php /**PATH C:\xampp\htdocs\uazzz\UAS-WebProg\resources\views/user/acara.blade.php ENDPATH**/ ?>