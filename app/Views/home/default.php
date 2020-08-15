<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="content">
  <h1><?= $message ?></h1>



  <p>If you would like to edit this page you will find it located at: </p>

  <pre><code>app/Views/file_default.php</code></pre>

  <p>The corresponding controller for this page can be found at:</p>

  <pre><code>app/Controllers/Blog.php</code></pre>




</section>
<?= $this->endSection() ?>