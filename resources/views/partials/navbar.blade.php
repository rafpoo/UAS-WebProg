<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
        <a style="text-decoration: none;" class="navbar-brand" href="/">
            <img class="rounded-circle" src="{{ URL('images/LogoTK.jpg') }}" alt="School Logo" style="height: 50px;">
            <h3 style="color: white; display: inline-block; margin-left: 10px;">TK Islam Kinasih</h3>
        </a>
        <button class="navbar-toggler btn btn-success" style="border: solid rgba(255,255,255,1.0) 2px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/PPDB">PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guru">Profil Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/acara">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aktivitas">Aktivitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galeri">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentangkami">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
</style>
