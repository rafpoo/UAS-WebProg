<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Form Pendaftaran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
    
      body 
    {
      background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
      color: white;
      font-family: 'Arial', sans-serif;
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
    .navbar {
      background-color: #4F998A;
    }

    .navbar-brand img {
      height: 50px;
    }

    .nav-link {
      color: white !important;
    }
      
      .form-container {
        background-color: #4db6ac;
        padding: 40px;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .form-container form {
        width: 50%;
      }
      .form-container h2 {
        color: white;
        margin-bottom: 20px;
      }
      .form-container label {
        color: white;
        display: block;
        margin-bottom: 5px;
      }
      .form-container input, .form-container select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
      }
      .form-container button {
        background-color: #ffca28;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
      }
      .form-container img {
        width: 40%;
      }
    
      @media (max-width: 768px) {
        .container {
            padding: 15px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .form-container {
          flex-direction: column;
          align-items: center;
        }
        .form-container form, .form-container img {
          width: 100%;
        }
      
      }
      .alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #4CAF50;
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        z-index: 1000;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      }
      .alert-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
      }
     
      .header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #4F998A;
  padding: 10px 20px;
}

.logo-container {
  display: flex;
  align-items: center;
}

.logo-container img {
  margin-right: 10px;
}

.logo-text {
  font-size: 1.5rem;
  font-weight: bold;
  color: white;
}

nav {
  display: flex;
}

nav a {
  color: white;
  text-decoration: none;
  margin-left: 20px;
  font-size: 1rem;
}

nav a:hover {
  text-decoration: underline;
}

.illustration {
    padding-top: 20px; /* Memberikan ruang atas */
    padding-bottom: 20px; /* Memberikan ruang bawah */
    display: flex; /* Gunakan flexbox untuk pengaturan vertikal */
    flex-direction: column; /* Tumpuk gambar secara vertikal */
    align-items: center; /* Agar gambar rata tengah */
    gap: 35px; /* Jarak antar gambar */
  }

  .illustration img {
    width: 270px; /* Tentukan lebar gambar */
    height: auto; /* Sesuaikan tinggi untuk menjaga rasio */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }


    </style>
  </head>
  <body>

    @include('partials.navbar')

    <div class="container">
      <div class="form-container ">
        <form action="/submit-ppdb" method="POST">
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
              <input class="form-control" id="no_telepon" placeholder="Phone number" type="tel" name="no_telepon" required/>
          </div>
          
          <label for="alamat" class="form-label">Alamat</label>
          <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat Lengkap" required></textarea>

          <Br />
          <button type="submit">DAFTAR</button>
        </form>
        <div class="col-md-6 illustration">
          <img src="{{ URL('images/illustration.jpg') }}" alt="Illustration 1" class="img-fluid mb-4">
          <img src="{{ URL('images/illustration2.jpg') }}" alt="Illustration 2" class="img-fluid mb-4">
          <img src="{{ URL('images/illustration3.jpg') }}" alt="Illustration 3" class="img-fluid mb-4">
        </div>
      </div>
      
    </div>

    
    @include('partials.footer')
    <script>
  document.addEventListener('DOMContentLoaded', function() {
  // Pilih form berdasarkan atribut action atau elemen form secara langsung
  const form = document.querySelector('form[action="/submit-ppdb"]');

  // Tambahkan event listener untuk event submit
  form.addEventListener('submit', function(event) {
    // Ambil nilai dari field input
    const nama = document.getElementById('nama').value.trim();
    const no_telepon = document.getElementById('no_telepon').value.trim();

    // Validasi sederhana untuk memastikan semua field terisi
    if (nama && no_telepon) {
      // Tampilkan alert dengan pesan yang disesuaikan
      alert(`Terima kasih telah mendaftar, ${nama}. Kami akan segera menghubungi Anda melalui nomor ${no_telepon}.`);
    } else {
      // Jika ada field kosong, cegah pengiriman form
      event.preventDefault();
      alert('Mohon lengkapi semua field pendaftaran sebelum mengirim form!');
    }
  });
});

</script>
  </body>
</html>
