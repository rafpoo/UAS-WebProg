<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Aktivitas</title>
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
    <div class="container">
    
        <h1>Tambah Aktivitas</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.aktivitas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_aktivitas" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_aktivitas" name="nama_aktivitas" placeholder="Masukkan nama aktivitas" required>
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Tipe Aktivitas</label>
                <select id="tipe" name="tipe" class="form-select" required>
                    <option value="Reguler">Reguler</option>
                    <option value="Half Day">Half Day</option>
                    <option value="Full Day">Full Day</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="urutan" class="form-label">Urutan</label>
                <input type="number" name="urutan" class="form-control" required>
            </div>
            

            <button type="submit" class="btn btn-primary">Tambahkan</button>
            <a href="{{ route('admin.aktivitas.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    @include('partials.footer')


</body>
</html>
