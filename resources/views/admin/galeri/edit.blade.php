<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
      background-color: rgba(255,255,255,1.0);
      margin: 4px 0;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit galeri</h1>

        <!-- Tampilkan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama galeri -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $galeri->nama }}" required>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label for="image" class="form-label">Gambar (kosongkan jika tidak ingin mengganti)</label>
                <img src="{{ asset('storage/' . $galeri->image) }}" alt="Gambar Saat Ini" style="width: 150px; display: block; margin-bottom: 10px;">
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    @include('partials.footer')
</body>
</html>
