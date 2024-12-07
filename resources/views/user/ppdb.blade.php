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
        <span class="logo-text">TK ISLAM KINASIH</span>
      </div>
      <nav>
        <a href="#">PPDB</a>
        <a href="#">Data Guru</a>
        <a href="#">Event</a>
        <a href="#">Kegiatan</a>
        <a href="#">About Us</a>
      </nav>
    </header>

    <div class="container">
      <div class="form-container">
        <form action="/submit-ppdb" method="POST">
          @csrf
          <h2>Form Pendaftaran</h2>

          @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-5">
              @include('partials.navbar') 
              {{ session('success') }}
            </div>
          @endif

          <label for="first-name">Nama</label>
          <input id="first-name" placeholder="Nama Depan" type="text" name="first_name" required/>
          <input id="last-name" placeholder="Nama Belakang" type="text" name="last_name" required/>

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

          <button type="submit" class="btn btn-success">DAFTAR</button>
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
  </body>
</html>
