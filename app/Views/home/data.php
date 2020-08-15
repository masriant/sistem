<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">

  <div class="row">
    <div class="col">
      <!-- <div class="text-center py-5 px-3"> -->
      <div class="text-center">
        <h1><?= $message; ?></h1>
        <p class="lead">HTML document.<br><?= $message; ?></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">

      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Open select menu</option>
        <option value="1">2018</option>
        <option value="2">2019</option>
        <option value="3">2020</option>
      </select>
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
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Kode</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php $i = 1 + (10 * ($currentPage - 1)); ?>
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
        <?= $pager->links('id', 'center_pagination'); ?>
      </div>
    </div>
  </div>


</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>