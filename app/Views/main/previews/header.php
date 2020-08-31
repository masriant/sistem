<?php
$timeout = 15; // setting timeout dalam menit
$logout = "index.php"; // redirect halaman logout

$timeout = $timeout * 60; // menit ke detik
if (isset($_SESSION['start_session'])) {
  $elapsed_time = time() - $_SESSION['start_session'];
  if ($elapsed_time >= $timeout) {
    session_destroy();
    echo "<script type='text/javascript'>alert('Sesi telah berakhir');window.location='$logout'</script>";
  }
}

$_SESSION['start_session'] = time(); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?= $this->include('main/previews/css'); ?>
  <title><?php echo SITE_NAME . " : " //. //ucfirst($//title); 
          ?></title>
</head>

<body>
  <?= $this->include('main/previews/navbar'); ?>