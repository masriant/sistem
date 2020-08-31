<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>
          <center>Login <br>
            <?php function CekPendaftaran($todays_date, $start_date, $end_date)
            {
              $start_date = strtotime($start_date);
              $end_date = strtotime($end_date);
              $todays_date = strtotime($todays_date);
              if ($todays_date >= $start_date && $todays_date <= $end_date) {
                return 0;
                //BUKA 
              } else {
                if ($todays_date < $start_date) {
                  return 1; //BELUM 
                } else {
                  return 2; //LEWAT 
                }
              }
            }
            //Cara memanggilnya 
            $DATE_NOW = date("Y-m-d H:m:s");
            $START_DATE = $DATE_NOW; //'2020-08-25 00:00:00';
            $END_DATE = '2020-08-28 00:00:00';
            $CekStatus = CekPendaftaran($DATE_NOW, $START_DATE, $END_DATE); //Sekarang 
            $CekStatus; //memiliki nilai array yang terdiri dari 3 (0 atau 1 atau 2) 
            if ($CekStatus == 1) //1 BELUM BUKA 
            {
              echo "Pendaftaran Belum Buka"; //Tuliskan pesan jika belum dibuka 
            } elseif ($CekStatus == 2) //2 SUDAH TUTUP 
            {
              echo "Pendaftaran Sudah Tutup"; //Tuliskan pesan jika sudah ditutup 
            } elseif ($CekStatus == 0) //0 SEDANG BUKA 
            {
              echo "Masih Buka Pendaftaran"; //Munculkan form jika sedang dibuka 
            }
            ?>
          </center>

        </h3>
        <hr>
        <?php if (session()->get('success')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->get('success') ?>
        </div>
        <?php endif; ?>
        <form class="" action="/" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <div class="form-group my-3">
            <label for="email">Email address</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
          </div>
          <div class="form-group my-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="">
          </div>
          <?php if (isset($validation)) : ?>
          <div class="col-12 my-3">
            <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4 my-3">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-sm-8 text-right my-3">
              <a href="/register">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>