<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web informasi event">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Masrianto">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <!-- <link rel="stylesheet" href="/bootstrap/css/dashboard.css"> -->
  <link rel="stylesheet" href="/css/codeigniter.css">
  <!-- <script src="/js/script.js"></script> -->
  <script>
  $(document).ready(function() {
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  <title><?= $title ?></title>
</head>

<body>
  <div class="container-fluid">
    <?= $this->include('layout/header') ?>
    <?= $this->include('layout/menu') ?>
    <?= $this->include('layout/sidebar') ?>
    <?= $this->renderSection('content') ?>

  </div>
  <section class="footer">
    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <footer>
      <div class="copyrights">
        <p>&copy; <?= date('Y') ?>
          <a href="http://www.masrianto.com"> Masrianto</a> Foundation.</p>
      </div>
    </footer>

  </section>

  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
  </script>


  <script src="/js/script.js"></script>
</body>

</html>