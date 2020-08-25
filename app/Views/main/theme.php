<!doctype html>
<html lang="en">
<?= $this->include('main/previews/header'); ?>

<head>
  <?= $this->include('main/previews/head'); ?>
  <?= $this->include('main/previews/css'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <!-- <div class="wrapper"> -->
  <?= $this->include('main/previews/navbar'); ?>
  <?= $this->include('main/previews/sidebar'); ?>
  <?= $this->renderSection('content'); ?>

  <?= $this->include('main/previews/footer'); ?>
  <!-- </div> -->
  <?= $this->include('main/previews/js'); ?>
</body>

</html>