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

    <?php echo $__env->make('partials.adminnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container welcome-section">
        <h1>Selamat Datang di TK Islam Kinasih</h1>
        <p>Perjalanan Anda untuk belajar dimulai di sini!</p>
        <button class="btn btn-success">Daftar</button>
    </div>
    <div class="header-content" style="padding: 50px;">
        <h2>Ayo Daftar!</h2>
        <img src="#" class="img-fluid rounded float-end" style="padding: 50px;" />
        <p style="font-size: large;">
            Bersama TK Islam Kinasih, temukan pendidikan terbaik untuk buah<br />
            hati Anda dengan kurikulum berbasis nilai-nilai Islami untuk<br />
            membentuk generasi cerdas, berakhlak mulia, dan siap menghadapi<br />
            masa depan. Kami menghadirkan metode belajar interaktif dan<br />
            menyenangkan melalui kegiatan belajar sambil bermain<br />
            yang mengembangkan kreativitas dan karakter positif. Dengan fasilitas<br />
            modern serta lingkungan yang aman dan nyaman, kami mendukung<br />
            tumbuh kembang anak secara optimal.
        </p>

        <img class="img-fluid" src="#" />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\uaz\UAS-WebProg\resources\views/admin/home.blade.php ENDPATH**/ ?>