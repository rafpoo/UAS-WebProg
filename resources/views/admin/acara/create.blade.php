<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Acara</title>
    <link rel="icon" href="{{ asset('images/LogoTK.jpg') }}" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #85C7B3 0%, #68A895 100%);
            color: #333;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #4F998A;
        }

        .btn-primary {
            background-color: #4F998A;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3B7F6F;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    @if ($errors->has('photo'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first('photo') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <div class="container">
        <h1>Tambah Acara</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.acara.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nama</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan nama acara" required>
            </div>

            <div class="mb-3">
                <label for="descriptions" class="form-label">Deskripsi Acara</label>
                <textarea class="form-control" id="descriptions" name="descriptions" rows="4" 
                          placeholder="Masukkan deskripsi acara" required></textarea>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar (Ukuran Max 2MB)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="validateFileSize(this)" required>
                {{-- <input type="file" name="photo" accept="image/*" onchange="validateFileSize(this)"> --}}
            </div>

            <button type="submit" class="btn btn-primary">Tambahkan</button>
            <a href="{{ route('admin.acara.index') }}" class="btn btn-secondary">Cancel</a>
        </form>

    </div>
    @include('partials.footer')

    <script src="{{ asset('js/validateImg.js') }}"></script>
</body>
</html>
