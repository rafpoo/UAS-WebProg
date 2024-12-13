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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <h1>Edit Guru</h1>

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

        <form action="{{ route('admin.guru.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama guru -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $teacher->nama }}" required>
            </div>

            <!-- Deskripsi guru -->
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input class="form-control" id="jabatan" name="jabatan" value="{{ $teacher->jabatan }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_bergabung" class="form-label">Tanggal bergabung</label>
                <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" value="{{ $teacher->tanggal_bergabung }}"  required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="date" class="form-control" id="keterangan" name="keterangan">{{ $teacher->keterangan }}</textarea>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Gambar (kosongkan jika tidak ingin mengganti)(Ukuran Max 2MB)</label>
                <img src="{{ asset('storage/' . $teacher->photo) }}" alt="Gambar Saat Ini" style="width: 150px; display: block; margin-bottom: 10px;">
            </div>
            
            <div class="mb-3">
                <input type="file" class="form-control" id="photo" name="photo" accept="photo/*" onchange="validateFileSize(this)">
            </div>
            

            <button type="submit" class="btn btn-primary">Update</button>
        </form><br />
        <form action="{{ route('admin.guru.photo.destroy', $teacher->id) }}" method="POST" style="margin-bottom: 10px;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">
                Hapus Foto Profil
            </button>
        </form>
    </div>

    @include('partials.footer')
</body>
<script src="{{ asset('js/validateImg.js') }}"></script>
</html>
