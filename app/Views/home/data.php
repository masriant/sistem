<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">


  <!-- <div class="text-center py-5 px-3"> -->
  <div class="text-center">

    <h1><?= $message; ?></h1>
    <h3>My Todo List</h3>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
      mostly barebones HTML document.<br><?= $message; ?></p>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kode</th>
        </tr>
      </thead>
      <?php $i = 1; ?>
      <?php foreach ($lakip as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['kodeqr']; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>


</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>