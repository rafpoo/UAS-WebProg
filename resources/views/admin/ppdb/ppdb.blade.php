

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
      background-color: rgba(255,255,255,1.0);
      margin: 4px 0;
    }
    .card {
            background-color: #d6f5eb;
            border-radius: 15px;
            overflow: hidden;
        }

        .form-section {
            padding: 40px;
        }

        .illustration {
            background-color: #488875;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .illustration img {
            max-width: 90%;
            height: auto;
        }

        .btn-daftar {
            background-color: #ffd500;
            border: none;
            font-weight: bold;
            color: #4F998A;
        }

        .btn-daftar:hover {
            background-color: #ffc107;
        }
        .form-label {
            color: black
        }
    </style>
</head>
<body>
    @include('partials.adminnav')
    <br />

    <div class="container">
        <h1 style="color: rgb(5, 70, 56);">Data PPDB</h1>
    
        <!-- Form Pencarian -->
        <form method="GET" action="{{ route('ppdb.index') }}" class="mb-3 d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari berdasarkan Nama, Email, dll." value="{{ request()->get('search') }}">
            
            <!-- Tombol Pencarian dengan Ikon -->
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i> Cari
            </button>
        </form>
        @if($ppdbs->isEmpty())
            <p>Tidak ada data tersedia.</p>
        @else
            <!-- Tabel Data PPDB dengan Tabel Responsif -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            @foreach (array_keys($ppdbs->first()->toArray()) as $column)
                                <th>{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
                            @endforeach
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ppdbs as $ppdb)
                            <tr>
                                @foreach ($ppdb->toArray() as $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('ppdb.edit', $ppdb->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square">Edit</i></a>
                                    
                                    <!-- Tombol Delete -->
                                    <form action="{{ route('ppdb.destroy', $ppdb->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash3">Del</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        
            <!-- Menampilkan navigasi halaman -->
                <div class="d-flex justify-content-center">
                    {{ $ppdbs->links() }}
                </div>
            @endif
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    
    

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
