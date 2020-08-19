<!doctype html>
<html lang="en">
<!--
This is a starter template page.
Modifikasi : Masrianto 18 Agustus 2020
Website : www.masrianto.com
-->

<head>
  <?= $this->include('admin/_partials/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <!-- <body class="hold-transition sidebar-mini"> -->
  <div class="wrapper">
    <?= $this->include('admin/_partials/navbar') ?>
    <?= $this->include('admin/_partials/sidebar') ?>
    <?= $this->include('admin/_partials/wrapper') ?>
    <?= $this->renderSection('content') ?>
  </div>
  </div>
  </div>
  <?= $this->include('admin/_partials/sidebarcontrol') ?>
  <?= $this->include('admin/_partials/footer') ?>
  </div>
  <?= $this->include('admin/_partials/js') ?>
</body>

</html>