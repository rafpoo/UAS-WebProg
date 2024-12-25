<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Form Pendaftaran</title>
    <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
    
    <!-- External CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .modal-title {
        color: #000000;
    }

    .modal-body {
        color: #000000; 
    }
    
    .modal-footer .btn {
        color: #ffffff;
    }

    .info-section {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        position: relative;
    }

    .info-section h3 {
    color: #2E8B57;
    margin-bottom: 15px;
    font-size: 1.4rem;
    position: relative; /* Add position relative */
    z-index: 2; /* Ensure text is above background */
}

.info-section ul {
    list-style-type: none;
    padding-left: 0;
    position: relative; /* Add position relative */
    z-index: 2; /* Ensure text is above background */
}

.info-section ul li {
    margin-bottom: 8px;
    padding-left: 20px;
    position: relative;
    color: #000000; /* Ensure text color is black */
}


.info-section ul li:before {
    content: "•";
    color: #2E8B57;
    position: absolute;
    left: 0;
}

.jadwal-gelombang {
    background: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    margin-bottom: 10px;
    border-left: 4px solid #2E8B57;
    position: relative; /* Add position relative */
    z-index: 2; /* Ensure text is above background */
    color: #000000; /* Ensure text color is black */
}
.info-section h4 {
    color: #2E8B57;
    margin-bottom: 12px;
    position: relative; /* Add position relative */
    z-index: 2; /* Ensure text is above background */
}
.background-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    border-radius: 10px;
    z-index: 1; /* Place background behind content */
}

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

    @include('global_css.css')
    @include('css_in_view.ppdb_css')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    @include('partials.navbar')

    @if(session('success'))
        <script>
            Swal.fire(
                'Terima kasih sudah mendaftar!',
                '{{ session('success') }}',
                'success'
            );
        </script>
    @endif

    <div class="container">
    <!-- Info Pendaftaran Section -->
    <div class="info-section">
        <h3>Info Pendaftaran</h3>
        
        <div class="row">
            <div class="col-md-4">
                <h4>Persyaratan Umum</h4>
                <ul>
                    <li>Melakukan pendaftaran</li>
                    <li>Calon peserta didik mengikuti observasi</li>
                    <li>Melengkapi berkas dokumen</li>
                    <li>Melunasi administrasi keuangan sampai waktu yang ditentukan</li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <h4>Persyaratan Usia</h4>
                <ul>
                    <li>Kelompok Toddler [18 bulan - 3 tahun]</li>
                    <li>Kelompok Bermain [3-4 tahun]</li>
                    <li>Kelompok A [4-5 tahun]</li>
                    <li>Kelompok B [5-6 tahun]</li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <h4>Jadwal Pendaftaran</h4>
                <div class="jadwal-gelombang">
                    Gelombang I [November 2024 - Januari 2025]
                </div>
                <div class="jadwal-gelombang">
                    Gelombang II [Februari 2025 - April 2025]
                </div>
                <div class="jadwal-gelombang">
                    Gelombang III [Mei 2025 - Juni 2025]
                </div>
            </div>
        </div>

        <!-- Section Google Form dipindahkan ke dalam info-section -->
        <div class="row mt-4">
            <div class="col-12">
                <h4>Mendaftar Dengan Google Form</h4>
                <a href="https://forms.gle/ECq2JYT17uejMygv5" class="btn btn-success" target="_blank">Isi Formulir</a>
            </div>
        </div>
    </div>


   <div class="row">
       <!-- Form Column -->
       <div class="col-md-6">
           <form action="/submit-ppdb" method="POST" class="w-100 h-100">
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

               <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
               <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>

               <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
               <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" placeholder="Nama Ayah/Ibu" required>

               <label for="no_telepon" class="form-label">No Telepon Orang Tua</label>
               <div class="input-group">
                   <input readonly="" style="width: 50px; margin-right: 10px;" type="text" value="+62"/>
                   <input class="form-control" id="no_telepon" placeholder="Phone number" type="tel" name="no_telepon" required inputmode="numeric" pattern="[0-9]*" />
               </div>

               <label for="alamat" class="form-label">Alamat</label>
               <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat Lengkap" required></textarea>

               <br />
               <button type="submit" class="btn btn-primary">DAFTAR</button>
           </form>
       </div>
       
       <!-- Slideshow Column -->
       <div class="col-md-6">
           <div class="slideshow-container">
               <div class="slide active">
                   <img src="{{ URL('images/illustration9.jpg') }}" alt="Illustration 1">
               </div>
               <div class="slide">
                   <img src="{{ URL('images/illustration12.jpg') }}" alt="Illustration 2">
               </div>
               <div class="slide">
                   <img src="{{ URL('images/illustration10.jpg') }}" alt="Illustration 3">
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

    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const noTeleponInput = document.getElementById('no_telepon');

            // Pastikan hanya angka yang bisa dimasukkan
            noTeleponInput.addEventListener('input', function(event) {
                this.value = this.value.replace(/\D/g, '');
                if (this.value.length > 15) {
                    this.value = this.value.slice(0, 15);
                }
            });

            // Slideshow Functions
            let slideIndex = 1;
            const slides = document.querySelectorAll('.slide');

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

            setInterval(autoSlide, 5000);

            window.changeSlide = changeSlide;
        });
    </script>
  </body>
</html>