<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="<?= base_url("img/Logo_Unsub.png") ?>" alt="Logo" width="35" height="35" class="d-inline-block align-text-top ms-4 me-2">
            <div class="d-flex flex-column lh-1">
                <span class="#">Universitas</span>
                <span class="font-brand">Subang</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item" href="#visimisi">Visi & Misi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#akademik">Akademik</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#berita">Berita </a></li>
                        <li><a class="dropdown-item" href="#agenda">Agenda</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#footer"> Kontak </a>
                </li>
            </ul>
        </div>
    </div>
</nav>