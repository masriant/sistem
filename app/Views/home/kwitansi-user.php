<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">

  <!-- <div class="row">
    <div class="col">
      <div class="text-center py-5 px-3"> -->
  <!-- <div class="text-center"> -->
  <!-- <div class="spinner-grow text-primary" role="status">
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
        </div> -->


  <!-- <p class="lead">Rincian Peserta Bimtek<br></p>
      </div>
    </div>
  </div> -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header text-center">

          <figure class="text-center">
            <blockquote class="blockquote">
              <p>Kwitansi Data Pembayaran </p>
            </blockquote>
            <figcaption class="blockquote-footer">
              <?= $lakip['kodeqr']; ?> <cite title="Source Title"><?= $lakip['nama']; ?></cite>
            </figcaption>
          </figure>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <img src="/assets/brand/lakip.jpeg" class="rounded" width="150" alt="...">
              <hr>

              <span class="input-group-text"><?= $lakip['kodeqr']; ?></span>

            </div>
            <div class="col-md-10">
              <div class="card-body">




                <div class="mb-3 row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= $lakip['nama']; ?>">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= $lakip['alamat']; ?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="Peningkatan Kapasitas dan Kapabilitas Aparatur Sekretariat DPRD dalam Menunjang Kegiatan Anggota DPRD <?= $lakip['kodeqr']; ?>">
                  </div>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text">Uang sejumlah Rp. </span>
                  <input type="text" class="form-control" value="4.500.000" aria-label="Amount">
                  <span class="input-group-text">empat juta lima ratus ribu rupiah</span>
                </div>
                <div class="mb-3 row">
                  <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= $lakip['created_at']; ?>">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="update" class="col-sm-2 col-form-label">Update</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= $lakip['updated_at']; ?>">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Penerima</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= $lakip['nama']; ?>">
                  </div>
                </div>






                <a href="<?= base_url(); ?>/lakip/userid/<?= $lakip['id']; ?>" class="btn btn-sm btn-danger"
                  role="button">Back to Data User</a>
                <a href="<?= base_url(); ?>/lakip/data" class="btn btn-sm btn-primary" role="button">Back to Data
                  User</a>
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