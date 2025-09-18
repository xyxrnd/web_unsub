<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
            <img src="<?= base_url('icon.png') ?>"
                alt="Logo Unsub" width="40" height="40" class="me-2">
            <span class="fw-bold text-uppercase">Universitas Subang</span>
        </a>

        <!-- Toggle button (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == '' ? 'active text-primary' : '') ?>" href="<?= base_url('/') ?>">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'profil' ? 'active text-primary' : '') ?>" href="<?= base_url('/profil') ?>">PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'akademik' ? 'active text-primary' : '') ?>" href="<?= base_url('/akademik') ?>">AKADEMIK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'informasi' ? 'active text-primary' : '') ?>" href="<?= base_url('/informasi') ?>">INFORMASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'agenda' ? 'active text-primary' : '') ?>" href="<?= base_url('/agenda') ?>">AGENDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'kontak' ? 'active text-primary' : '') ?>" href="<?= base_url('/kontak') ?>">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>