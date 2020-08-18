<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="content">
  <h1><?= $message ?> <?= $title; ?></h1>


  <form method="POST" action="">
    <select class="form-select form-select-sm btn-outline-danger mr-2" aria-label=".form-select-sm"
      onChange="document.location.href=this.options[this.selectedIndex].value;">
      <option selected>Open select menu</option>
      <option value="create">Add</option>
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
  <p>If you would like to edit this page you will find it located at: </p>

  <pre><code>app/Views/file_default.php</code></pre>

  <p>The corresponding controller for this page can be found at:</p>

  <pre><code>app/Controllers/Blog.php</code></pre>




</section>
<?= $this->endSection() ?>