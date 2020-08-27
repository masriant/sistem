<div class="container">
  <div class="row">
    <div class="col-12">
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
            <?php
            //ubah timezone menjadi jakarta
            date_default_timezone_set("Asia/Jakarta");
            //ambil jam dan menit
            $b = time();
            $hour = date("G", $b);
            //atur salam menggunakan IF
            if ($hour >= 0 && $hour <= 11) {
              $salam = "Selamat Pagi ";
            } elseif ($hour >= 12 && $hour <= 14) {
              $salam = "Selamat Siang ";
            } elseif ($hour >= 15 && $hour <= 17) {
              $salam = "Selamat Sore ";
            } elseif ($hour >= 17 && $hour <= 18) {
              $salam = "Selamat Petang ";
            } elseif ($hour >= 19 && $hour <= 23) {
              $salam = "Selamat Malam ";
            }

            ?>

            <h1 class="display-4"><?= 'Hello ' . $salam; ?><?= session()->get('firstname') ?></h1>
            <p class="lead">Beberapa list posting yang telah siap untuk di publikasikan :</p>
            <hr class="my-4">
            <?php $i = 1;
            if ($news) : ?>
            <?php foreach ($news as $newsItem) : ?>
            <!-- <h3><//?= $newsItem['title'] ?></h3> -->
            <p class="lead"><?= $i++; ?>. <?= $newsItem['title'] ?> <a href="/blog/<?= $newsItem['slug']; ?>"
                class="btn btn-primary btn-sm">Read More...</a>
            </p>
            <?php endforeach; ?>
            <?php else : ?>
            <p class="text-center">No posts have been found</p>
            <?php endif; ?>
            <p class="lead">Silahkan dikoreksi lebih lanjut sebelum posting. anda bisa juga menambahkan konsep dengan
              klik tombol merah ini.
              <a class="btn btn-danger btn-sm" href="/blog/create" role="button">Learn more</a>
            </p>
          </div>
        </div>
      </section>


      <hr class="my-4">
      <section class="blog-section">
        <div class="container">
          <?php if ($news) : ?>
          <?php foreach ($news as $newsItem) : ?>
          <!-- <h3><//?= $newsItem['title'] ?></h3> -->
          <h5><?= $newsItem['title'] ?> <a href="/blog/<?= $newsItem['slug']; ?>" class="link-success">Read More...</a>
          </h5>
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
    </div>
  </div>
</div>