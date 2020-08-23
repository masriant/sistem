<?php
$lembaga = "LEMBAGA ADMINISTRASI KEUANGAN DAN ILMU PEMERINTAHAN";
$skt = "SKT DITJEN POLPUM KEMENDAGRI NOMOR : 001-00-00/034/I/2019";
$sekretariat = "Sekretariat : Jln. Serdang Baru Raya No. 4B, Kemayoran - Jakarta 10650";
$contact = "Website : www.lakip.co.id E-mail : admin@lakip.co.id Telp. /Fax. : 021-42885718";
$checkin = date_create($project['checkin']);
$checkout = date_create($project['checkout']);
$created = date_create($project['created_at']);
$updated = date_create($project['updated_at']);

$this->include('layout/fungsi-romawi');

$bulan     = date('n');
$romawi    = getRomawi($bulan);
$tahun     = date('Y');
$nomor     = "/LKP/" . $romawi . "/" . $tahun;
$no        = $project['id'];
// $noUrut    = $no + 1;
$kode      =  sprintf("%03s", $no);
$nomorbaru = $kode . $nomor;
?>
<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">







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








        <!-- <//?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <//?= session()->getFlashdata('pesan'); ?>
        </div>
        <//?php endif; ?> -->

        <!-- Percobaan -->
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Kwitansi</h3> -->
                <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
                </div> -->
              </div>
              <div class="card-body">
                <!-- <div class="row justify-content-start"> -->
                <!-- <div class="col-md-2">
                    <img src="/assets/brand/lakip.jpeg" width="100">
                  </div>
                  <div class="col-md-10 text-center">
                    <h3 class="card-text"><//?= strtoupper($lembaga); ?> </h3>
                    <p class="card-text">
                      <//?= strtoupper($skt); ?><br><//?= strtoupper($sekretariat); ?><br><//?= strtoupper($contact); ?>
                    </p>
                  </div>
                </div> -->
                <!-- KOP awal -->
                <div class="row justify-content-start">
                  <div class="col-md-2">
                    <img src="/assets/brand/lakip.jpeg" width="120">
                  </div>
                  <div class="col-md-10 text-center">
                    <h4 class="card-text text-secondary"><strong><?= strtoupper($lembaga); ?></strong></h4>
                    <h5 class="lead text-danger"><?= strtoupper($skt); ?></h5>
                    <h6 class="lead"><?= ucwords($sekretariat); ?><br><?= ucfirst($contact); ?>
                    </h6>
                  </div>
                </div>
                <!-- KOP akhir-->
                <hr>
                <div class="card-body">
                  <h3 class="card-text text-center"><u>KWITANSI</u></h3>
                  <p class="card-text text-center">No. : <?= strtoupper($nomorbaru); ?></p>
                  <p class="lead">Telah terima dari :
                    <?= strtoupper($project['nama']) . " (" . ucwords($project['jabatan']) . ")" . " " . ucwords($project['instansi']) . "-" . ucwords($project['kabupaten']); ?>
                  </p>
                  <p class="lead">Uang sejumlah :
                    <?= "Rp. " . number_format($project['kontribusi']) . " ,-"; ?>
                  </p>
                  <p class="lead">Untuk Pembayaran : Kontribusi kegiatan bimbingan teknis nasional dengan tema
                    <?= ucwords($project['tema']); ?> di hotel <?= ucwords($project['hotel']) . ","; ?>
                    <?= date_format($checkin, "d M Y") . " - " . date_format($checkout, "d M Y"); ?>
                  </p>
                  <p class="lead"> Terbilang : <?php $this->include('layout/terbilang');
                                                $nilai = $project['kontribusi'];
                                                echo terbilang($nilai) . " Rupiah"; ?></p>

                  <p class="lead">Dikeluarkan di <?= $project['lokasi']; ?>,
                    <?= date_format($checkout, "d M Y"); ?></p>



                </div>
                <br>
                <div class="col-12">
                  <a href="/project/print/<?= $project['slug']; ?>" class="btn btn-default"><i class="fas fa-print"></i>
                    Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
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