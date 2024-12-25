<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profil Guru TK Islam Kinasih">
    <title>Data Guru - TK Islam Kinasih</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
    
    <!-- External CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    @include('global_css.css')
    @include('css_in_view.guru_css')
    
    <style>
        .header {
            text-align: center;
            padding: 2rem 0;
            margin-bottom: 3rem;
        }
        
        .staff-profiles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }
        
        .staff-card {
            background-color: #2E8B57;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .staff-card:hover {
            transform: translateY(-5px);
        }
        
        .staff-card img {
            border-radius: 10px;
            margin-bottom: 1rem;
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        .staff-card h2 {
            color: #ffffff;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .details {
            margin-bottom: 0.5rem;
        }

        .details-label {
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
            color: #ffffff;
            opacity: 0.9;
        }
        
        .experience {
            font-style: italic;
            margin-top: 1rem;
        }
        .motto {
            margin-top: 1rem;
            padding: 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: #ffffff;
        }

        .motto-label {
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .motto-text {
            font-style: italic;
            font-size: 0.95rem;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main class="container">
        <div class="header">
        <h1 style="display: block; font-family: 'Times New Roman', Times, serif;">Guru Kami</h1>

            <p class="h4 mb-3">TK Islam Kinasih</p>
            <p class="lead">
                "Guru kami berpendidikan dan penyayang, selalu berdedikasi untuk menginspirasi siswa dengan metode pembelajaran kreatif, 
                serta membentuk karakter positif yang mendukung tumbuh kembang anak secara maksimal."
            </p>
        </div>

        <div class="container">
            <div class="staff-profiles">
                @foreach($teachers as $teacher)
                    <article class="staff-card">
                        <img src="{{ $teacher->photo ? asset('storage/' . $teacher->photo) : asset('storage/teachers/default-profile.jpg') }}" 
                             class="card-img-top img-fluid" 
                             alt="Foto {{ $teacher->nama }}" 
                             loading="lazy">
                        <h2>{{ $teacher->nama }}</h2>
                        <div class="details role">{{ $teacher->jabatan }}</div>
                        <div class="details-label">Tanggal Bergabung:</div>
                        <div class="details additional-info">{{ $teacher->tanggal_bergabung }}</div>
                        <div class="experience">{{ $teacher->keterangan }}</div>
                        <div class="motto">
                            <div class="motto-label">Motto Mengajar</div>
                            <div class="motto-text">{{ $teacher->motto }}</div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>