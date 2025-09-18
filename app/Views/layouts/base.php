<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> - Universitas Subang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            background: url("<?= base_url('img/bg.jpg') ?>") no-repeat center;
            background-size: cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .hero h1 {
            font-weight: bold;
            font-size: 2.5rem;
        }

        .section-title {
            background: #2c3e50;
            color: #fff;
            padding: 8px 15px;
            margin-bottom: 20px;
        }

        .card-news img {
            max-height: 150px;
            object-fit: cover;
        }

        footer {
            background: #2c3e50;
            color: #fff;
            padding: 20px 0;
            margin-top: 30px;
        }

        .navbar .nav-link {
            color: #333;
            margin-left: 15px;
        }

        .navbar .nav-link:hover {
            color: #007bff;
        }

        .navbar .nav-link.active {
            border-bottom: 2px solid #007bff;
        }

        .carousel-caption {
            bottom: 50%;
            /* posisi caption di tengah vertikal */
            transform: translateY(50%);
            text-align: center;
        }

        .carousel-caption h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }

        .carousel-caption p {
            font-size: 1.2rem;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.6);
            margin-bottom: 20px;
        }

        .carousel-caption .form-control {
            max-width: 400px;
            /* biar lebih proporsional */
            border-radius: 30px;
            /* bikin rounded */
            padding: 10px 20px;
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <?= $this->include('layouts/nav'); ?>

    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <?= $this->include('layouts/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>