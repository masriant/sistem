<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">
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

              <span class="input-group-text"><?= "Rp. " . number_format($kontribusi) . " ,-"; ?></span>

            </div>
            <div class="col-md-10">
              <div class="card-body">
                <div class="mb-3 row">
                  <label for="kode" class="col-sm-2 col-form-label">No.</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="kode" value="<?= $kode; ?>">
                  </div>
                </div>
                <script>
                function url() {
                  var judul = $('#title').val();
                  $('#slug').val(createslug(judul));
                }

                function createslug(text) {
                  return text.toString().toLowerCase()
                    .replace(/\s+/g, '-') // Replace spaces with -
                    .replace(/[^\w\-]+/g, '') // Remove all non-word chars
                    .replace(/\-\-+/g, '-') // Replace multiple - with single -
                    .replace(/^-+/, '') // Trim - from start of text
                    .replace(/-+$/, ''); // Trim - from end of text
                }
                </script>
                <div class="mb-3 row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="title" id="title" onkeyup="url()"
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
                      value="Peningkatan Kapasitas dan Kapabilitas Aparatur Sekretariat DPRD dalam Menunjang Kegiatan Anggota DPRD">
                  </div>
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
                  <label for="update" class="col-sm-2 col-form-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= base64_encode($lakip['nama']); ?>">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="slug" id="slug"
                      value="<?= $lakip['alamat']; ?>">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="update" class="col-sm-2 col-form-label">Kontribusi</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= "Rp. " . number_format($lakip['kodeqr'], 2, ',', '.') . ",-"; ?>">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="pembayaran" class="col-sm-2 col-form-label">Terbilang</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?php $this->include('layout/terbilang');
                                                                                                        $nilai = $kontribusi;
                                                                                                        echo terbilang($nilai) . " Rupiah"; ?>">
                    <!-- // $nilai = $lakip['kodeqr']; -->
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Penerima</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                      value="<?= $lakip['nama']; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <span class="input-group-text">
            <a href="<?= base_url(); ?>/lakip/userid/<?= $lakip['id']; ?>" class="btn btn-sm  btn-danger mr-2"
              role="button">Back
              to Data User</a> <a href="<?= base_url(); ?>/lakip/data" class="btn btn-sm btn-primary mr-2"
              role="button">Back
              to Data
              User</a></span>
        </div>
      </div>





      <div class="row">
        <div class="col">


          <form action="">
            <form method="post" action="">
              <label>Kode Barang</label><br />
              <input type="text" name="kodeqr" required="required" value="<?php echo $kode ?>" readonly>

              <br>

              <label>Nama Barang</label><br />
              <input type="text" name="nama" required="required">

              <br>

              <label>Jumlah</label><br />
              <input type="text" name="alamat" required="required">

              <br>

              <label>Harga</label><br />
              <input type="text" name="kodeqr" required="required">

              <br>

              <input type="submit" value="Simpan">
            </form>

            <br>

            <hr>
            <br>

            <table border="1">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $b = $lakip
                ?>
                <tr>
                  <td><?php echo $b['kodeqr']; ?></td>
                  <td><?php echo $b['nama']; ?></td>
                  <td><?php echo $b['alamat']; ?></td>
                  <td><?php echo "Rp. " . number_format($b['kodeqr']) . " ,-"; ?></td>
                </tr>

              </tbody>
            </table>
          </form>

          <!-- terbilang -->

          <div class="terbilang">

            <p>Ketik jumlah nominal pada form di bawah ini.</p>

            <span>Nominal Rupiah. :</span>
            <input type="text" id="angka" />


          </div>
          <div class="kotak">

            <p>Ketik jumlah nominal pada form di bawah ini.</p>

            <span>Nominal Rupiah. :</span>
            <input type="text" id="rupiah" />


          </div>
        </div>
      </div>


























</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>