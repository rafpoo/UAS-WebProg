<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Data Guru - TK Islam Kinasih</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>


        @include('global_css.css')
        @include('css_in_view.guru_css')
        
    </head>
    <body>

    @include('partials.navbar')
    <div class="container">
    <div class="header">
        <h1>Data Guru</h1>
        <p>TK Islam Kinasih</p>
    </div>
    <div class="container">
            <div class="staff-profiles">
                {{-- 
                </div> --}}
                @foreach($teachers as $teacher)
                    <div class="staff-card">
                        <img src="{{ $teacher->photo ? asset('storage/' . $teacher->photo) : asset('storage/teachers/default-profile.jpg') }}" 
                        class="card-img-top img-fluid" 
                        alt="{{ $teacher->nama }}" 
                        style="object-fit: cover; height: 300px;"><br /><br />
                        <h2>{{ $teacher->nama }}</h2>
                        <div class="details role">{{ $teacher->jabatan }}</div>
                        <div class="details additional-info">{{ $teacher->tanggal_bergabung }}</div>
                        <div class="experience">{{ $teacher->keterangan }}</div>
                    </div>
                @endforeach

        </div>

    <hr style="height:4px" />
    <div class="about-section">
        <div class="text">
        <h2>Guru Kami</h2>
        <p>"Guru kami berpendidikan dan penyayang, selalu berdedikasi untuk menginspirasi siswa dengan metode pembelajaran kreatif, serta membentuk karakter positif yang mendukung tumbuh kembang anak secara maksimal."</p>
        </div>
        <div class="image">
        <img class="w-100 h-100" alt="Illustration of a teacher" height="200" src="https://storage.googleapis.com/a1aa/image/tgbSGyISMDrBMRxewwNZ6oE7KfxfcyAwG0Lx3NbsoeVf6bEfE.jpg" width="200"/>
        </div>
    </div>
    </div>
   

    </body>
    @include('partials.footer')
</html>
