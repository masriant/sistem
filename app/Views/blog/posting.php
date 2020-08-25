<section class="blog-section">
  <?php
  $session = \Config\Services::session();
  ?>
  <?php if (isset($session->success)) : ?>
  <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
    <?= $session->success ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>
  <div class="container">
    <?php if ($post) : ?>
    <?php $i = 1;
      foreach ($post as $newsItem) : ?>
    <h5> <?= $i++; ?>. <a href="/blog/post/<?= $newsItem['slug']; ?>" class="link-success"><?= $newsItem['title'] ?></a>
    </h5>
    <?php endforeach; ?>
    <?php else : ?>
    <p class="text-center">No posts have been found</p>
    <?php endif; ?>
  </div>
  <!-- <//?php
  echo "<pre>";
  print_r//($news);
  echo "</pre>";
  ?> -->

  <!-- <//?php
  echo "<pre>";
  print_r//($post);
  echo "</pre>";
  ?> -->
</section>