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
            color: #000;
            /* hitam sesuai desain */
            text-decoration: none;
            transition: 0.3s;
        }

        .social-icons a:hover {
            color: #ff7f66;
            /* berubah oranye saat hover */
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

        /* Tombol lingkaran */
        #backToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #f0f0f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 999;
        }

        /* Muncul saat discroll */
        #backToTop.show {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }

        /* Ikon panah */
        #backToTop svg {
            width: 24px;
            height: 24px;
            fill: #1a73e8;
            /* biru */
        }

        #backToTop:hover {
            background-color: #e0e0e0;
        }

        /* Header Akademik */
        .section-header {
            background: linear-gradient(to right, #9da9c7, #b3c2e0);
            padding: 15px 30px;
        }

        .section-header h2 {
            margin: 0;
            font-weight: bold;
        }

        /* Card Custom */
        .card {
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .card-img-top {
            height: 180px;
            /* Tinggi gambar seragam */
            object-fit: cover;
            /* Crop gambar biar rapi */
        }

        .card h6 {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .card p {
            font-size: 13px;
            color: #555;
            margin-bottom: 15px;
        }

        .card .btn {
            font-size: 13px;
            padding: 5px 15px;
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <?= $this->include('layouts/nav'); ?>

    <!-- Beranda Unsub (16:9) -->
    <?= $this->include('home') ?>
    <?= $this->include('tentang_kami') ?>
    <?= $this->include('sejarah') ?>
    <?= $this->include('visimisi') ?>
    <?= $this->include('akademik') ?>
    <?= $this->include('berita') ?>
    <?= $this->include('agenda') ?>

    <!-- Tentang kami, sejarah, visi misi -->


    <!-- Akademik -->



    <!-- berita -->


    <!-- Agenda -->


    <!-- Footer -->
    <?= $this->include('layouts/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Tombol -->
    <div id="backToTop" onclick="scrollToTop()">
        <!-- Panah ke atas (SVG) -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.59 5.58L20 12l-8-8-8 8z" />
        </svg>
    </div>

    <script>
        const btn = document.getElementById("backToTop");

        // tampilkan tombol saat scroll ke bawah 200px
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                btn.classList.add("show");
            } else {
                btn.classList.remove("show");
            }
        };

        // fungsi scroll ke atas
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>


</body>

</html>