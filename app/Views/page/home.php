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
        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .contact-container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 40px;
      gap: 20px;
    }

    /* Bagian Kiri */
    .contact-info {
      flex: 1;
    }

    .contact-info h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      line-height: 1.4em;
    }

    .contact-info p {
      margin: 5px 0;
      font-size: 14px;
    }

    .contact-info a {
      color: black;
      text-decoration: none;
    }

    .social-icons {
      margin-top: 10px;
    }

    .social-icons i {
      font-size: 24px;
      margin-right: 10px;
      cursor: pointer;
    }

    /* Bagian Form */
    .contact-form {
      flex: 1;
      background: #e5e5e5;
      padding: 20px;
      border-radius: 15px;
    }

    .contact-form h3 {
      margin-top: 0;
      font-size: 20px;
      letter-spacing: 2px;
    }

    .contact-form p {
      font-size: 14px;
      margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      border: none;
      border-bottom: 1px solid black;
      background: transparent;
      margin-bottom: 15px;
      padding: 8px 0;
      font-size: 14px;
    }

    .contact-form button {
      background: #ff7f66;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      font-size: 14px;
      cursor: pointer;
    }

    /* Bagian Lokasi */
    .location {
      padding: 0 40px 40px 40px;
    }

    .location h2 {
      font-size: 22px;
      margin-bottom: 10px;
      
    }

    .map-placeholder {
      width: 100%;
      height: 200px;
      background: #d9d9d9;
    }
     .social-icons {
      display: flex;
      gap: 15px;
      font-size: 28px;
    }

    .social-icons a {
      color: #000; /* hitam sesuai desain */
      text-decoration: none;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #ff7f66; /* berubah oranye saat hover */
    }
     .social-icons {
      display: flex;
      gap: 15px;
    }

    .social-icons a img {
      width: 40px;
      height: 40px;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .social-icons a img:hover {
      transform: scale(1.2);
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url("img/bg.jpg")?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url("img/bg2.jpg")?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url("img/bg.jpg")?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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
     <div class="container mt-4 mb-5">
  <div class="row">
    <div class="col-md-12">
      <h2>Berita</h2>
      <hr>
    </div>
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

    <!-- Agenda -->
     <div class="container mt-4 mb-5">
  <div class="row">
    <div class="col-md-12">
      <h2>Agenda Mendatang</h2>
    </div>
    <div class="col-md-12">
      <div class="row rounded bg-light bg-gradient mt-4 p-3">
        <div class="col-md-3 pl-0 pr-0">
          <img src="https://picsum.photos/400/300" class="img-fluid w-100">
        </div>
        <div class="col-md-9">
          <div class="card-block p-3">
            <h4 class="card-title mt-0"><strong>Lorem ipsum dolor sit amet</strong></h4>
            <p class="text-secondary">
              <strong>1015 California Ave, Los Angeles CA 7:00 pm - 8:00 pm</strong>
            </p>        
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Footer -->
<footer>
<!-- fontawesome untuk icon sosmed -->
  <script src="https://kit.fontawesome.com/4f54d0a6d1.js" crossorigin="anonymous"></script>

  <div class="contact-container">
    <!-- Bagian Kiri -->
    <div class="contact-info">
      <h2>Kami selalu siap untuk <br> membantu anda dan menjawab <br>semua pertanyaan</h2>

      <p><b>LOKASI</b></p>
      <p>Kampus 1<br>Jalan R.A Kartini, KM. 03, Subang,<br>Jawa Barat</p>
      <p>Kampus 2<br>Jalan Arief Rahman Hakim No. 8,<br>Subang, Jawa Barat</p>

      <p><b>EMAIL</b></p>
      <p><a href="mailto:info@unsub.ac.id">info@unsub.ac.id</a></p>

      <p><b>PUSAT PANGGILAN</b></p>
      <p><a href="tel:+6282130777712">+6282130777712</a></p>

      <p><b>SOSIAL MEDIA</b></p>
      <div class="social-icons">
<div class="social-icons">
    <!-- Instagram -->
    <a href=https://www.instagram.com/universitas.subang?igsh=aXF0cmdpaW1wYXI2" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
    </a>

    <!-- Twitter (X sekarang) -->
    <a href="https://twitter.com" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Logo_of_Twitter.svg" alt="Twitter">
    </a>

    <!-- Facebook -->
    <a href="https://www.facebook.com/groups/554322674595643/?ref=share&mibextid=CTbP7E" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook">
    </a>

    <!-- YouTube -->
    <a href="https://youtube.com/@universitas.subang?si=-8UGN8W1axpmqdZB" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="YouTube">
    </a>
  </div>
      </div>
    </div>

    <!-- Bagian Form -->
    <div class="contact-form">
      <h3>HUBUNGI KAMI</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      <input type="text" placeholder="NAMA LENGKAP">
      <input type="email" placeholder="EMAIL">
      <input type="text" placeholder="JUDUL LAPORAN">
      <textarea placeholder="PESAN"></textarea>
      <br>
      <button>Kirim Pesan</button>
    </div>
  </div>

  <!-- Lokasi -->
  <div class="location">
    <h2>LOKASI UNIVERSITAS SUBANG</h2>
    <div class="map-placeholder"></div>
  </div>    

</footer>


</body>

</html>