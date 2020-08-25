<?= $this->extend('main/template') ?>
<?= $this->section('content') ?>
<div class="bg-light p-2">
  <div class="container">
    <h1 class="display-4">Home</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eos repellendus id maiores saepe
      quis
      similique magni! Veniam obcaecati cupiditate recusandae, nobis aspernatur, soluta eligendi quos, quibusdam
      blanditiis tempora cumque?</p>
    <hr class="my-4">
    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi deserunt alias eius totam
      tempore molestiae,
      iusto ab deleniti. Possimus mollitia distinctio nesciunt labore obcaecati nobis aliquam, accusantium ullam. Iusto,
      voluptatibus!
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
</div>

<section class="blog-section">
  <!-- <div class="container">
    <//?php if ($news) : ?>
    <//?php foreach ($news as $newsItem) : ?>
    <h3><//?php $newsItem['title'] ?></h3>
    <//?php endforeach; ?>
    <//?php else : ?>
    <p class="text-center">No posts have been found</p>
    <//?php endif; ?>
  </div> -->
  <!-- <//?php
  echo "<pre>";
  print_r//($news);
  echo "</pre>";
  ?> -->
</section>
<?= $this->endSection() ?>