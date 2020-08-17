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


        <p class="lead">Rincian Data Personal Peserta Bimtek.<br></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <?= $lakip['nama']; ?>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <img src="/assets/brand/lakip.jpeg" class="rounded" width="150" alt="...">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><?= $lakip['nama']; ?></h5>
                <p class="card-text">User ID : <?= $lakip['kodeqr']; ?>.</p>
                <p class="card-text">Jabatan : </p>
                <p class="card-text">Instansi : <?= $lakip['alamat']; ?>.</p>
                <p class="card-text">Kabupaten : <?= $lakip['alamat']; ?>.</p>
                <p class="card-text">Tema Bimtek : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                  aspernatur
                  similique? Magni porro a adipisci vero repellat similique possimus itaque, expedita nam dolores
                  praesentium vitae vel cumque iusto suscipit nulla.</p>
                <p class="card-text">Materi 1 : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                  aspernatur
                  similique? Magni porro a adipisci vero repellat similique possimus itaque, expedita nam dolores
                  praesentium vitae vel cumque iusto suscipit nulla.</p>
                <p class="card-text">Materi 2 : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                  aspernatur
                  similique? Magni porro a adipisci vero repellat similique possimus itaque, expedita nam dolores
                  praesentium vitae vel cumque iusto suscipit nulla.</p>
                <p class="card-text">Materi 3 : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                  aspernatur
                  similique? Magni porro a adipisci vero repellat similique possimus itaque, expedita nam dolores
                  praesentium vitae vel cumque iusto suscipit nulla.</p>
                <p class="card-text">Materi 4 : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                  aspernatur
                  similique? Magni porro a adipisci vero repellat similique possimus itaque, expedita nam dolores
                  praesentium vitae vel cumque iusto suscipit nulla.</p>
                <p class="card-text">Narasumber 1 : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Narasumber 2 : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Narasumber 3 : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Narasumber 4 : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Hotel : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Room Meeting : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Check In : <?= $lakip['created_at']; ?></p>
                <p class="card-text">Check Out : <?= $lakip['updated_at']; ?></p>
                <p class="card-text"><small class="text-muted">Last updated <?= $lakip['updated_at']; ?></small></p>
                <p>
                  <a href="<?= base_url(); ?>/lakip/datauser/<?= $lakip['id']; ?>" class="btn btn-sm btn-success"
                    role="button">Sertifikat</a>
                  <a href="<?= base_url(); ?>/lakip/kwitansi/<?= $lakip['id']; ?>" class="btn btn-sm btn-danger"
                    role="button">Kwitansi</a>
                  <a href="<?= base_url(); ?>/lakip/data" class="btn btn-sm btn-primary" role="button">Back To Admin
                    Panel</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <?= $lakip['updated_at']; ?>
        </div>
      </div>



</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>