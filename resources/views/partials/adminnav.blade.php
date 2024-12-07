<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/admin">
            <img src="{{ URL('images/LogoTK.jpg') }}" alt="School Logo">
            <h3 style="color: white;">TK Islam Kinasih</h3>
        </a>
        <button class="navbar-toggler btn btn-success" style="border: solid rgba(255,255,255,1.0) 2px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/PPDB">PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/acara">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/aktivitas">Aktivitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/Galeri">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/tentangkami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 btn btn-danger rounded hover:bg-red-700">
                            Logout
                        </button>
                    </form>                 
                </li>
            </ul>
        </div>
    </div>
</nav>
