<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<section class="content">

  <div class="row">
    <div class="col">
      <div class="bd-intro pt-md-3 pl-lg-4">
        <h1 class="bd-title" id="content"><?= $title; ?></h1>
        <p class="bd-lead">An overview of the founding team and core contributors to Bootstrap.</p>


      </div>



      <main class="bd-content order-1 pl-lg-4">
        <p>Lakip is maintained by the founding team and a small group of invaluable core contributors, with the
          massive support and involvement of our community.</p>

        <div class="row">
          <div class="col-6">
            <form action="" method="POST">
              <div class="input-group my-3">
                <input type="text" class="form-control" placeholder="Cari data..." id="keyword" name="keyword" autofocus
                  autocomplete="off">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="list-group mb-3">
          <?php $i = 1; ?>
          <?php foreach ($lakip as $row) : ?>
          <a class="list-group-item list-group-item-action d-flex align-items-center"
            href="<?= base_url(); ?>/lakip/detail/<?= $row['id']; ?>">
            <img src="https://github.com/mdo.png" alt="@lakip" width="32" height="32" class="rounded mr-2"
              loading="lazy">
            <span><?= $i++; ?>.
              <strong><?= $row['nama']; ?></strong> @lakip.co.id
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