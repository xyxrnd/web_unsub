<?= $this->extend('layouts/base'); ?>

<?= $this->section('title'); ?>
Agenda
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">

    <!-- Agenda -->
    <h4 class="section-title">Agenda Mendatang ajdgsajgs</h4>
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Pengenalan kehidupan kampus bagi mahasiswa baru (PKKMB)</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="row my-5">
        <div class="col-md-6">
            <h5>Kami selalu siap untuk membantu anda</h5>
            <p><b>Lokasi</b><br>Kampus 1: Jalan R.A Kartini, KM. 03, Subang<br>Kampus 2: Jalan Arief Rahman Hakim No. 8, Subang</p>
            <p><b>Email:</b> info@unsub.ac.id</p>
            <p><b>Telp:</b> +6282130777712</p>
        </div>
        <div class="col-md-6">
            <h5>Hubungi Kami</h5>
            <form>
                <div class="mb-2"><input type="text" class="form-control" placeholder="Nama Lengkap"></div>
                <div class="mb-2"><input type="email" class="form-control" placeholder="Email"></div>
                <div class="mb-2"><input type="text" class="form-control" placeholder="Judul Laporan"></div>
                <div class="mb-2"><textarea class="form-control" rows="3" placeholder="Pesan"></textarea></div>
                <button class="btn btn-danger">Kirim Pesan</button>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>