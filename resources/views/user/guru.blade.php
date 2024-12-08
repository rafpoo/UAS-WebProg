<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Data Guru
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   body {
    background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
    color: white;
    font-family: 'Roboto', sans-serif;
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
        .features .feature {
    background-color: rgba(76, 127, 112, 0.7); /* Sedikit transparan */
    transition: background-color 0.3s ease;
}

.features .feature:hover {
    background-color: rgba(76, 127, 112, 0.9);
}

@media (max-width: 768px) {
    .container {
        padding: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
}
        .teacher-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        .teacher-card {
            background-color: #2e7d32;
            border-radius: 10px;
            width: 200px;
            padding: 10px;
            color: #fff;
            text-align: left;
            position: relative;
        }
        .teacher-card img {
            width: 100%;
            border-radius: 10px;
        }
        .teacher-card h2 {
            font-size: 1.5em;
            margin: 10px 0 5px;
        }
        .teacher-card p {
            margin: 5px 0;
        }
        .teacher-card .pin {
            position: absolute;
            top: -10px;
            left: 10px;
            width: 30px;
        }
        .teacher-card .star {
            position: absolute;
            top: -10px;
            right: 10px;
            width: 30px;
        }
        .about-section {
            background-color: #2e7d32;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .about-section .text {
            width: 60%;
            text-align: left;
        }
        .about-section .text h2 {
            font-size: 2em;
            margin: 0 0 10px;
        }
        .about-section .text p {
            margin: 0;
        }
        .about-section .image {
            width: 30%;
        }
        .about-section .image img {
            width: 100%;
        }
        @media (max-width: 768px) {
            .teacher-cards {
                flex-direction: column;
                align-items: center;
            }
            .about-section {
                flex-direction: column;
                text-align: center;
            }
            .about-section .text, .about-section .image {
                width: 100%;
            }
        }

        body {
      background: linear-gradient(135deg, #85C7B3 0%, #68A895 100%);
      color: white;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #4F998A;
    }

    .navbar-brand img {
      height: 50px;
      /* Adjust logo height */
    }

    .nav-link {
      color: white !important;
    }

    .welcome-section {
      padding: 50px 20px;
      text-align: center;

      border-radius: 10px;
      margin-top: 30px;
    }

    .menu-icon {
      display: inline-block;
      margin: auto auto;
    }

    .menu-icon-bar {
      width: 25px;
      height: 3px;
      background-color: rgba(255, 255, 255, 1.0);
      margin: 4px 0;
    }

  </style>
 </head>
 <body>

 @include('partials.navbar')

  <div class="container">
   <div class="header">
    <h1>Data Guru</h1>
    <p>TK Islam Kinasih</p>
   </div>
   <div class="teacher-cards">
    <div class="teacher-card">
     <img alt="Photo of Ms. Rini" height="200" src="" width="200"/>
     <h2>Ms. Rini</h2>
     <p>S1 Pendidikan Anak Usia Dini</p>
     <p>Mewarnai dan Seni</p>
    </div>
    <div class="teacher-card">
     <img alt="Photo of Ms. Rini" height="200" src="" width="200"/>
     <h2>Ms. Rini</h2>
     <p>S1 Pendidikan Anak Usia Dini</p>
     <p>Mewarnai dan Seni</p>
    </div>
    <div class="teacher-card">
     <img alt="Photo of Ms. Rini" height="200" src="" width="200"/>
     <h2>Ms. Rini</h2>
     <p>S1 Pendidikan Anak Usia Dini</p>
     <p>Mewarnai dan Seni</p>
    </div>
    <div class="teacher-card">
     <img alt="Photo of Ms. Rini" height="200" src="" width="200"/>
     <h2>Ms. Rini</h2>
     <p>S1 Pendidikan Anak Usia Dini</p>
     <p>Mewarnai dan Seni</p>
    </div>
   </div>
   <div class="about-section">
    <div class="text">
     <h2>Guru Kami</h2>
     <p>"Guru kami berpendidikan dan penyayang, selalu berdedikasi untuk menginspirasi siswa dengan metode pembelajaran kreatif, serta membentuk karakter positif yang mendukung tumbuh kembang anak secara maksimal."</p>
    </div>
    <div class="image">
     <img alt="Illustration of a teacher" height="200" src="https://storage.googleapis.com/a1aa/image/tgbSGyISMDrBMRxewwNZ6oE7KfxfcyAwG0Lx3NbsoeVf6bEfE.jpg" width="200"/>
    </div>
   </div>
  </div>
  @include('partials.footer')
 </body>
</html>
