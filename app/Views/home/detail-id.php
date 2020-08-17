<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">
  <!-- <main class="container"> -->
  <div class="row">
    <div class="col">
      <img src="/assets/brand/lakip.jpeg" class="rounded mx-auto d-block" width="150" alt="...">
      <!-- <div class="text-center py-5 px-3"> -->
      <div class="text-center">
        <div class="spinner-grow text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
          <span class="sr-only">Loading...</span>
        </div>

        <h3>Sertifikat</h3>
        <p class="lead">No. Reg. : <?= $lakip['kodeqr']; ?></p>

      </div>
      <div class="text-center">
        <!-- <img src="/assets/brand/lakip.jpeg" class="rounded" width="150" alt="..."> -->
        <!-- <img src="/assets/brand/bootstrap-solid.svg" class="rounded-circle" width="150" alt="..."> -->
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card text-center">
        <div class="card-header">
          Diberikan kepada :
        </div>
        <div class="card-body">
          <h3 class="card-title"><?= $lakip['nama']; ?></h3>
          <p class="card-text"><?= $lakip['alamat']; ?></p>
          <p class="lead">Terima kasih telah menjadi peserta <br>Bimbingan Teknis Nasional</p>
          <p class="card-text">Tema :</p>
          <p class="lead">Peningkatan Kapasitas dan Kapabilitas Aparatur Sekretariat DPRD dalam Menunjang Kegiatan
            Anggota DPRD</p>
          <p class="card-text">Hotel : <?= $lakip['alamat']; ?></p>
          <p class="card-text">Jakarta, <?= date('d M Y') ?> - <?= date('d M Y') ?></p>

          <a href="/lakip/userid/<?= $lakip['id']; ?>" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer text-center text-muted">
          Updated at : <?= $lakip['updated_at']; ?>
        </div>
      </div>
    </div>
  </div>



  <!-- </main> /.container -->
</section>









<?= $this->endSection() ?>