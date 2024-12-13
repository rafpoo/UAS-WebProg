<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
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

    .card {
      background-color: #2D6A4F;
      border-radius: 20px;
      padding: 20px;
      color: white;
      text-align: center;
      margin: 20px;
    }

    .card img {
      border-radius: 15px;
      width: 100%;
      height: auto;
    }
    .card-body h5,
    .card-body h6,
    .card-body p {
        color: #000;
    }
</style>

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
  <h1 style="text-align: center;">Event</h1>
  <p style="text-align: center;">
    Event di Taman Kanak-Kanak (TK) merupakan bagian penting<br />
    dari kegiatan sekolah yang dirancang untuk memberikan<br />
    pengalaman belajar yang menyenangkan sekaligus mendukung<br />
    perkembangan anak secara holistik. Berikut adalah contoh<br />
    keterangan mengenai event yang sering diadakan di TK:<br />
    <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
      <a href="{{ route('admin.acara.create') }}" class="btn btn-warning">
        Tambah Event Baru
      </a>
    </div>
  </p>
  
  @if($events->isEmpty())
    <div class="card h-100">
      <p>Tidak ada data tersedia.</p>
    </div>
  @else
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($events as $event)
        <div class="col">
            <div class="card h-100">
                <!-- Gambar -->
                <img src="{{ asset('storage/' . $event->image) }}" 
                     class="card-img-top img-fluid" 
                     alt="{{ $event->title }}" 
                     style="object-fit: cover; height: 200px;">
                
                <!-- Body Card -->
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }} {{ $event->id }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted" style="color: #000;">{{ $event->date }}</h6>
                    <p class="card-text">{{ $event->descriptions }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.acara.edit', $event->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i>Edit</a>

                    <!-- Tombol Delete -->
                    <form id="delete-{{ $event->id }}" action="{{ route('admin.acara.destroy', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $event->id }})">
                            <i class="bi bi-trash3"></i> Delete
                        </button>
                    </form>
                  
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
  @endif


    

  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/confirmDeletion.js')}}"></script>

  @include('partials.footer')
</body>

</html>
