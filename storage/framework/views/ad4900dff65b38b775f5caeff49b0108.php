<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih - Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
      font-family: 'Roboto', sans-serif;
      color: white;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .gallery-container {
      flex-grow: 1;
      padding: 40px 0;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      grid-gap: 20px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0,0,0,0.3);
    }

    .gallery-item img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      transition: opacity 0.3s ease;
    }

    .gallery-item .overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0,0,0,0.6);
      overflow: hidden;
      width: 100%;
      height: 0;
      transition: 0.5s ease;
    }

    .gallery-item:hover .overlay {
      height: 50px;
    }

    .overlay-text {
      color: white;
      font-size: 14px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    footer {
      background-color: #1a7f72;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0; /* Ubah menjadi 0 untuk mengisi dari atas */
        left: 0; /* Ubah menjadi 0 untuk mengisi dari kiri */
        width: 100%; /* Biarkan tetap 100% untuk lebar penuh */
        height: 100%; /* Ubah menjadi 100% untuk tinggi penuh */
        background: rgba(0, 0, 0, 0.8); /* Latar belakang transparan */
        justify-content: center;
        align-items: center;
        z-index: 1100; /* Pastikan z-index lebih tinggi dari navbar */
    }




    .modal.active {
      display: flex;
    }

    .modal img {
      max-width: 80%;
      max-height: 80%;
      border-radius: 8px;
    }

    .modal .controls {
      position: absolute;
      top: 50%;
      display: flex;
      justify-content: space-between;
      width: 90%;
      transform: translateY(-50%);
    }

    .modal .controls button {
      background: none;
      border: 2px solid white;
      color: white;
      font-size: 18px;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 50%;
      transition: background 0.3s ease;
    }

    .modal .controls button:hover {
      background: white;
      color: black;
    }

    .modal .close {
      position: absolute;
      top: 20px;
      right: 20px;
      background: none;
      border: none;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }

    .modal .close:hover {
      color: red;
    }
  </style>
</head>
<body>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="gallery-container">
    <div class="gallery">
        <?php $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery-item">
                <img src="<?php echo e(asset('storage/' . $galeri->image)); ?>" alt="<?php echo e($galeri->nama); ?>" data-index="0">
                <div class="overlay">
                    <div class="overlay-text"><?php echo e($galeri->nama); ?></div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>  

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Modal -->
<div class="modal" id="imageModal">
    <button class="close" id="closeModal">&times;</button>
    <img src="" alt="Modal Image" id="modalImage">
    <div class="controls">
        <button id="prevImage">&lt;</button>
        <button id="nextImage">&gt;</button>
    </div>
</div>

<script>
    // JavaScript for modal functionality
    const galleryImages = document.querySelectorAll('.gallery-item img');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const closeModal = document.getElementById('closeModal');
    const prevImage = document.getElementById('prevImage');
    const nextImage = document.getElementById('nextImage');

    let currentIndex = 0;

    // Open modal
    galleryImages.forEach((image, index) => {
        image.addEventListener('click', () => {
            currentIndex = index;
            showImage();
            modal.classList.add('active');
        });
    });

    // Close modal
    closeModal.addEventListener('click', () => {
        modal.classList.remove('active');
    });

    // Show image in modal
    function showImage() {
        const { src } = galleryImages[currentIndex];
        modalImage.src = src;
    }

    // Navigate to previous image
    prevImage.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        showImage();
    });

    // Navigate to next image
    nextImage.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        showImage();
    });

    // Close modal when clicking outside the image
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.remove('active');
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\uazzz\UAS-WebProg\resources\views/user/galeri.blade.php ENDPATH**/ ?>