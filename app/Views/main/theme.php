<!doctype html>
<html lang="en">
<?= $this->include('main/_partials/header') ?>

<head>
  <?= $this->include('main/_partials/head') ?>
  <?= $this->include('main/_partials/css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <!-- <div class="wrapper"> -->
  <?= $this->include('main/_partials/navbar') ?>
  <?= $this->include('main/_partials/sidebar') ?>
  <?= $this->renderSection('content') ?>

  <?= $this->include('main/_partials/footer') ?>
  <!-- </div> -->
  <?= $this->include('main/_partials/js') ?>
</body>

</html>