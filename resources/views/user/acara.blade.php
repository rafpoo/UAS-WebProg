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
      background-color: rgba(255, 255, 255, 1.0);
      margin: 4px 0;
    }

    .card {
      background-color: #2D6A4F;
      border-radius: 20px;
      padding: 20px;
      color: white;
      text-align: center;
      margin: 20px;
    }

    .card img {
      border-radius: 15px;
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>

  @include('partials.navbar')
  
  <h1 style="text-align: center;">Event</h1>
  <p style="text-align: center;">
    Event di Taman Kanak-Kanak (TK) merupakan bagian penting<br />
    dari kegiatan sekolah yang dirancang untuk memberikan<br />
    pengalaman belajar yang menyenangkan sekaligus mendukung<br />
    perkembangan anak secara holistik. Berikut adalah contoh<br />
    keterangan mengenai event yang sering diadakan di TK:<br />
  </p>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" />
        <div class="card-body">
          <h5 class="card-title">Seni</h5>
          <p class="card-text">
            Kegiatan pembelajaran adalah inti dari proses pendidikan yang dirancang untuk memberikan pengalaman belajar kepada peserta didik, baik secara akademis, emosional, maupun sosial.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" />
        <div class="card-body">
          <h5 class="card-title">Interaksi</h5>
          <p class="card-text">
            Kegiatan pembelajaran adalah inti dari proses pendidikan yang dirancang untuk memberikan pengalaman belajar kepada peserta didik, baik secara akademis, emosional, maupun sosial.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" />
        <div class="card-body">
          <h5 class="card-title">Diskusi</h5>
          <p class="card-text">
            Kegiatan pembelajaran adalah inti dari proses pendidikan yang dirancang untuk memberikan pengalaman belajar kepada peserta didik, baik secara akademis, emosional, maupun sosial.
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
