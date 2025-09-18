<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Universitas Subang - School of Empowering Peaple
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="icon" href="<?= base_url("Icon.png") ?>">

    <style>
        .bg-gradient-blue-white {
            background: linear-gradient(to right, #4891ff, #94baf3)
                /* Bisa juga pakai arah lain: to bottom, to top, to left */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
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
                        <a class="nav-link active" aria-current="page" href="#Beranda">Beranda</a>
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
                        <a class="nav-link active" aria-current="page" href="#">Akademik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="sejarah">Berita </a></li>
                            <li><a class="dropdown-item" href="#">Agenda</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> Kontak </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Beranda Unsub (16:9) -->
    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("img/bg.jpg") ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("img/bg2.jpg") ?>" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Tentang kami, sejarah, visi misi -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <h2 class="bg-gradient-blue-white text-dark">Tentang Kami</h2>
            <div class="content-box about-us">
                <div class="text-content my-auto">
                    <p>Universitas Subang yang biasa di singkatn (Unsub) merupakan Universitas hpertama yang ada di kabupaten Subang, memiliki 7 Fakultas dan 14 Program Studi (prodi) dengan jenjang pendidikan S2, S1 dan D3. Terdiri atas 2 (dua) kampus, yakni Kampus I dan Kampus II. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
                <div class="image-content">
                    <img src="<?= base_url("img/bg2.jpg") ?>" alt="Gedung Universitas Subang">
                </div>
            </div>
        </div>

        <div class="section-container">
            <section id="sejarah">
                <h2>Sejarah</h2>
            </section>
            <div class="content-box history">
                <div class="image-content">
                    <img src="<?= base_url("img/bg.jpg") ?>" alt="Gedung Universitas Subang">
                </div>
                <div class="text-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
                </div>
            </div>
        </div>

        <div class="section-container">
            <section id="visimisi">
                <h2>Visi & Misi</h2>
            </section>
            <div class="content-box history">
                <div class="text-content">
                    <center>
                        <h3>Visi</h3>
                    </center>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <center>
                        <h3>Misi</h3>
                    </center>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
                </div>
            </div>
        </div>
    </div>

    <!-- berita -->
    <div class="berita">
        <ul class="cards">
            <li class="cards__item">
                <div class="card">
                    <div class="card__image card__image--fence"></div>
                    <div class="card__content">
                        <div class="card__title">Flex</div>
                        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
                        <button class="btn btn--block card__btn">Button</button>
                    </div>
                </div>
            </li>
            <li class="cards__item">
                <div class="card">
                    <div class="card__image card__image--river"></div>
                    <div class="card__content">
                        <div class="card__title">Flex Grow</div>
                        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
                        <button class="btn btn--block card__btn">Button</button>
                    </div>
                </div>
            </li>
            <li class="cards__item">
                <div class="card">
                    <div class="card__image card__image--record"></div>
                    <div class="card__content">
                        <div class="card__title">Flex Shrink</div>
                        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
                        <button class="btn btn--block card__btn">Button</button>
                    </div>
                </div>
            </li>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Footer -->
    <footer class="bg-cyan text-black pt-4 pb-2 mt-5">
        <div class="container">
            <div class="row">

                <!-- Logo / Brand -->
                <div class="col-md-4 mb-3">
                    <h5>MyWebsite</h5>
                    <p>Deskripsi singkat tentang website kamu. Bisa jadi slogan atau misi singkat.</p>
                </div>

                <!-- Links -->
                <div class="col-md-4 mb-3">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tentang</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Layanan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact / Info -->
                <div class="col-md-4 mb-3">
                    <h5>Hubungi Kami</h5>
                    <p>Email: info@example.com</p>
                    <p>Telepon: +62 812 3456 7890</p>
                    <p>Alamat: Jl. Contoh No.123, Jakarta</p>
                </div>

            </div>

            <!-- Copyright -->
            <div class="text-center pt-3 border-top border-secondary">
                <p class="mb-0">&copy; 2025 MyWebsite. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>