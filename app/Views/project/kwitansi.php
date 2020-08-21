<?php
$lembaga = "LEMBAGA ADMINISTRASI KEUANGAN DAN ILMU PEMERINTAHAN";
$skt = "SKT DITJEN POLPUM KEMENDAGRI NOMOR : 001-00-00/034/I/2019";
$sekretariat = "Sekretariat : Jln. Serdang Baru Raya No. 4B, Kemayoran - Jakarta 10650";
$contact = "Website : www.lakip.co.id E-mail : admin@lakip.co.id Telp. /Fax. : 021-42885718";
$checkin = date_create($project['checkin']);
$checkout = date_create($project['checkout']);
$created = date_create($project['created_at']);
$updated = date_create($project['updated_at']);
?>
<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data <a href="/project" class="btn btn-sm btn-primary"> <i
                  class="fas fa-undo-alt"></i> Back</a></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
          <?php endif; ?>
          <div class="card-body">
            <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Detail <?= $project['userid']; ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-8">
                      <h2 class="lead"><b><?= $project['nama']; ?></b></h2>
                      <p class="text-muted text-sm"><b>About: </b> <?= $project['slug']; ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>jabatan :
                          </b><?= $project['jabatan']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>instansi :
                          </b><?= $project['instansi']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Kabupaten :
                          </b><?= $project['kabupaten']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Hotel :
                          </b><?= $project['hotel']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Lokasi :
                          </b><?= $project['lokasi']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Mulai :
                          </b><?= date_format($checkin, "d M Y"); ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Selesai :
                          </b><?= date_format($checkout, "d M Y"); ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> <b>Dibuat :
                          </b><?= date_format($created, "d M Y"); ?> </li>
                        <li class="small"><span class="fa-li"><i class="far fa-calendar-check"></i></span> <b>Update :
                          </b><?= date_format($updated, "d M Y"); ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-id-badge"></i></span> <b>Tema :
                          </b><?= $project['tema']; ?> </li>
                      </ul>
                    </div>
                    <div class="col-4 text-center">
                      <img src="/assets/images/<?= $project['kodeqr']; ?>" alt="user-avatar"
                        class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="/project/edit/<?= $project['slug']; ?>" class="btn btn-sm btn-warning"><i
                        class="fas fa-edit"></i> Edit P</a>
                    <form action="/project/<?= $project['id']; ?>" method="POST" class="d-inline">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash-alt"></i> Delete</button>
                    </form>
                    <a href="/project" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div> -->





        <!-- <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sertifikat <a href="/project" class="btn btn-sm btn-primary"> <i
                      class="fas fa-undo-alt"></i> Back</a></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <//?php if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success" role="alert">
                <//?= session()->getFlashdata('pesan'); ?>
              </div>
              <//?php endif; ?>

              <div class="card-body">
                <div>
                  <img src="/assets/brand/lakip.jpeg" width="100">
                  <p class="card-text"><//?= strtoupper($lembaga); ?><br><//?= strtoupper($skt); ?></p>
                </div>
                <hr>
                <p class="card-text">Diberikan kepada :</p>
                <h3 class="card-text"><//?= strtoupper($project['nama']); ?></h3>
                <p class="card-text">//( <//?= ucwords($project['jabatan']); ?> )</p>

                <p class="lead">Terima kasih telah menjadi peserta <br>Bimbingan Teknis Nasional</p>
                <p class="card-text">Tema :</p>
                <p class="lead"><//?= $project['tema']; ?></p>
                <p class="card-text">Hotel : <//?= $project['hotel'] . ","; ?>
                  <//?= date_format($checkin, "d M Y") . " - " . date_format($checkout, "d M Y"); ?></p>
                <p class="card-text">Dikeluarkan di <//?= $project['lokasi']; ?>,
                  <//?= date_format($checkout, "d M Y"); ?></p>

                <a href="/project" class="btn btn-primary">Go Back</a>
              </div>
              <div class="card-footer text-center text-muted">
                Updated at : <//?= $project['updated_at']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kwitansi <a href="/project" class="btn btn-sm btn-primary"> <i
                  class="fas fa-undo-alt"></i> Back</a></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <//?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <//?= session()->getFlashdata('pesan'); ?>
          </div>
          <//?php endif; ?>

          <div class="card-body">
            <div>
              <img src="/assets/brand/lakip.jpeg" width="100">
              <p class="card-text"><//?= strtoupper($lembaga); ?><br><//?= strtoupper($skt); ?></p>
            </div>
            <hr>
            <p class="card-text">Diberikan kepada :</p>
            <h3 class="card-text"><//?= strtoupper($project['nama']); ?></h3>
            <p class="card-text">//( <//?= ucwords($project['jabatan']); ?> )</p>

            <p class="lead">Terima kasih telah menjadi peserta <br>Bimbingan Teknis Nasional</p>
            <p class="card-text">Tema :</p>
            <p class="lead"><//?= $project['tema']; ?></p>
            <p class="card-text">Hotel : <//?= $project['hotel'] . ","; ?>
              <//?= date_format($checkin, "d M Y") . " - " . date_format($checkout, "d M Y"); ?></p>
            <p class="card-text">Dikeluarkan di <//?= $project['lokasi']; ?>,
              <//?= date_format($checkout, "d M Y"); ?></p>

            <a href="/project" class="btn btn-primary">Go Back</a>
          </div>
          <div class="card-footer text-center text-muted">
            Updated at : <//?= $project['updated_at']; ?>
          </div>
        </div>
      </div>
    </div> -->








        <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>

        <!-- Percobaan -->
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kop</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="row justify-content-start">
                  <div class="col-md-2">
                    <img src="/assets/brand/lakip.jpeg" width="100">
                  </div>
                  <div class="col-md-10">
                    <h3 class="card-text text-center"><?= strtoupper($lembaga); ?> </h3>
                    <p class="card-text text-center">
                      <?= strtoupper($skt); ?><br><?= strtoupper($sekretariat); ?><br><?= strtoupper($contact); ?>
                    </p>
                  </div>
                </div>
                <hr>
                <div class="card-body text-center">
                  <p class="card-text">Diberikan kepada :</p>
                  <h3 class="card-text"><?= strtoupper($project['nama']); ?></h3>
                  <p class="card-text">( <?= ucwords($project['jabatan']); ?> )</p>

                  <p class="lead">Terima kasih telah menjadi peserta <br>Bimbingan Teknis Nasional</p>
                  <p class="card-text">Tema :</p>
                  <p class="lead"><?= $project['tema']; ?></p>
                  <p class="card-text">Hotel : <?= $project['hotel'] . ","; ?>
                    <?= date_format($checkin, "d M Y") . " - " . date_format($checkout, "d M Y"); ?></p>
                  <p class="card-text">Dikeluarkan di <?= $project['lokasi']; ?>,
                    <?= date_format($checkout, "d M Y"); ?></p>

                  <a href="/project" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-footer text-center text-muted">
                  Updated at : <?= $project['updated_at']; ?>
                </div>
              </div>

            </div>
          </div>
        </div>


      </div>
      <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection(); ?>