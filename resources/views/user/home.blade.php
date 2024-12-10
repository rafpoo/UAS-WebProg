<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TPA - KB - TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

    @include('global_css.css')
    @include('css_in_view.home_css')
    
</head>

<body>
    @include('partials.navbar')

    <div class="container">
        <div class="header">
            <h1>Buat Anak Bermain sambil Belajar</h1>
            <p>Membentuk Fondasi Karakter Menjadi Investasi Utama Untuk Mewujudkan Anak Hebat, Kreatif Dan Mampu Beradaptasi Dengan Situasi Melalui Kurikulum Dan Guru Kreatif Serta Berinovasi</p>
            <button onclick="window.location.href='/PPDB'">
                DAFTAR DI SINI
            </button>
        </div>

        <!-- Slideshow -->
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
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
                <p>Bersama TK Islam Kinasih, temukan pendidikan terbaik untuk buah hati Anda dengan kurikulum berbasis nilai-nilai Islam untuk membentuk generasi cerdas, berakhlak mulia, dan siap menghadapi masa depan. Kami menghadirkan metode belajar interaktif dan menyenangkan melalui kegiatan belajar sambil bermain yang didukung oleh fasilitas yang aman dan nyaman. Dengan fasilitas modern serta lingkungan yang damai dan riang, kami mendukung tumbuh kembang anak secara optimal.</p>
                <div class="image-container">
                    <img alt="Anak-anak sedang belajar di dalam kelas" height="300" src="https://storage.googleapis.com/a1aa/image/JlIxHtt6WUYONdFCec4nBxWQsng4S4eFbi5lZafeWkIdkRiPB.jpg" width="500"/>
                </div>
            </div>
            
            <div class="right-content">
                <div class="video-player">
                    <i class="fas fa-play-circle"></i>
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
</div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
