<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap JS + Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
        <a style="text-decoration: none;" class="navbar-brand" href="/admin">
            <img class="rounded-circle" src="{{ URL('images/LogoTK.jpg') }}" alt="School Logo" style="height: 50px;">
            <h3 style="color: white; display: inline-block; margin-left: 10px;">TK Islam Kinasih</h3>
        </a>
        <button class="navbar-toggler btn btn-success" style="border: solid rgba(255,255,255,1.0) 2px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto custom-nav-spacing">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/PPDB">PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/guru">Profil Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/acara">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/aktivitas">Aktivitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/galeri">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                  <button class="btn btn-primary dropdown-toggle text-light px-3 py-2 rounded" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-gear"></i> {{ Auth::user()->name }}
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuButton">
                      <!-- Tombol Buat Admin Baru -->
                      @if (Auth::id() == 1)
                      <li>
                        <form method="GET" action="{{ route('register') }}" class="dropdown-item p-0">
                            @csrf
                            <button type="submit" class="btn btn-link text-start w-100 text-dark py-2 px-3">
                                <i class="bi bi-person-plus"></i> Buat Admin Baru
                            </button>
                        </form>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                      @endif
                      
                      <!-- Tombol Logout -->
                      <li>
                          <form method="POST" action="{{ route('logout') }}" class="dropdown-item p-0">
                              @csrf
                              <button type="submit" class="btn btn-link text-start w-100 text-danger py-2 px-3">
                                  <i class="bi bi-box-arrow-right"></i> Logout
                              </button>
                          </form>
                      </li>
                  </ul>
              </li>
            </ul>
        </div>
    </div>
  </nav>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap JS + Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
  <style>
    body {
        background: linear-gradient(135deg, #68A895 0%, #4F998A 100%);
        color: white;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-attachment: fixed;
    }
  
    .navbar {
        background-color: #1a6354;
    }
  
    .navbar-brand img {
        height: 50px;
    }
  
    .nav-link {
        color: white !important;
    }
  
    .nav-link:hover {
        text-decoration: underline;
    }
  
    .container-fluid {
        padding: 15px 30px; /* Ruang lebih kecil untuk navbar */
    }
  
    /* Custom Spacing for Nav Items */
    .custom-nav-spacing .nav-item {
        margin-left: 15px; /* Memberikan jarak antar item */
        margin-right: 15px; /* Memberikan jarak antar item */
    }
  
    /* Style Dropdown */
    .dropdown-menu {
        border-radius: 10px;
        overflow: hidden;
    }
  
    .dropdown-menu .btn {
        transition: all 0.3s ease;
    }
  
    .dropdown-menu .btn:hover {
        background-color: #f8f9fa; /* Light gray hover effect */
        color: #1a6354; /* Change text color */
    }
  </style>
  