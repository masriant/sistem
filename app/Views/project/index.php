<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<main class="container">


  <?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
  <?php endif; ?>

  <form method="POST" action="">
    <select class="form-select form-select-sm btn-outline-danger mr-2" aria-label=".form-select-sm"
      onChange="document.location.href=this.options[this.selectedIndex].value;">
      <option selected>Open select menu</option>
      <option value="project/create">Add</option>
      <option value="project/data">Data</option>
      <option value="project/edit">Edit</option>
      <option value="lakip/datatables">Table</option>
    </select>
  </form>








  <div class="row">
    <div class="col-lg-6">

      <h5>Template Admin</h5>




    </div>
    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->














</main><!--  /.container -->
<?= $this->endSection() ?>