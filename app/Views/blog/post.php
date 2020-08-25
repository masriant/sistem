<section>
  <div class="container">
    <article class="blog-post">
      <h4><?= $post['title']; ?></h4>
      <div class="details">
        Posted on: <?= date('d m Y', strtotime($post['created_at'])); ?> by <a
          href="https://www.masrianto.com">Masrianto</a>
      </div>
      <?= $post['body']; ?>
    </article>
  </div>
</section>