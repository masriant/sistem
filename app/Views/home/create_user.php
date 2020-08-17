<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">
  <section class="content">
    <div class="container">


      <div class="row">
        <div class="col-6">
          <div class="card-body">

            <form class="form-horizontal" action="/lakip/save" method="post" enctype="multipart/form-data">
              <?= csrf_field(); ?>



              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                    id="nama" name="nama" placeholder="nama" value="<?= old('nama'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                    id="alamat" name="alamat" placeholder="alamat" value="<?= old('alamat'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="kodeqr" class="col-sm-2 col-form-label">Kode QR</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?= ($validation->hasError('kodeqr')) ? 'is-invalid' : ''; ?>"
                    id="kodeqr" name="kodeqr" placeholder="kodeqr" value="<?= old('kodeqr'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('kodeqr'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-save"></i>
                    Save</button>
                  <button type="reset" class="btn btn-sm btn-primary"><i class="fas fa-undo-alt"></i> Reset</button>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>









    </div>
  </section>




  <div class="row">
    <div class="col">



      <p class="lead">Rincian Data Personal Peserta Bimtek.<br></p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <?= $kode; ?>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <img src="/assets/brand/lakip.jpeg" class="rounded" width="150" alt="...">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><?= $lakip['nama']; ?></h5>
                <p class="card-text">User ID : <?= $kode; ?></p>
                <p class="card-text">Jabatan : <?= $lakip['alamat']; ?></p>
                <p class="card-text">Instansi : <?= $lakip['kodeqr']; ?>.</p>
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