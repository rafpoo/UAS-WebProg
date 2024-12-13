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
        <h1>Data Guru</h1>
        <p>TK Islam Kinasih</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
        <a href="{{ route('admin.guru.create') }}" class="btn btn-warning">
            Tambah Guru Baru
        </a>
    </div>
    <div class="container">
        
            <div class="staff-profiles">
                
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
    
    @include('partials.footer')

    <script src="{{ asset('js/confirmDeletion.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>