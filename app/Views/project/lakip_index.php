<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">

  <div class="row">
    <div class="col">
      <!-- <div class="text-center py-5 px-3"> -->
      <div class="text-center">
        <p class="lead">Welcome to <br><?= $message; ?></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-3">
      <?php

      if (isset($_GET["data"])) {
        header("location:project");
      } elseif (isset($_GET["create"])) {
        header("location:project");
      }

      ?>
      <form method="POST" action="">
        <select class="form-select form-select-sm" aria-label=".form-select-sm"
          onChange="document.location.href=this.options[this.selectedIndex].value;">
          <option selected>Open select menu</option>
          <option value="create">Tambah</option>
          <option value="data">Data</option>
          <option value="about">About</option>
          <option value="datatables">Table</option>
        </select>
      </form>

    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <form action="" method="POST">
        <div class="input-group my-3">
          <input type="text" class="form-control mr-2" placeholder="Cari data..." id="keyword" name="keyword" autofocus
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
          <caption>List of users</caption>
          <thead class="table-dark">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($lakip as $row) : ?>
            <tr>
              <td><?= $i++; ?>.</td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['alamat']; ?></td>
              <td>
                <a href="<?= base_url(); ?>/lakip/userid/<?= $row['id']; ?>" target="_blank"
                  class="btn btn-sm btn-warning" role="button">Data User</a>
                <a href="<?= base_url(); ?>/lakip/detail/<?= $row['id']; ?>" target="_blank"
                  class="btn btn-sm btn-success" role="button">Sertifikat</a>
                <a href="<?= base_url(); ?>/lakip/kwitansi/<?= $row['id']; ?>" target="_blank"
                  class="btn btn-sm btn-danger" role="button">Kwitansi</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?= $pager->links('id', 'center_pagination'); ?>
      </div>
    </div>
  </div>


</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>