<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Admin - Data Guru - TK Islam Kinasih</title>
        <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        @include('global_css.css')
        @include('css_in_view.guru_css')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
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

        <div class="container">
            <div class="header">
                <h1>Guru Kami</h1>
                <p>TK Islam Kinasih</p>
                <p>"Guru kami berpendidikan dan penyayang, selalu berdedikasi untuk menginspirasi siswa dengan metode pembelajaran kreatif, serta membentuk karakter positif yang mendukung tumbuh kembang anak secara maksimal."</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
                <a href="{{ route('admin.guru.create') }}" class="btn btn-warning">
                    Tambah Guru Baru
                </a>
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
                            <div class="details role" style="color: #ffffff;">{{ $teacher->jabatan }}</div>
                            <div class="details additional-info" style="color: #ffffff;">{{ $teacher->tanggal_bergabung }}</div>
                            <div class="experience" style="color: #ffffff;">{{ $teacher->keterangan }}</div>
                            <div class="d-flex justify-content-between">
                                <!-- Tombol Edit -->
                                <form action="{{ route('admin.guru.edit', $teacher->id) }}" method="GET">
                                    <button type="submit" class="btn btn-warning btn-md">
                                        <i class="bi bi-pencil-square"></i>Edit
                                    </button>
                                </form>
                                {{-- <a href="{{ route('admin.guru.edit', $teacher->id) }}" class="btn btn-warning btn-md"><i class="bi bi-pencil-square"></i>Edit</a> --}}
        
                                <!-- Tombol Delete -->
                                <form id="delete-{{ $teacher->id }}" action="{{ route('admin.guru.destroy', $teacher->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $teacher->id }})">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('partials.footer')
        <script src="{{ asset('js/confirmDeletion.js')}}"></script>
    </body>
</html>
