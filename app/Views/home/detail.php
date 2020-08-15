<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">

  <div class="row">
    <div class="col">
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

        <h3>Rincian</h3>
        <p class="lead">Data Personal Peserta.<br></p>
      </div>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/assets/brand/bootstrap-solid.svg" class="rounded-circle" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $lakip['nama']; ?></h5>
              <p class="card-text"><?= $lakip['alamat']; ?>.</p>
              <p class="card-text"><small class="text-muted">Last updated <?= $lakip['updated_at']; ?></small></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col my-3">
      <div class="card text-center">
        <div class="card-header">
          ID : <?= $lakip['kodeqr']; ?>
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $lakip['nama']; ?></h5>
          <p class="card-text"><?= $lakip['alamat']; ?></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          <?= $lakip['updated_at']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">

    </div>
  </div>


</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>