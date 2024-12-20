<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih - Tentang Kami</title>
    <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS dan JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #4F998A;
            --primary-dark: #3d7b6e;
            --primary-light: #68A895;
            --accent-color: #ECF8F6;
            --text-color: #2C3E50;
            --light-bg: #F5F9F8;
            --border-color: rgba(79, 153, 138, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero {
            background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            padding: 80px 20px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 6px rgba(79, 153, 138, 0.2);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-family: 'Garamond', serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.95;
        }

       
.card {
    background: white;
    color: var(--text-color); /* Pastikan warna ini cukup kontras */
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(79, 153, 138, 0.1);
    padding: 30px;
    margin: 20px 0;
    border: 1px solid var(--border-color);
}

/* Ensure text readability */
.card h1, .card h2, .card h3, .card p, .card ul, .card li {
    color: var(--text-color); /* Tetap gunakan warna teks yang kontras */
}

.visi-misi, .feature-card, .sentra-item {
    color: var(--primary-dark); /* Gunakan warna sedikit lebih gelap untuk kontras */
}

        .section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary-dark);
            margin-bottom: 40px;
        }

        .grid {
            display: grid;
            gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .visi-misi {
            background: white;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 15px rgba(79, 153, 138, 0.1);
        }

        .visi-misi h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .visi-misi h3 i {
            margin-right: 12px;
            color: var(--primary-light);
        }

        .mission-list {
            list-style: none;
        }

        .mission-list li {
            background: var(--accent-color);
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            transition: transform 0.2s;
        }

        .mission-list li:hover {
            transform: translateX(5px);
        }

        .mission-list li i {
            color: var(--primary-color);
            margin-right: 15px;
        }

        /* Sentra Grid */
        .sentra-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .sentra-item {
            background: var(--accent-color);
            padding: 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            border: 1px solid var(--border-color);
            transition: transform 0.2s;
        }

        .sentra-item:hover {
            transform: translateY(-3px);
        }

        .sentra-item i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        /* Features Section */
        .feature-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(79, 153, 138, 0.1);
            border: 1px solid var(--border-color);
        }

        .feature-card h3 {
            display: flex;
            align-items: center;
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .feature-card i {
            margin-right: 15px;
            font-size: 1.25rem;
            color: var(--primary-light);
        }

        /* Hover Effects */
        .feature-card:hover {
            box-shadow: 0 6px 20px rgba(79, 153, 138, 0.15);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
                color: white;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>TK Islam Kinasih</h1>
            <p>Lembaga Pendidikan Anak Usia Dini yang Berdedikasi Mengembangkan Potensi Anak Secara Holistik</p>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="section">
        <div class="container">
        <h2 class="section-title" style="color: white;">Visi dan Misi</h2>
            <div class="grid">
                <div class="visi-misi">
                    <h3><i class="fas fa-eye"></i> Visi</h3>
                    <p>"Mewujudkan anak didik yang bahagia, mandiri memiliki kecerdasan spiritual (SQ), kecerdasan Emosi (EQ), kecerdasan Intelektual (IQ) dan mengikuti perintah Alqur'an dan Hadist"</p>
                </div>
                <div class="visi-misi">
                    <h3><i class="fas fa-bullseye"></i> Misi</h3>
                    <ul class="mission-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Menyediakan sarana untuk mengembangkan kecerdasan dan potensi anak sejak dini</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Mewujudkan kegiatan bermakna untuk mengembangkan keterampilan menolong diri sendiri</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Menjalin kemitraan dengan para pakar (Ulama, dokter, psikolog, seniman, atlet)</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Mewujudkan Taman kanak-kanak yang bersih, hijau, nyaman dan dinamis</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
        <h2 class="section-title" style="color: white;">Kenapa Memilih TK Islam Kinasih?</h2>
            <div class="grid">
                <div class="feature-card">
                    <p>TK Islam Kinasih merupakan lembaga Pendidikan Anak Usia Dini (PAUD) yang mencakup Taman Penitipan Anak (TPA), Kelompok Bermain (KB), dan Taman Kanak-Kanak (TK). Berada di bawah naungan Yayasan Islam Kinasih, lembaga ini berdedikasi untuk memberikan pendidikan berkualitas bagi anak-anak usia dini.</p>
                </div>
                <div class="feature-card">
                    <p>Dengan tenaga pendidik yang profesional dan penyayang, kami bertujuan membangun karakter, keterampilan, dan pengetahuan anak-anak sebagai bekal mereka dalam menghadapi jenjang pendidikan berikutnya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section class="section">
        <div class="container">
            <div class="grid">
                <div class="feature-card">
                    <h3><i class="fas fa-book"></i> Kurikulum</h3>
                    <p>Menerapkan kurikulum merdeka berlandaskan Al-Qur'an dan Hadist, serta sesuai dengan tahap perkembangan dan kebutuhan anak.</p>
                </div>
                <div class="feature-card">
                    <h3><i class="fas fa-chalkboard-teacher"></i> Model Pembelajaran</h3>
                    <p>Menggunakan pendekatan Sentra (BCCT) yang memenuhi tiga jenis main: sensorimotor, pembangunan, dan peran.</p>
                    <div class="sentra-grid">
                        <div class="sentra-item">
                            <i class="fas fa-star"></i>
                            <span>Sentra bahan alam</span>
                        </div>
                        <div class="sentra-item">
                            <i class="fas fa-star"></i>
                            <span>Sentra balok</span>
                        </div>
                        <div class="sentra-item">
                            <i class="fas fa-star"></i>
                            <span>Sentra seni</span>
                        </div>
                        <div class="sentra-item">
                            <i class="fas fa-star"></i>
                            <span>Sentra persiapan</span>
                        </div>
                        <div class="sentra-item">
                            <i class="fas fa-star"></i>
                            <span>Sentra imtaq</span>
                        </div>
                        <div class="sentra-item">
                            <i class="fas fa-star"></i>
                            <span>Sentra main peran</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-card" style="margin-top: 30px;">
                <h3><i class="fas fa-graduation-cap"></i> Pendekatan Pembelajaran</h3>
                <p>Menggunakan pendekatan holistik integratif, saintifik, dan diferensiasi untuk mengembangkan potensi anak secara menyeluruh.</p>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>