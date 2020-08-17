<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">
  <div class="row">
    <div class="col-3">


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
    <div class="col">
      <div class="bd-intro pt-md-3 pl-lg-4">
        <h1 class="bd-title" id="content"><?= $title; ?></h1>
        <p class="bd-lead">Percobaan.</p>

      </div>
      <div>
        <h1>
          <?=
            $count . '<br>',
            $flat . '<br>',
            $versi . '<br>',
            $getLastQuery . '<br>'





          ?>
        </h1>
      </div>


      <main class="bd-content order-1 pl-lg-4">
        <p>Lakip is maintained by the founding team and a small group of invaluable core contributors, with the
          massive support and involvement of our community.</p>

        <div class="list-group mb-3">
          <?php $i = 1; ?>
          <?php foreach ($lakip as $row) : ?>
          <a class="list-group-item list-group-item-action d-flex align-items-center"
            href="<?= base_url(); ?>/lakip/detail/<?= $row['id']; ?>">
            <img src="https://github.com/mdo.png" alt="@lakip" width="32" height="32" class="rounded mr-2"
              loading="lazy">
            <span><?= $i++; ?>.
              <strong><?= $row['nama']; ?></strong>@lakip.co.id
            </span>
          </a>
          <?php endforeach; ?>
        </div>
        <p>Get involved with Lakip development by <a href="https://github.com/twbs/bootstrap/issues/new">opening an
            issue</a> or submitting a pull request. Read our <a
            href="https://github.com/twbs/bootstrap/blob/v5.0.0-alpha1/.github/CONTRIBUTING.md">contributing
            guidelines</a>
          for information on how we develop.</p>

      </main>
    </div>
  </div>
  <div class="row">
    <div class="col">

    </div>
  </div>


</section>

<main class="container">
</main><!--  /.container -->







<?= $this->endSection() ?>