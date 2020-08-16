<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">

  <div class="row">
    <div class="col">
      <!-- <div class="text-center py-5 px-3"> -->
      <div class="text-center">

        <p class="lead">Cari data document.<br></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-4 ">
      <form method="POST" action="">
        <select class="form-select form-select-sm" aria-label=".form-select-sm"
          onChange="document.location.href=this.options[this.selectedIndex].value;">
          <option selected>Open select menu</option>
          <option value="data">Data</option>
          <option value="about">About</option>
          <option value="datatables">Table</option>
        </select>
      </form>
      <?php

      if (isset($_GET["data"])) {
        header("location:lakip/data");
      } elseif (isset($_GET["datatables"])) {
        header("location:lakip/datatables");
      }

      ?>

    </div>
  </div>

  <div class="row">
    <div class="col-6 my-2">
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari data..." id="myInput" name="keyword" autofocus
            autocomplete="off">
        </div>
      </form>
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
                <th>Kode</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php $i = 1; ?>
              <?php foreach ($lakip as $row) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['kodeqr']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>/lakip/detail/<?= $row['id']; ?>" target="_blank"
                    class="btn btn-sm btn-success" role="button">Detail</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <a href="#top">Kembali ke Atas!</a>
      </div>
    </div>


</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>