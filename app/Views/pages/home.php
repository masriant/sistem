<section>
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
  <div class="bg-light p-2">
    <div class="container">
      <h1 class="display-4">Home Blog</h1>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eos repellendus id maiores
        saepe
        quis</p>
      <hr class="my-4">
      <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi deserunt alias eius totam
        tempore molestiae,
        iusto ab deleniti.
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>
  </div>
</section>

<section class="blog-section">
  <div class="container">
    <?php if ($news) : ?>
    <?php foreach ($news as $newsItem) : ?>
    <!-- <h3><//?= $newsItem['title'] ?></h3> -->
    <h5><a href="/blog/<?= $newsItem['slug']; ?>" class="link-success"><?= $newsItem['title'] ?></a></h5>
    <?php endforeach; ?>
    <?php else : ?>
    <p class="text-center">No posts have been found</p>
    <?php endif; ?>
  </div>
  <!-- <//?php
  echo "<pre>";
  print_//r($news);
  echo "</pre>";
  ?> -->
</section>