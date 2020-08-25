<div class="container">
  <h3>Create New Post</h3>
  <?php if ($_POST) : ?>
  <?= \Config\Services::validation()->listErrors(); ?>
  <?php endif; ?>
  <form class="" action="/blog/create" method="POST">
    <div class="form-group my-2">
      <label for="title"><strong>Title</strong></label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group my-2">
      <label for="body"><strong>Post Body</strong></label>
      <textarea class="form-control" name="body" id="body"></textarea>
    </div>
    <div class="form-group my-2">
      <button type="submit" class="btn btn-sm btn-primary" name="Create" id="Create">Create</button>
    </div>
  </form>
</div>