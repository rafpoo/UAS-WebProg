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
  </head>
  <body>
    @include('partials.navbar')

    <div class="container">
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-6">
                <form action="/submit-ppdb" method="POST" class="w-100 h-100">
                    @csrf
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

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Terima kasih telah mendaftar, <span id="modalNama"></span>. Kami akan segera menghubungi Anda melalui nomor <span id="modalTelepon"></span>.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const noTeleponInput = document.getElementById('no_telepon');

    // Pastikan hanya angka yang bisa dimasukkan
    noTeleponInput.addEventListener('input', function(event) {
        // Menghapus semua karakter selain angka
        this.value = this.value.replace(/\D/g, '');
        // Batasi panjang input hanya sampai 15 karakter
        if (this.value.length > 15) {
            this.value = this.value.slice(0, 15); // Hanya ambil 15 karakter pertama
        }
    });

    // Form Submission Validation
    const form = document.querySelector('form[action="/submit-ppdb"]');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting

        const nama = document.getElementById('nama').value.trim();
        const no_telepon = document.getElementById('no_telepon').value.trim();

        // Periksa apakah nomor telepon lebih dari 15 karakter
        if (no_telepon.length > 15) {
            alert("Nomor telepon tidak boleh lebih dari 15 karakter.");
            return;
        }

        // Jika semua field valid
        if (nama && no_telepon) {
            document.getElementById('modalNama').textContent = nama;
            document.getElementById('modalTelepon').textContent = no_telepon;
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        } else {
            alert("Mohon lengkapi semua field pendaftaran sebelum mengirim form!");
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
