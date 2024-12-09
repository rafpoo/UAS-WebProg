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

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #68A895;
        }

        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="gallery-container">
        <div class="gallery">
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 1">
                    <img src="images/illustration2.jpg" alt="Gallery Image 1">
                    <div class="overlay">
                        <div class="overlay-text">Kegiatan Belajar</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 2">
                    <img src="images/illustration2.jpg" alt="Gallery Image 2">
                    <div class="overlay">
                        <div class="overlay-text">Bermain Bersama</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 3">
                    <img src="images/illustration2.jpg" alt="Gallery Image 3">
                    <div class="overlay">
                        <div class="overlay-text">Kreativitas Anak</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 4">
                    <img src="images/illustration2.jpg" alt="Gallery Image 4">
                    <div class="overlay">
                        <div class="overlay-text">Outbound</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 5">
                    <img src="images/illustration2.jpg" alt="Gallery Image 5">
                    <div class="overlay">
                        <div class="overlay-text">Praktikum Sains</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 6">
                    <img src="images/illustration2.jpg" alt="Gallery Image 6">
                    <div class="overlay">
                        <div class="overlay-text">Kegiatan Seni</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 7">
                    <img src="images/illustration2.jpg" alt="Gallery Image 7">
                    <div class="overlay">
                        <div class="overlay-text">Bermain Peran</div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="images/illustration2.jpg" data-lightbox="school-gallery" data-title="TK Islam Kinasih Gallery Image 8">
                    <img src="images/illustration2.jpg" alt="Gallery Image 8">
                    <div class="overlay">
                        <div class="overlay-text">Kegiatan Keagamaan</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 TK Islam Kinasih</p>
        <div class="social-icons">
            <a href="https://wa.me/62895615460275" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/tkislamkinasih" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtu.be/1TFblh9GS6A" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': false,
            'disableScrolling': true,
            'fadeDuration': 300
        });
    </script>
</body>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH C:\Users\ziyad\OneDrive\Attachments\Desktop\Documents\GitHub\UAS-WebProg\resources\views/user/galeri.blade.php ENDPATH**/ ?>