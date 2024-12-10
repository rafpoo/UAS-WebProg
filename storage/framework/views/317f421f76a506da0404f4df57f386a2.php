<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
  </style>
</head>

<body>

  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="container welcome-section">
    <h1>Tentang Kami</h1>
    <p>Page ini berisi informasi tentang TK Islam Kinasih</p>
  </div>
  <div class="header-content" style="padding: 50px;">
    <h2>Kenapa pilih TK Islam Kinasih ?</h2>
    <img src="#" class="img-fluid rounded float-end" style="padding: 50px;" />
    <p style="font-size: large;">
      TK Islam Kinasih merupakan lembaga Pendidikan Anak Usia Dini<br />
      (PAUD) yang mencakup Taman Penitipan Anak (TPA), Kelompok<br />
      Bermain (KB), dan Taman Kanak-Kanak (TK). TK ini berada di bawah<br />
      naungan Yayasan Islam Kinasih.<br />
      Lembaga ini berdedikasi untuk memberikan pendidikan berkualitas<br />
      bagi anak-anak usia dini, dengan memadukan pendekatan Islami dan<br />
      metode pembelajaran kreatif. Melalui tenaga pendidik yang<br />
      profesional dan penyayang, TK Islam Kinasih bertujuan untuk<br />
      membangun karakter, keterampilan, dan pengetahuan anak-anak<br />
      sebagai bekal mereka dalam menghadapi jenjang pendidikan berikutnya.<br />
      TK Islam Kinasih juga menyediakan berbagai fasilitas penunjang,<br />
      seperti ruang kelas yang nyaman, area bermain yang aman, dan<br />
      kegiatan pembelajaran tematik yang menyenangkan. Dengan<br />
      pendekatan holistik, lembaga ini berupaya mengembangkan<br />
      potensi anak-anak secara menyeluruh, baik dari sisi kognitif, emosional,<br />
      maupun spiritual.
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </div>

  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\almer\Downloads\WEBPROG UAS\UAS-WebProg\resources\views/user/aboutUs.blade.php ENDPATH**/ ?>