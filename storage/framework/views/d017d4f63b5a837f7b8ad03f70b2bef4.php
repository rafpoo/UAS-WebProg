<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Form Pendaftaran</title>
    
    <!-- External CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

    <!-- Custom Styles -->
    <style>
        .form-container {
            width-100 h-100 p-4;
        }

        .illustration {
            width-100 h-100;
        }

        .illustration img {
            margin-bottom: 1rem;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slideshow-container {
            position: relative;
            max-width: 100%;
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .slide {
            opacity: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.8s ease-in-out;
        }

        .slide.active {
            opacity: 1;
            z-index: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slideshow-controls {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: space-between;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .slideshow-controls button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slideshow-controls button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>

    <?php echo $__env->make('global_css.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('css_in_view.ppdb_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-6">
                <form action="/submit-ppdb" method="POST" class="w-100 h-100">
                    <?php echo csrf_field(); ?>
                    <h2>Form Pendaftaran</h2>

                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>

                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Kota/Kabupaten" required>

                    <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
                    <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" placeholder="Nama Ayah/Ibu" required>

                    <label for="no_telepon" class="form-label">No Telepon Orang Tua</label>
                    <div class="input-group">
                        <input readonly="" style="width: 50px; margin-right: 10px;" type="text" value="+62"/>
                        <input class="form-control" id="no_telepon" placeholder="Phone number" type="tel" name="no_telepon" required/>
                    </div>
                
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat Lengkap" required></textarea>

                    <Br />
                    <button type="submit">DAFTAR</button>
                </form>
            </div>
            
            <!-- Slideshow Column -->
            <div class="col-md-6">
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="<?php echo e(URL('images/illustration9.jpg')); ?>" alt="Illustration 1">
                    </div>
                    <div class="slide">
                        <img src="<?php echo e(URL('images/illustration12.jpg')); ?>" alt="Illustration 2">
                    </div>
                    <div class="slide">
                        <img src="<?php echo e(URL('images/illustration10.jpg')); ?>" alt="Illustration 3">
                    </div>

                    <!-- Slideshow Controls -->
                    <div class="slideshow-controls">
                        <button onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></button>
                        <button onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form[action="/submit-ppdb"]');
            let slideIndex = 1;
            const slides = document.querySelectorAll('.slide');

            // Form Submission Validation
            form.addEventListener('submit', function(event) {
                const nama = document.getElementById('nama').value.trim();
                const no_telepon = document.getElementById('no_telepon').value.trim();

                if (nama && no_telepon) {
                    alert(`Terima kasih telah mendaftar, ${nama}. Kami akan segera menghubungi Anda melalui nomor ${no_telepon}.`);
                } else {
                    event.preventDefault();
                    alert('Mohon lengkapi semua field pendaftaran sebelum mengirim form!');
                }
            });

            // Slideshow Functions
            function showSlide(n) {
                slides.forEach(slide => slide.classList.remove('active'));

                if (n > slides.length) { slideIndex = 1; }
                if (n < 1) { slideIndex = slides.length; }

                slides[slideIndex - 1].classList.add('active');
            }

            function changeSlide(n) {
                slideIndex += n;
                showSlide(slideIndex);
            }

            function autoSlide() {
                slideIndex++;
                showSlide(slideIndex);
            }

            // Start auto sliding
            setInterval(autoSlide, 5000);

            // Make changeSlide function globally available
            window.changeSlide = changeSlide;
        });
    </script>
  </body>
</html>
<?php /**PATH C:\Users\ziyad\Downloads\cakung\UAS-WebProg\resources\views/user/ppdb.blade.php ENDPATH**/ ?>