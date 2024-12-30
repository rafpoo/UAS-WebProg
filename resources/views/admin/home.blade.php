<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPA - KB - TK Islam Kinasih</title>
    <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
<style>
    @media (max-width: 768px) {
    .video-player {
        margin-top: 100px; /* Menambahkan jarak bawah pada video */
        margin-bottom:100px;
    }
    }
 </style>

    @include('global_css.css')
    @include('css_in_view.home_css')
</head>

<body>
    @include('partials.adminnav')

    <div class="container">
        <div class="header">
            <h1>Buat Anak Bermain sambil Belajar</h1>
            <p>Membentuk Fondasi Karakter Menjadi Investasi Utama Untuk Mewujudkan Anak Hebat, Kreatif Dan Mampu Beradaptasi Dengan Situasi Melalui Kurikulum Dan Guru Kreatif Serta Berinovasi</p>
            <button onclick="window.location.href='/PPDB'">
                DAFTAR DI SINI
            </button>
        </div>

        <!-- Slideshow -->
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-overlay"></div>
                    <img src="{{ URL('images/illustration.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 1">
                    <div class="carousel-caption-center">
                        <h1>Bermain Sambil Belajar</h1>
                        <p>Pengalaman pendidikan yang menyenangkan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-overlay"></div>
                    <img src="{{ URL('images/illustration3.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 2">
                    <div class="carousel-caption-center">
                        <h1>Lingkungan Belajar Aman</h1>
                        <p>Tempat terbaik untuk tumbuh kembang anak</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-overlay"></div>
                    <img src="{{ URL('images/illustration2.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 3">
                    <div class="carousel-caption-center">
                        <h1>Kurikulum Islami</h1>
                        <p>Membentuk generasi cerdas dan berakhlak mulia</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="main-content">
            <div class="left-content">
                <h2>Ayo Daftar!</h2>
                <p>Mewujudkan anak didik yang bahagia, mandiri memiliki kecerdasan spiritual (SQ), kecerdasan Emosi (EQ), kecerdasan Intelektual (IQ) dan mengikuti perintah Alqur'an dan Hadist</p>
                <div class="image-container">
                    <img alt="Anak-anak sedang belajar di dalam kelas" height="300" src="{{ URL('images/illustartion88.jpg') }}" width="500"/>
                </div>
            </div>
            
            <div class="right-content">
                <div class="video-player">
                    <iframe
                    width="800"
                    height="230"
                    src="https://www.youtube.com/embed/C6PvVUzCSp4"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    ></iframe>
                </div>

                <div class="container">
    <h2 class="text-center mb-4">Prestasi TK Islam Kinasih</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="container p-3 rounded shadow-sm d-flex align-items-center mb-4" style="background-color: rgba(76, 127, 112, 0.9);">
                <i class="fas fa-trophy achievement-icon me-3" style="font-size: 30px; color: gold;"></i>
                <div>
                    <h5 class="mb-1 text-white">Juara....</h5>
                    <p class="mb-0 text-white-20">Deskripsi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container p-3 rounded shadow-sm d-flex align-items-center mb-4" style="background-color: rgba(76, 127, 112, 0.9);">
                <i class="fas fa-award achievement-icon me-3" style="font-size: 30px; color: silver;"></i>
                <div>
                    <h5 class="mb-1 text-white">Juara...</h5>
                    <p class="mb-0 text-white">Deskripsi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container p-3 rounded shadow-sm d-flex align-items-center mb-4" style="background-color: rgba(76, 127, 112, 0.9);">
                <i class="fas fa-star achievement-icon me-3" style="font-size: 30px; color: #FFD700;"></i>
                <div>
                    <h5 class="mb-1 text-white">Juara...</h5>
                    <p class="mb-0 text-white">Deskripsi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container p-3 rounded shadow-sm d-flex align-items-center mb-4" style="background-color: rgba(76, 127, 112, 0.9);">
                <i class="fas fa-medal achievement-icon me-3" style="font-size: 30px; color: #CD7F32;"></i>
                <div>
                    <h5 class="mb-1 text-white">Penghargaan......</h5>
                    <p class="mb-0 text-white">Deskripsi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
