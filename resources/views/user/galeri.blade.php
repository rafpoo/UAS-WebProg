<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
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
  

  <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100" alt="Wild Landscape" />
      </div>
      <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100" alt="Camera" />
      </div>
      <div class="carousel-item">
        <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits" />
      </div>
    </div>
    <button class="carousel-control-prev" data-mdb-target="#carouselExampleCrossfade" type="button" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" data-mdb-target="#carouselExampleCrossfade" type="button" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>aaaaa
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"></script>
  @include('partials.footer')
</body>

</html>