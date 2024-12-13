<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Program Pembelajaran - TK Islam Kinasih</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #68A895;
            --secondary-color: #4F998A;
            --accent-color: #3A7D70;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f7;
            color: #2c3e50;
        }

        .page-header {
            background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .page-header h2 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .accordion-button {
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--secondary-color);
        }

        .accordion-body {
            background-color: #ecf0f1;
        }

        .extracurricular {
            background-color: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .extracurricular h3 {
            color: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
            margin-bottom: 1rem;
        }

        .extracurricular-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .extracurricular-item {
            text-align: center;
            padding: 1rem;
            margin: 0.5rem;
            background-color: #f8f9fa;
            border-radius: 10px;
            width: 200px;
            transition: transform 0.3s ease;
        }

        .extracurricular-item h5 {
    background: linear-gradient(135deg, #68A895 0%, #4F998A 100%); 
    -webkit-background-clip: text;
    background-clip: text; 
    color: transparent; 
    font-size: 1.2rem;
    font-weight: bold;
}

        .extracurricular-item:hover {
            transform: scale(1.3);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .extracurricular-item i {
            /* font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem; */
        }

        .image-container {
    position: relative;
    overflow: hidden; 
    border-radius: 10px;
}

.image-container img {
    width: 100%; /* Menyamakan ukuran gambar */
    height: 150px; /* Tetapkan tinggi tetap untuk semua gambar */
    object-fit: cover; /* Memotong gambar agar tetap proporsional dalam kontainer */
    transition: filter 0.3s ease; /* Animasi saat hover */
}

.icon-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3rem; /* Ukuran ikon */
    color: var(--primary-color); /* Warna ikon sesuai tema */
    opacity: 0; /* Ikon tidak terlihat secara default */
    transition: opacity 0.3s ease; /* Animasi muncul */
    pointer-events: none; /* Ikon tidak menghalangi klik */
}

/* .image-container:hover img {
    filter: blur(4px); 
} */

.image-container:hover .icon-overlay {
    opacity: 2; 
}

a.btn-warning {
    display: inline-block !important; /* Pastikan tombol terlihat */
    color: white; /* Atur warna teks agar terlihat */
}

.btn-sm {
    font-size: 0.8rem; /* Atur ukuran teks */
    padding: 0.2rem 0.4rem; /* Sesuaikan padding */
    margin: 0 0.1rem; /* Kurangi jarak antar tombol */
}


    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
@include('partials.adminnav')

@if(session('success'))
<script>
    Swal.fire(
        'Berhasil!',
        '{{ session('success') }}',
        'success'
    );
</script>
@endif


    <div class="page-header">
        <div class="container">
            <h2>Program Pembelajaran</h2>
            <p class="lead">"Kami menyediakan berbagai program pembelajaran untuk mendukung perkembangan anak secara menyeluruh."</p>
        </div>
    </div>

    <div class="container">
        <h3 class="mb-4">Kegiatan Harian di TK Islam Kinasih </h3>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
            <a href="{{ route('admin.aktivitas.create') }}" class="btn btn-warning">
              Tambah Aktivitas Baru
            </a>
        </div> <br />
        <div class="accordion" id="dailyActivitiesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRegular">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegular" aria-expanded="true" aria-controls="collapseRegular">
                        <i class="fas fa-clock me-2"></i> Reguler (07.00 – 11.15 WIB)
                    </button>
                </h2>
                <div id="collapseRegular" class="accordion-collapse collapse show" aria-labelledby="headingRegular" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            @foreach($reguler as $aktivitas)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><strong>{{ $aktivitas->urutan }}</strong>   {{ $aktivitas->nama_aktivitas }}</span>
                                    <div class="d-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <form action="{{ route('admin.aktivitas.edit', $aktivitas->id) }}" method="GET">
                                            <button type="submit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </button>
                                        </form>

                                        <!-- Tombol Delete -->
                                        <form id="delete-{{ $aktivitas->id }}" action="{{ route('admin.aktivitas.destroy', $aktivitas->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $aktivitas->id }})">
                                                <i class="bi bi-trash3"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingHalfDay">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalfDay" aria-expanded="false" aria-controls="collapseHalfDay">
                        <i class="fas fa-sun me-2"></i> Half Day (07.00 – 13.00 WIB)
                    </button>
                </h2>
                <div id="collapseHalfDay" class="accordion-collapse collapse" aria-labelledby="headingHalfDay" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            @foreach($halfDay as $aktivitas)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><strong>{{ $aktivitas->urutan }}</strong>   {{ $aktivitas->nama_aktivitas }}</span>
                                    <div class="d-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <form action="{{ route('admin.aktivitas.edit', $aktivitas->id) }}" method="GET">
                                            <button type="submit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </button>
                                        </form>

                                        <!-- Tombol Delete -->
                                        <form id="delete-{{ $aktivitas->id }}" action="{{ route('admin.aktivitas.destroy', $aktivitas->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $aktivitas->id }})">
                                                <i class="bi bi-trash3"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFullDay">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFullDay" aria-expanded="false" aria-controls="collapseFullDay">
                        <i class="fas fa-calendar-day me-2"></i> Full Day (07.00 – 17.00 WIB)
                    </button>
                </h2>
                <div id="collapseFullDay" class="accordion-collapse collapse" aria-labelledby="headingFullDay" data-bs-parent="#dailyActivitiesAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            @foreach($fullDay as $aktivitas)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><strong>{{ $aktivitas->urutan }}</strong>   {{ $aktivitas->nama_aktivitas }}</span>
                                    <div class="d-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <form action="{{ route('admin.aktivitas.edit', $aktivitas->id) }}" method="GET">
                                            <button type="submit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </button>
                                        </form>

                                        <!-- Tombol Delete -->
                                        <form id="delete-{{ $aktivitas->id }}" action="{{ route('admin.aktivitas.destroy', $aktivitas->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $aktivitas->id }})">
                                                <i class="bi bi-trash3"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="extracurricular mt-5">
            <h3><i class="fas fa-trophy me-2"></i>Ekstrakurikuler</h3>
            
            <p>Ekstrakurikuler TK Islam Kinasih bertujuan untuk memberikan wadah bagi peserta didik untuk mengembangkan dan mengekspresikan diri sesuai dengan kebutuhan, bakat, dan minat setiap peserta didik.</p>
            <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
                <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-warning">
                Tambah Ekstrakurikuler Baru
                </a>
            </div><br />
            
            
            
            <div class="extracurricular-list">
                @foreach ($ekstrakurikulers as $ekstrakurikuler)
                    <div class="extracurricular-item">
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $ekstrakurikuler->image) }}" alt="{{ $ekstrakurikuler->nama }}" class="img-fluid rounded">
                            {{-- <i class="fas fa-futbol icon-overlay"></i> --}}
                        </div>
                        <h5>{{ $ekstrakurikuler->nama }}</h5>
                        <div class="d-flex justify-content-between">
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.ekstrakurikuler.edit', $ekstrakurikuler->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                        
                            <!-- Tombol Delete -->
                            <form id="delete-{{ $ekstrakurikuler->id }}" action="{{ route('admin.ekstrakurikuler.destroy', $ekstrakurikuler->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $ekstrakurikuler->id }})">
                                    <i class="bi bi-trash3"></i> Delete
                                </button>
                            </form>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/confirmDeletion.js')}}"></script>
    @include('partials.footer')

    
</body>
</html>