<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TPA - KB - TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

    <style>
        body {
            background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
    color: white;
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-attachment: fixed;
        }

        .navbar {
            background-color: #4F998A;
        }

        .navbar-brand img {
            height: 50px;
        }

        .nav-link {
            color: white !important;
        }

        .carousel-item img {
            border-radius: 20px;
    transition: transform 0.5s ease-in-out;
    object-fit: cover;
    height: 500px;
    width: 100%;
        }
        .carousel-inner {
    border-radius: 20px;
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

        .header {
            background: rgba(0,0,0,0.3);
            text-align: center;
            padding: 80px 20px;
            color: white;
            border-radius: 15px;
        }

        .header h1 {
            font-family: 'Fredoka One', cursive;
            font-size: 48px;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .header p {
            font-size: 18px;
            color: #fff;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .header button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .header button:hover {
            background-color: #45a049;
        }
        @media (max-width: 768px) {
            .header {
                padding: 60px 15px;
            }
            .header h1 {
                font-size: 36px;
            }
            .header p {
                font-size: 16px;
            }
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
        .carousel-image {
            transition: transform 0.5s ease-in-out;
            object-fit: cover;
            height: 500px;
            width: 100%;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            z-index: 1;
        }

        .carousel-caption-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 2;
            color: white;
            max-width: 80%;
        }

        .carousel-caption-center h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .carousel-caption-center p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .carousel-item {
    border-radius: 20px;
    overflow: hidden;
}

        @media (max-width: 768px) {
            .carousel-image {
                height: 300px;
            }

            .carousel-caption-center h1 {
                font-size: 2rem;
            }

            .carousel-caption-center p {
                font-size: 1rem;
            }
        }
        #carouselExampleAutoplaying {
        margin-top: 50px;
        margin-bottom: 50px; 
        border-radius: 20px;
        overflow: hidden;
        }
    .carousel-item,
    .carousel-image {
        border-radius: 10px;
    }

@media (max-width: 768px) {
    #carouselExampleAutoplaying {
        margin-top: 15px; 
        margin-bottom: 15px;
        border-radius: 10px; /* Menambahkan border radius pada carousel */
    overflow: hidden; 
    }
}
.footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #333;
        padding: 10px 0;
    }

    .social-icon {
        margin: 0 10px;
    }

    .social-icon img {
        transition: transform 0.3s ease;
    }

    .social-icon:hover img {
        transform: scale(1.1);
    }
    </style>
</head>

<body>
    @include('partials.adminnav')

    <div class="container">
        <div class="header">
            <h1>Selamat Datang di Halaman Admin TK Islam Kinasih</h1>
            <p>Disini, Anda bisa melakukan penambahan, penyuntingan, dan penghapusan pada bagian 'Acara',
                'Profil guru', dan 'Gallery'. Selain itu, Anda juga bisa melihat data PPDB yang sudah disubmit
                oleh user.
            </p>
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