<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">




  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= $title; ?></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/images/<?= $komik['sampul']; ?>" class="card-img" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $komik['judul']; ?></h5>
              <br>
              <ul class="ml-4 mb-0 fa-ul text-muted">
                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penulis : </b>
                  <?= $komik['penulis']; ?> </li>
                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Penerbit : </b>
                  <?= $komik['penerbit']; ?> </li>
              </ul>

              <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
              <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
              <a href="/komik" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>
            </div>
          </div>
        </div>
      </div>






      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            Detail <?= $komik['penerbit']; ?>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b><?= $komik['judul']; ?></b></h2>
                <p class="text-muted text-sm"><b>About: </b> <?= $komik['judul']; ?> </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penulis :
                    </b><?= $komik['penulis']; ?> </li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Penerbit :
                    </b><?= $komik['penerbit']; ?> </li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="/images/<?= $komik['sampul']; ?>" alt="user-avatar" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
              <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
              <a href="/komik" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

            </div>
          </div>
        </div>
      </div>








    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="text-left">
        <a href="/" class="btn btn-sm bg-teal">
          <i class="fas fa-home"></i> Home
        </a>
        <a href="/komik" class="btn btn-sm btn-primary">
          <i class="fas fa-user"></i> Back
        </a>
      </div>
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
<?= $this->endSection(); ?>
<!-- /.content-wrapper -->