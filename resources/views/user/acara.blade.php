<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  @include('global_css.css')
  @include('css_in_view.acara_css')
  
</head>

<body>

  @include('partials.navbar')
  
  <div class="container">
  <h1 style="text-align: center;">Event</h1>
  <p style="text-align: center;">
    Event di Taman Kanak-Kanak (TK) merupakan bagian penting<br />
    dari kegiatan sekolah yang dirancang untuk memberikan<br />
    pengalaman belajar yang menyenangkan sekaligus mendukung<br />
    perkembangan anak secara holistik. Berikut adalah contoh<br />
    keterangan mengenai event yang sering diadakan di TK:<br />
    {{-- <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex; justify-content: center; margin-top: 20px;">
      <a href="{{ route('admin.acara.create') }}" class="btn btn-warning">
        Tambah Event Baru
      </a>
    </div> --}}
  </p>

  <hr style="height:4px" />

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
                          <h5 class="card-title">{{ $event->title }}</h5>
                          <h6 class="card-subtitle mb-2" style="color:#AAAAAA">{{ $event->date }}</h6>
                          <p class="card-text">{{ $event->descriptions }}</p>
                      </div>

                      <!-- Footer Card -->
                      {{-- <div class="d-flex justify-content-between">
                          <!-- Tombol Edit -->
                          <a href="{{ route('admin.acara.edit', $event->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i>Edit</a>

                          <!-- Tombol Delete -->
                          <form action="{{ route('admin.acara.destroy', $event->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm"
                                      onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')">
                                      <i class="bi bi-trash3"></i>Delete
                              </button>
                          </form>
                      </div> --}}
                  </div>
              </div>
          @endforeach
      </div>
  </div>
  @endif
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <br /><br /><br />
  @include('partials.footer')
</body>

</html>
