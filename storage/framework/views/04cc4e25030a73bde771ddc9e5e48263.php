<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Data Guru - TK Islam Kinasih</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
    body 
    {
                background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
                color: white;
                font-family: 'Arial', sans-serif;
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
            .staff-profiles {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
            .staff-card {
                background-color: rgba(76, 127, 112, 0.7);
                border-radius: 10px;
                padding: 20px;
                transition: background-color 0.3s ease;
                text-align: left;
            }
            .staff-card:hover {
                background-color: rgba(76, 127, 112, 0.9);
            }
            .staff-card h2 {
                margin: 0 0 10px 0;
                font-size: 1.2em;
                color: white;
            }
            .staff-card .details {
                margin: 5px 0;
                color: #e0e0e0;
            }
            .staff-card .role {
                font-weight: bold;
                margin-bottom: 5px;
            }
            .staff-card .education {
                font-style: italic;
            }
            .staff-card .additional-info {
                font-size: 0.9em;
                color: #d0d0d0;
            }
            .staff-card .experience {
                font-size: 0.85em;
                color: #c0c0c0;
                margin-top: 10px;
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

    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
    <div class="header">
        <h1>Data Guru</h1>
        <p>TK Islam Kinasih</p>
    </div>
    <div class="container">
            <div class="staff-profiles">
                <div class="staff-card">
                    <h2>Betty Sumartini, M.Pd</h2>
                    <div class="details role">Kepala TK</div>
                    <div class="details education">Pendidikan: Magister Pendidikan</div>
                    <div class="details additional-info">Bergabung: 01-Jan-2019</div>
                    <div class="experience">Pengalaman Mengajar: 12+ Tahun</div>
                </div>
                <div class="staff-card">
                    <h2>Sri Rahmawati, S.Pd</h2>
                    <div class="details role">Guru Kelas</div>
                    <div class="details education">Pendidikan: Sarjana Pendidikan</div>
                    <div class="details additional-info">Bergabung: 17/08/2017</div>
                    <div class="experience">Spesialisasi: Pendidikan Anak Usia Dini</div>
                </div>
                <div class="staff-card">
                    <h2>Qomariah Maklar, S.Pd</h2>
                    <div class="details role">Guru Kelas</div>
                    <div class="details education">Pendidikan: Sarjana Pendidikan</div>
                    <div class="details additional-info">Bergabung: 14/07/2018</div>
                    <div class="experience">Keahlian: Pengembangan Kreativitas Anak</div>
                </div>
                <div class="staff-card">
                    <h2>Nurul Dalilah Syafhira, S.Pd</h2>
                    <div class="details role">Guru Kelas</div>
                    <div class="details education">Pendidikan: Sarjana Pendidikan</div>
                    <div class="details additional-info">Bergabung: 07-Jan-2019</div>
                    <div class="experience">Fokus: Pembelajaran Interaktif</div>
                </div>
                <div class="staff-card">
                    <h2>Juliana Andrew, S.Pd</h2>
                    <div class="details role">Guru Kelas</div>
                    <div class="details education">Pendidikan: Sarjana Pendidikan</div>
                    <div class="details additional-info">Bergabung: 14-Feb-2020</div>
                    <div class="experience">Keahlian: Metode Pengajaran Inovatif</div>
                </div>
                <div class="staff-card">
                    <h2>Insanirha Fahiyah Mutona</h2>
                    <div class="details role">Guru Pendamping</div>
                    <div class="details education">Pendidikan: SMA</div>
                    <div class="details additional-info">Bergabung: 14-Jul-2022</div>
                    <div class="experience">Peran: Asisten Pengajar</div>
                </div>
                <div class="staff-card">
                    <h2>Wafa Ajeng Mawaddah, S.Pd</h2>
                    <div class="details role">Guru Kelas</div>
                    <div class="details education">Pendidikan: Sarjana Pendidikan</div>
                    <div class="details additional-info">Bergabung: 10-Jul-2023</div>
                    <div class="experience">Spesialisasi: Pengembangan Karakter Anak</div>
                </div>
                <div class="staff-card">
                    <h2>Puput Reva Aqila</h2>
                    <div class="details role">Guru Pendamping</div>
                    <div class="details education">Pendidikan: Paket C</div>
                    <div class="details additional-info">Bergabung: 01/10/2017</div>
                    <div class="experience">Peran: Asisten Pendidik</div>
                </div>
                <div class="staff-card">
                    <h2>Oki Puji Lestari, S.Pd</h2>
                    <div class="details role">Tata Usaha</div>
                    <div class="details education">Pendidikan: Sarjana Pendidikan</div>
                    <div class="details additional-info">Bergabung: 13-Sep-2016</div>
                    <div class="experience">Keahlian: Administrasi Pendidikan</div>
                </div>
                <div class="staff-card">
                    <h2>Kowiyah</h2>
                    <div class="details role">Tenaga Kebersihan</div>
                    <div class="details education">Pendidikan: Sekolah Dasar</div>
                    <div class="details additional-info">Bergabung: 01-Jul-2013</div>
                    <div class="experience">Masa Kerja: 10+ Tahun</div>
                </div>
                <div class="staff-card">
                    <h2>Murtapiah</h2>
                    <div class="details role">Tenaga Kebersihan</div>
                    <div class="details education">Pendidikan: Tidak Tersedia</div>
                    <div class="details additional-info">Bergabung: 01 Juli 2022</div>
                    <div class="experience">Peran: Pemeliharaan Fasilitas</div>
                </div>
                <div class="staff-card">
                    <h2>Hamidah</h2>
                    <div class="details role">Tenaga Kebersihan</div>
                    <div class="details education">Pendidikan: SMA</div>
                    <div class="details additional-info">Bergabung: 15 Juli 2023</div>
                    <div class="experience">Peran: Kebersihan dan Kerapihan</div>
                </div>
                <div class="staff-card">
                    <h2>Ferdiansyah Pratama Putra</h2>
                    <div class="details role">Satpam</div>
                    <div class="details education">Pendidikan: SMA</div>
                    <div class="details additional-info">Bergabung: 01 Juli 2023</div>
                    <div class="experience">Keahlian: Keamanan dan Pengawasan</div>
                </div>
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
    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
    </html><?php /**PATH C:\xampp\htdocs\uazz\UAS-WebProg\resources\views/user/guru.blade.php ENDPATH**/ ?>