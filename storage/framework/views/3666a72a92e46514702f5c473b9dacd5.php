<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Program Pembelajaran - TK Islam Kinasih</title>
    <link rel="icon" href="<?php echo e(asset('images/LogoTK.jpg')); ?>" type="image/jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #68A895;
            --secondary-color: #4F998A;
            --accent-color: #3A7D70;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f7;
            color: #2c3e50;
        }

        .page-header {
            background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .page-header h2 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .accordion-button {
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--secondary-color);
        }

        .accordion-body {
            background-color: #ecf0f1;
        }

        .extracurricular {
            background-color: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .extracurricular h3 {
            color: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            margin-bottom: 1rem;
        }

        .extracurricular-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .extracurricular-item {
            text-align: center;
            padding: 1rem;
            margin: 0.5rem;
            background-color: #f8f9fa;
            border-radius: 10px;
            width: 200px;
            transition: transform 0.3s ease;
        }

        .extracurricular-item h5 {
    background: linear-gradient(135deg, #68A895 0%, #4F998A 100%); 
    -webkit-background-clip: text;
    background-clip: text; 
    color: transparent; 
    font-size: 1.2rem;
    font-weight: bold;
}

        .extracurricular-item:hover {
            transform: scale(1.3);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .extracurricular-item i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .image-container {
    position: relative;
    overflow: hidden; 
    border-radius: 10px;
}

.image-container img {
    width: 100%; /* Menyamakan ukuran gambar */
    height: 150px; /* Tetapkan tinggi tetap untuk semua gambar */
    object-fit: cover; /* Memotong gambar agar tetap proporsional dalam kontainer */
    transition: filter 0.3s ease; /* Animasi saat hover */
}

.icon-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3rem; /* Ukuran ikon */
    color: var(--primary-color); /* Warna ikon sesuai tema */
    opacity: 0; /* Ikon tidak terlihat secara default */
    transition: opacity 0.3s ease; /* Animasi muncul */
    pointer-events: none; /* Ikon tidak menghalangi klik */
}

/* .image-container:hover img {
    filter: blur(4px); 
} */

.image-container:hover .icon-overlay {
    opacity: 2; 
}

    </style>
</head>
<body>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-header">
        <div class="container">
            <h2>Program Pembelajaran</h2>
            <p class="lead">"Kami menyediakan berbagai program pembelajaran untuk mendukung perkembangan anak secara menyeluruh."</p>
        </div>
    </div>

    <div class="container">
        <h3 class="mb-4">Kegiatan Harian di TK Islam Kinasih </h3>
        <div class="accordion" id="dailyActivitiesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRegular">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegular" aria-expanded="true" aria-controls="collapseRegular">
                        <i class="fas fa-clock me-2"></i> Reguler (07.00 – 11.15 WIB)
                    </button>
                </h2>
                <div id="collapseRegular" class="accordion-collapse collapse show" aria-labelledby="headingRegular" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <?php $__currentLoopData = $reguler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item"><?php echo e($aktivitas->nama_aktivitas); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingHalfDay">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalfDay" aria-expanded="false" aria-controls="collapseHalfDay">
                        <i class="fas fa-sun me-2"></i> Half Day (07.00 – 13.00 WIB)
                    </button>
                </h2>
                <div id="collapseHalfDay" class="accordion-collapse collapse" aria-labelledby="headingHalfDay" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <?php $__currentLoopData = $halfDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item"><?php echo e($aktivitas->nama_aktivitas); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFullDay">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFullDay" aria-expanded="false" aria-controls="collapseFullDay">
                        <i class="fas fa-calendar-day me-2"></i> Full Day (07.00 – 17.00 WIB)
                    </button>
                </h2>
                <div id="collapseFullDay" class="accordion-collapse collapse" aria-labelledby="headingFullDay" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <?php $__currentLoopData = $fullDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item"><?php echo e($aktivitas->nama_aktivitas); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="extracurricular mt-5">
            <h3><i class="fas fa-trophy me-2"></i>Ekstrakurikuler</h3>
            <p>Ekstrakurikuler TK Islam Kinasih bertujuan untuk memberikan wadah bagi peserta didik untuk mengembangkan dan mengekspresikan diri sesuai dengan kebutuhan, bakat, dan minat setiap peserta didik.</p>
            
            <div class="extracurricular-list">
    <?php $__currentLoopData = $ekstrakurikulers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekstrakurikuler): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="extracurricular-item">
            <div class="image-container">
                <img src="<?php echo e(asset('storage/' . $ekstrakurikuler->image)); ?>" alt="<?php echo e($ekstrakurikuler->nama); ?>" class="img-fluid rounded">
                
            </div>
            <h5><?php echo e($ekstrakurikuler->nama); ?></h5>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
</div>

</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\uazzzz\UAS-WebProg\resources\views/user/aktivitas.blade.php ENDPATH**/ ?>