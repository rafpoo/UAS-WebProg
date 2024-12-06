

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Islam Kinasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    @include('partials.navbar')
    <br />
    

    

    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="row g-0">
                        <!-- Form Section -->
                        <div class="col-md-6 form-section">
                            <h2 class="text-success fw-bold">Form Pendaftaran</h2>
                            @if(session('success'))
                                <div class="bg-green-500 text-white p-3 rounded mb-5">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="/submit-ppdb" method="POST" class="mt-4">
                                @csrf
                                <!-- Nama -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <!-- Tempat Lahir -->
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Kota/Kabupaten" required>
                                </div>

                                <!-- Nama Orang Tua -->
                                <div class="mb-3">
                                    <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
                                    <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" placeholder="Nama Ayah/Ibu" required>
                                </div>

                                <!-- No Telepon -->
                                <div class="mb-3">
                                    <label for="no_telepon" class="form-label">No Telepon</label>
                                    <div class="input-group">
                                        <span class="input-group-text">+62</span>
                                        <input type="tel" id="no_telepon" name="no_telepon" class="form-control" placeholder="Phone number" required>
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat Lengkap" required></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-daftar px-4 py-2">Daftar</button>
                                </div>
                            </form>
                        </div>

                        <!-- Illustration Section -->
                        <div class="col-md-6 illustration">
                            <img src="{{ asset('images/illustration.png') }}" alt="Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>