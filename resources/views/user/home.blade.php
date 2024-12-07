<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

    <style>
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
      background-color: rgba(255,255,255,1.0);
      margin: 4px 0;
    }
    body {
            font-family: 'Roboto', sans-serif;
            background-color: #a3d5d3;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            font-family: 'Fredoka One', cursive;
            font-size: 48px;
            color: #fff;
            margin: 0;
        }
        .header p {
            font-size: 18px;
            color: #fff;
        }
        .header button {
            background-color: #2d6a4f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }
        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }
        .left-content, .right-content {
            flex: 1;
            min-width: 300px;
            margin: 10px;
        }
        .left-content h2 {
            font-family: 'Fredoka One', cursive;
            font-size: 36px;
            color: #fff;
        }
        .left-content p {
            font-size: 16px;
            color: #fff;
        }
        .video-player {
            background-color: #6c757d;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 24px;
            border-radius: 10px;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }
        .feature {
            background-color: #4C7F70;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex: 1;
            min-width: 200px;
            display: flex;
            align-items: center;
        }
        .feature img {
            width: 50px;
            height: 50px;
            margin-right: 20px;
        }
        .feature h3 {
            font-size: 18px;
            margin: 0;
        }
        .feature p {
            font-size: 14px;
            margin: 5px 0 0 0;
        }
        .image-container {
            text-align: center;
            margin-top: 20px;
        }
        .image-container img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .header h1 {
                font-size: 36px;
            }
            .header p {
                font-size: 16px;
            }
            .left-content h2 {
                font-size: 28px;
            }
            .left-content p {
                font-size: 14px;
            }
            .video-player {
                height: 150px;
                font-size: 20px;
            }
            .feature h3 {
                font-size: 16px;
            }
            .feature p {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    @include('partials.navbar')

    <div class="container">
   <div class="header">
    <h1>Buat Anak Bermain sambil Belajar</h1>
    <p>ayo daftarkan anak-anak dan anak belajar dengan menyenangkan</p>
    <button onclick="window.location.href='/PPDB'" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
    DAFTAR DI SINI
</button>
   </div>
   <div class="main-content">
    <div class="left-content">
     <h2>Ayo Daftar!</h2>
     <p>Bersama TK Islam Kinasih, temukan pendidikan terbaik untuk buah hati Anda dengan kurikulum berbasis nilai-nilai Islam untuk membentuk generasi cerdas, berakhlak mulia, dan siap menghadapi masa depan. Kami menghadirkan metode belajar interaktif dan menyenangkan melalui kegiatan belajar sambil bermain yang didukung oleh fasilitas yang aman dan nyaman. Dengan fasilitas modern serta lingkungan yang damai dan riang, kami mendukung tumbuh kembang anak secara optimal.</p>
     <div class="image-container">
      <img alt="Anak-anak sedang belajar di dalam kelas" height="300" src="https://storage.googleapis.com/a1aa/image/JlIxHtt6WUYONdFCec4nBxWQsng4S4eFbi5lZafeWkIdkRiPB.jpg" width="500"/>
     </div>
    </div>
    <div class="right-content">
     <div class="video-player">
      <i class="fas fa-play-circle">
      </i>
      <p>video player</p>
     </div>
     <div class="features">
      <div class="feature">
       <img alt="Ikon Number Sense and Operations" height="50" src="https://storage.googleapis.com/a1aa/image/fdW58VayfefCKQE5ykvXTc4NeffcyLjVwInglRwYAArWmMS8JA.jpg" width="50"/>
       <div>
        <h3>Number Sense and Operations</h3>
        <p>Memperkenalkan konsep angka dan operasi dasar matematika.</p>
       </div>
      </div>
      <div class="feature">
       <img alt="Ikon Geometry" height="50" src="https://storage.googleapis.com/a1aa/image/ATBtl1AdRlbRJVeUlMfrQaIdKhgIoMKcxiD9IRNDUjQJZk4TA.jpg" width="50"/>
       <div>
        <h3>Geometry</h3>
        <p>Mengenal bentuk 2D dan 3D, serta memahami konsep ruang dan ukuran.</p>
       </div>
      </div>
      <div class="feature">
       <img alt="Ikon Logic and Patterns" height="50" src="https://storage.googleapis.com/a1aa/image/ey29fGhU8ZjvUEp14VUKzQQWTcLUSv0Lxnn4frEQa8wXyIxnA.jpg" width="50"/>
       <div>
        <h3>Logic and Patterns</h3>
        <p>Melatih kemampuan berpikir logis dan mengenali pola.</p>
       </div>
      </div>
      <div class="feature">
       <img alt="Ikon Problem Solving" height="50" src="https://storage.googleapis.com/a1aa/image/kLlEeDsKdsTaYiGzBwXWeVQRW6yMxC0MvSfIcMn9dfVYkRiPB.jpg" width="50"/>
       <div>
        <h3>Problem Solving</h3>
        <p>Mengasah kemampuan memecahkan masalah dengan strategi yang tepat.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  @include('partials.footer')
 </body>
</html>
