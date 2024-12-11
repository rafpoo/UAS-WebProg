<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih - Tentang Kami</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />


    <?php echo $__env->make('global_css.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('css_in_view.home_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        :root {
            --soft-emerald: #10B981;
            --sage-green: #6B8E23;
            --mint-green: #3CB371;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: linear-gradient(135deg, #f4f7f6 0%, #e6efe7 100%);
            color: #2c3e50;
        }

        .elegant-shadow {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1), 0 15px 40px rgba(0, 0, 0, 0.05);
        }

        .emerald-gradient {
            background: linear-gradient(45deg, var(--soft-emerald), var(--mint-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .elegant-border {
            position: relative;
            overflow: hidden;
        }

        .elegant-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--sage-green), var(--mint-green));
            opacity: 0.7;
        }

        .premium-card {
            transition: all 0.4s ease-in-out;
            border-radius: 1rem;
        }

        .premium-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .section-title {
            font-family: 'Cormorant Garamond', serif;
            position: relative;
            text-align: center;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: linear-gradient(to right, transparent, var(--soft-emerald), transparent);
            opacity: 0.6;
        }

        .soft-background {
            background: linear-gradient(to bottom right, #f9fafa, #f0f5f0);
        }
    </style>
</head>

<body>
    <!-- Navbar (Existing Implementation) -->
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><br />

    <div class="container mx-auto px-8 py-16">
        <!-- Header Section -->
        <header class="text-center mb-24">
            <h1 class="text-7xl font-bold text-white mb-8 font-['Cormorant_Garamond']">
                TK Islam Kinasih
            </h1>
            <p class="text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed font-light">
                Lembaga Pendidikan Anak Usia Dini yang Berdedikasi Mengembangkan Potensi Anak Secara Holistik
            </p>
        </header>

        <!-- Visi dan Misi Section -->
        <section class="mb-24">
            <div class="bg-white rounded-3xl elegant-shadow p-16 soft-background elegant-border premium-card">
                <h2 class="text-5xl font-bold text-center emerald-gradient mb-16 section-title">
                    Visi dan Misi
                </h2>

                <div class="grid md:grid-cols-2 gap-16">
                    <!-- Visi -->
                    <div class="bg-gray-50 p-10 rounded-2xl border border-opacity-20 border-green-600">
                        <h3 class="font-semibold text-4xl mb-8 text-green-800">Visi</h3>
                        <p class="italic text-gray-700 text-xl leading-relaxed font-['Cormorant_Garamond']">
                            "Mewujudkan anak didik yang bahagia, mandiri memiliki kecerdasan spiritual (SQ),
                            kecerdasan Emosi (EQ), kecerdasan Intelektual (IQ) dan mengikuti perintah Alqur'an dan Hadist"
                        </p>
                    </div>

                    <!-- Misi -->
                    <div>
                        <h3 class="font-semibold text-4xl mb-8 text-green-800">Misi</h3>
                        <ul class="space-y-8">
                            <?php
                            $misis = [
                            "Menyediakan sarana untuk mengembangkan kecerdasan dan potensi anak sejak dini",
                            "Mewujudkan kegiatan bermakna untuk mengembangkan keterampilan menolong diri sendiri",
                            "Menjalin kemitraan dengan para pakar (Ulama, dokter, psikolog, seniman, atlet)",
                            "Mewujudkan Taman kanak-kanak yang bersih, hijau, nyaman dan dinamis"
                            ];
                            ?>

                            <?php $__currentLoopData = $misis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="bg-gray-50 p-6 rounded-2xl border border-opacity-20 border-green-600 flex items-center">
                                <i class="fas fa-leaf mr-6 text-2xl text-green-600"></i>
                                <span class="text-gray-800 text-xl"><?php echo e($misi); ?></span>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kenapa Pilih TK Islam Kinasih -->
        <section class="mb-24">
            <h2 class="text-6xl font-bold text-white mb-8 text-center section-title">
                Kenapa Memilih TK Islam Kinasih?
            </h2>

            <div class="grid md:grid-cols-2 gap-16 mb-16">
                
                <div class="bg-white rounded-3xl elegant-shadow p-12 soft-background elegant-border premium-card">
                    <p class="text-gray-700 text-xl">
                        TK Islam Kinasih merupakan lembaga Pendidikan Anak Usia Dini (PAUD) yang mencakup
                        Taman Penitipan Anak (TPA), Kelompok Bermain (KB), dan Taman Kanak-Kanak (TK).
                        Berada di bawah naungan Yayasan Islam Kinasih, lembaga ini berdedikasi untuk
                        memberikan pendidikan berkualitas bagi anak-anak usia dini.
                    </p>
                </div>

               
                <div class="bg-white rounded-3xl elegant-shadow p-12 soft-background elegant-border premium-card">
                    <p class="text-gray-700 mb-8 text-xl">
                        Dengan tenaga pendidik yang profesional dan penyayang, kami bertujuan membangun
                        karakter, keterampilan, dan pengetahuan anak-anak sebagai bekal mereka dalam
                        menghadapi jenjang pendidikan berikutnya.
                    </p>
                </div>
            </div>

        </section>

        <!-- Kurikulum dan Pembelajaran -->
        <section>
            <div class="grid md:grid-cols-2 gap-16 mb-16">
                <!-- Kurikulum -->
                <div class="bg-white rounded-3xl elegant-shadow p-12 soft-background elegant-border premium-card">
                    <h3 class="text-4xl font-semibold emerald-gradient mb-10 flex items-center">
                        <i class="fas fa-book-open mr-6 text-3xl text-green-600 opacity-80"></i>
                        Kurikulum
                    </h3>
                    <p class="text-gray-700 text-xl">
                        Menerapkan kurikulum merdeka berlandaskan Al-Qur'an dan Hadist,
                        serta sesuai dengan tahap perkembangan dan kebutuhan anak.
                    </p>
                </div>

                <!-- Model Pembelajaran -->
                <div class="bg-white rounded-3xl elegant-shadow p-12 soft-background elegant-border premium-card">
                    <h3 class="text-4xl font-semibold emerald-gradient mb-10 flex items-center">
                        <i class="fas fa-book-open mr-6 text-3xl text-green-600 opacity-80"></i>
                        Model Pembelajaran
                    </h3>
                    <p class="text-gray-700 mb-8 text-xl">
                        Menggunakan pendekatan Sentra (BCCT) yang memenuhi tiga jenis main:
                        sensorimotor, pembangunan, dan peran.
                    </p>
                    <div class="bg-gray-50 p-8 rounded-2xl border border-opacity-20 border-green-600">
                        <h4 class="font-semibold text-green-800 mb-6 text-2xl">Sentra yang Diterapkan:</h4>
                        <?php
                        $sentras = [
                        "Sentra bahan alam",
                        "Sentra balok",
                        "Sentra seni",
                        "Sentra persiapan",
                        "Sentra imtaq",
                        "Sentra main peran"
                        ];
                        ?>
                        <div class="grid grid-cols-2 gap-4 text-gray-700">
                            <?php $__currentLoopData = $sentras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sentra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center text-lg">
                                <i class="fas fa-seedling mr-3 text-green-600"></i>
                                <?php echo e($sentra); ?>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pendekatan Pembelajaran -->
            <div class="bg-white rounded-3xl elegant-shadow p-16 soft-background elegant-border premium-card">
                <h3 class="text-4xl font-semibold emerald-gradient mb-10 flex items-center">
                    <i class="fas fa-book-open mr-6 text-3xl text-green-600 opacity-80"></i>
                    Pendekatan Pembelajaran
                </h3>
                <p class="text-gray-700 text-xl">
                    Menggunakan pendekatan holistik integratif, saintifik, dan diferensiasi
                    untuk mengembangkan potensi anak secara menyeluruh.
                </p>
            </div>
        </section>
    </div>

    <!-- Footer (Existing Implementation) -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\ziyad\Downloads\cakung\UAS-WebProg\resources\views/user/aboutUs.blade.php ENDPATH**/ ?>