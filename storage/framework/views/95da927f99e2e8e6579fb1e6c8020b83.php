<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Form Pendaftaran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
     body {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #e0f7f4;
      }
      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
      }
      .header {
        background-color: #1a7f72;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .header img {
        height: 50px;
      }
      .header nav a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        font-weight: bold;
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
      .footer {
        background-color: #1a7f72;
        color: white;
        padding: 40px 20px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }
      .footer img {
        height: 100px;
      }
      .footer div {
        max-width: 300px;
      }
      .footer div p {
        margin: 10px 0;
      }
      .footer div i {
        margin-right: 10px;
      }
      .footer .contact-info {
        display: flex;
        flex-direction: column;
      }
      .footer .contact-info p {
        margin: 5px 0;
      }
      .footer .contact-info i {
        margin-right: 10px;
      }
      .footer .description {
        max-width: 500px;
      }
      .footer .description p {
        margin: 10px 0;
      }
      .footer .description i {
        margin-right: 10px;
      }
      .footer .working-hours {
        max-width: 200px;
      }
      .footer .working-hours p {
        margin: 10px 0;
      }
      .footer .working-hours i {
        margin-right: 10px;
      }
      @media (max-width: 768px) {
        .form-container {
          flex-direction: column;
          align-items: center;
        }
        .form-container form, .form-container img {
          width: 100%;
        }
        .footer {
          flex-direction: column;
          align-items: center;
        }
        .footer div {
          max-width: 100%;
          text-align: center;
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

    </style>
  </head>
  <body>
  <header class="header">
      <div class="logo-container">
        <img alt="Logo" height="50" src="../UAS-WebProg-main/UAS-WebProg-main/resources/images/LogoTK.jpg" width="50" />
        <a href="/" class="logo-text">TK ISLAM KINASIH</a>
      </div>
      <nav>
        <a href="/PPDB">PPDB</a>
        <a href="/profil-guru">Profil Guru</a>
        <a href="/acara">Acara</a>
        <a href="/aktivitas">Aktivitas</a>
        <a href="/gallery">Gallery</a>
        <a href="/tentang-kami">Tentang Kami</a>
      </nav>
    </header>

    <div class="container">
      <div class="form-container">
        <form id="ppdbForm" action="/submit-ppdb" method="POST">
          <?php echo csrf_field(); ?>
          <h2>Form Pendaftaran</h2>

          <label for="nama">Nama Lengkap</label>
          <input id="nama" placeholder="Nama Lengkap" type="text" name="nama" required/>

          <label for="gender">Jenis Kelamin</label>
          <select id="gender" name="gender" required>
              <option value="male">Laki-laki</option>
              <option value="female">Perempuan</option>
          </select>

          <label for="birthplace">Tempat Lahir</label>
          <input id="birthplace" placeholder="Kota" type="text" name="birthplace" required/>

          <label for="parent-name">Nama Orang Tua</label>
          <input id="parent-name" placeholder="Nama Orang Tua" type="text" name="parent_name" required/>

          <label for="phone">No Telpon Orang Tua</label>
          <div style="display: flex;">
              <input readonly="" style="width: 50px; margin-right: 10px;" type="text" value="+62"/>
              <input id="phone" placeholder="Phone number" type="text" name="phone" required/>
          </div>

          <label for="address">Alamat</label>
          <input id="address" type="text" name="address" required/>

          <button type="submit">DAFTAR</button>
        </form>
        <img height="400" src="../UAS-WebProg-main/UAS-WebProg-main/resources/images/LogoTK.jpg" width="400"/>
      </div>
    </div>

    <footer class="footer">
      <div style="display: flex; align-items: center;">
        <img alt="Logo" height="100" src="../UAS-WebProg-main/UAS-WebProg-main/resources/images/LogoTK.jpg" width="100"/>
        <p style="margin-left: 10px; font-size: 24px; font-weight: bold;">TK ISLAM KINASIH</p>
      </div>
      <div>
        <p>Taman Kanak-kanak Islam Kinasih</p>
        <p>Akreditasi A</p>
        <p>ANPSN: 30407224</p>
        <div>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="contact-info">
        <p><i class="fas fa-envelope"></i> E-mail: admin@tkislamkinasih.com</p>
        <p><i class="fas fa-phone"></i> No Telepon: 021 0989 23145</p>
        <p><i class="fab fa-whatsapp"></i> WhatsApp: +62 895 3852 2554</p>
        <p><i class="fas fa-clock"></i> Jam Kerja: Senin s/d Jum'at (07.00-15.00)</p>
      </div>
      <div class="description">
        <p><i class="fas fa-graduation-cap"></i> TK Islam Kinasih merupakan salah satu lembaga Pendidikan Anak Usia Dini (PAUD) di bawah naungan Yayasan Islam Kinasih.</p>
        <p><i class="fas fa-home"></i> TK Islam Kinasih, Berlokasi di Jalan Raya No.123, Jakarta.</p>
      </div>
      <div class="working-hours">
        <p><i class="fas fa-clock"></i> Senin s/d Jumat</p>
        <p><i class="fas fa-clock"></i> 07.00 - 15.00</p>
      </div>
    </footer>
    <script>
  document.addEventListener('DOMContentLoaded', function() {
  // Pilih form berdasarkan atribut action atau elemen form secara langsung
  const form = document.querySelector('form[action="/submit-ppdb"]');

  // Tambahkan event listener untuk event submit
  form.addEventListener('submit', function(event) {
    // Ambil nilai dari field input
    const nama = document.getElementById('nama').value.trim();
    const phone = document.getElementById('phone').value.trim();

    // Validasi sederhana untuk memastikan semua field terisi
    if (nama && phone) {
      // Tampilkan alert dengan pesan yang disesuaikan
      alert(`Terima kasih telah mendaftar, ${nama}. Kami akan segera menghubungi Anda melalui nomor ${phone}.`);
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
<?php /**PATH C:\xampp\htdocs\uazz\UAS-WebProg\resources\views/user/ppdb.blade.php ENDPATH**/ ?>