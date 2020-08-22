<?php $lembaga = "LEMBAGA ADMINISTRASI KEUANGAN DAN ILMU PEMERINTAHAN";
$skt = "SKT DITJEN POLPUM KEMENDAGRI NOMOR : 001-00-00/034/I/2019";
$sekretariat = "Sekretariat : Jln. Serdang Baru Raya No. 4B, Kemayoran - Jakarta 10650";
$contact = "website : www.lakip.co.id E-mail : admin@lakip.co.id Telp. /Fax. : 021-4288 5718";
$checkin = date_create($project['checkin']);
$checkout = date_create($project['checkout']);
$created = date_create($project['created_at']);
$updated = date_create($project['updated_at']);
$this->include('layout/fungsi-romawi');

$bulan = date('n');
$romawi = getRomawi($bulan);
$tahun = date('Y');
$nomor = "/LKP/" . $romawi . "/" . $tahun;
$no = $project['id'];
$kode = sprintf("%03s", $no);
$nomorbaru = $kode . $nomor;
?>

<?= $this->extend('admin/print') ?>
<?= $this->section('content') ?>
<!-- <div class="wrapper"> -->
<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col">

      <div class="card-body">
        <!-- KOP awal -->
        <div class="row justify-content-start">
          <div class="col-sm-2">
            <img src="/assets/brand/lakip.jpeg" width="120">
          </div>
          <div class="col-sm-10 text-center">
            <h4 class="card-text text-secondary"><strong><?= strtoupper($lembaga); ?></strong></h4>
            <h5 class="lead text-danger"><?= strtoupper($skt); ?></h5>
            <h6 class="lead"><?= ucwords($sekretariat); ?><br><?= ucfirst($contact); ?>
            </h6>
          </div>
        </div>
        <!-- KOP akhir-->


        <!-- KOP awal -->
        <!-- <div class="row justify-content-start">
          <div class="col-sm-2 invoice-col">
            <img src="/assets/brand/lakip.jpeg" width="100">
          </div>
          <div class="col-sm-10 invoice-col">
            <div class="text text-center">
              <h4><//?= strtoupper($lembaga); ?></h4>
              <h5><//?= strtoupper($skt); ?> </h5>
              <h6><//?= ucwords($sekretariat); ?></h6>
              <h6><//?= ucfirst($contact); ?></h6>
            </div>
          </div>
        </div>
      </div> -->
        <!-- KOP akhir-->

        <hr>
        <div class="row">
          <div class="col">
            <div class="card-body">
              <h3 class="card-text text-center"><u>KWITANSI</u></h3>
              <p class="card-text text-center align-top">No. : <?= strtoupper($nomorbaru); ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-2">
              <p class="lead">Telah terima dari</p>
            </div>
            <div class="col-sm-10">
              <p class="lead align-top">:
                <?= strtoupper($project['nama']) . " (" . ucwords($project['jabatan']) . ")" . " " . ucwords($project['instansi']) . "-" . ucwords($project['kabupaten']); ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              <p class="lead">Uang sejumlah</p>
            </div>
            <div class="col-sm-10">
              <p class="lead align-top">: <?= "Rp. " . number_format($project['kontribusi']) . " ,-"; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              <p class="lead">Untuk Pembayaran</p>
            </div>
            <div class="col-sm-10">
              <p class="lead align-top">: Kontribusi kegiatan bimbingan teknis nasional dengan tema :
                <i><?= ucwords($project['tema']); ?> di Hotel <?= ucwords($project['hotel']) . ","; ?>
                  <?= date_format($checkin, "d M Y") . " - " . date_format($checkout, "d M Y"); ?></i>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-7">
              <p class="lead align-bottom"> <br><br><br><br> Terbilang : <i>###
                  <?php $this->include('layout/terbilang');
                  $nilai = $project['kontribusi'];
                  echo terbilang($nilai) . " Rupiah ###"; ?></i></p>
            </div>
            <div class="col-sm-5">
              <p class="lead text-center">Dikeluarkan di <?= $project['lokasi']; ?>,
                <?= date_format($checkout, "d M Y"); ?><br>
                Penerima <br>
                <br><br>
                ( <u>Muh. Zainal</u> )
              </p>
            </div>
          </div>
          <hr>





        </div>
      </div>
    </div>






    <!-- /.row -->
</section>
<?= $this->endSection(); ?>