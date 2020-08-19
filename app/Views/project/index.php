<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<main class="container">


  <?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
  <?php endif; ?>










  <div class="row">
    <div class="col-lg-6">

      <h5>Template Admin</h5>




    </div>
    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->














</main><!--  /.container -->
<?= $this->endSection() ?>