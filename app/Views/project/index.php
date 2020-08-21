<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<main class="container">
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">

      <!-- Data Peserta ke : <//?= $test; ?> -->
      <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
      <?php endif; ?>

      <form method="POST" action="">
        <select class="form-select form-select-sm btn-outline-danger mr-2" aria-label=".form-select-sm"
          onChange="document.location.href=this.options[this.selectedIndex].value;">
          <option selected>Open select menu</option>
          <option value="project/create">Tambah</option>
          <option value="project/add">Add</option>
          <option value="project/data">Data</option>
          <option value="project/edit">Edit</option>
          <option value="project">Index</option>
          <option value="lakip/datatables">Table</option>
        </select>
      </form>

    </div>
    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-6">
      <form action="" method="POST">
        <div class="input-group my-3">
          <input type="text" class="form-control mr-2" placeholder="Cari data ..." id="keyword" name="keyword" autofocus
            autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="table-responsive{-sm|-md|-lg|-xl|-xxl}">
        <table class="table table-striped table-sm caption-top">
          <caption>Number next of users USR-<?= $test + 1; ?></caption>
          <thead class="table-dark">
            <tr>
              <th>No.</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <!-- <th>Instansi</th>
              <th>Kabupaten</th> -->
              <!-- <th>Tema</th> -->
              <th>Lokasi</th>
              <th>Hotel</th>
              <th>Room</th>
              <!-- <th>Checkin</th>
              <th>Checkout</th> -->
              <th>Kontribusi</th>
              <!-- <th>Gambar</th> -->
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <!-- </?php $i = 1; ?> -->
            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
            <?php foreach ($project as $row) : ?>
            <tr>
              <td><?= $i++; ?>.</td>
              <td><?= $row['userid']; ?></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['jabatan']; ?></td>
              <!-- <td><//?= $row['instansi']; ?></td>
              <td><?//= $row['kabupaten']; ?></td> -->
              <!-- <td><//?= $row['tema']; ?></td> -->
              <td><?= $row['lokasi']; ?></td>
              <td><?= $row['hotel']; ?></td>
              <td><?= $row['room']; ?></td>
              <!-- <td><//?= $row['checkin']; ?></td>
              <td><//?= $row['checkout']; ?></td> -->
              <td><?= $row['kontribusi']; ?></td>
              <!-- <td><//?= $row['kodeqr']; ?></td> -->
              <td>
                <a href="<?= base_url(); ?>/project/userid/<?= $row['id']; ?>" target="_blank"
                  class="btn btn-sm btn-warning" role="button">Data User</a>
                <a href="<?= base_url(); ?>/project/detail/<?= $row['id']; ?>" target="_blank"
                  class="btn btn-sm btn-success" role="button">Sertifikat</a>
                <a href="<?= base_url(); ?>/project/kwitansi/<?= $row['id']; ?>" target="_blank"
                  class="btn btn-sm btn-danger" role="button">Kwitansi</a>
                <a href="/project/<?= $row['slug']; ?>" class="btn btn-sm btn-success"><i class="fa fa-id-card"
                    aria-hidden="true"></i> Detail</a>
              </td>

            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?= $pager->links('id', 'center_pagination'); ?>
      </div>
    </div>
  </div>


















</main><!--  /.container -->
<?= $this->endSection() ?>