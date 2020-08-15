<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>


<h1><?= $heading ?></h1>

<section>

  <h1>About this page</h1>

  <p>If you would like to edit this page you will find it located at: </p>

  <pre><code>app/Views/file_default.php</code></pre>

  <p>The corresponding controller for this page can be found at:</p>

  <pre><code>app/Controllers/Blog.php</code></pre>

</section>

<h3>My Todo List</h3>
<ul>
  <?php foreach ($todo_list as $item) : ?>

  <li><?= $item ?></li>

  <?php endforeach; ?>
</ul>



<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
  <div class="environment">

    <p>Page rendered in {elapsed_time} seconds</p>

    <p>Environment: <?= ENVIRONMENT ?></p>

  </div>

  <div class="copyrights">

    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation.</p>

  </div>

</footer>

<!-- SCRIPTS -->

<script>
function toggleMenu() {
  var menuItems = document.getElementsByClassName('menu-item');
  for (var i = 0; i < menuItems.length; i++) {
    var menuItem = menuItems[i];
    menuItem.classList.toggle("hidden");
  }
}
</script>

<?= $this->endSection() ?>