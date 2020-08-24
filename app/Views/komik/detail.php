<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Table <a href="/komik" class="btn btn-sm btn-primary"> <i
                  class="fas fa-undo-alt"></i> Back</a></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Detail <?= $komik['penerbit']; ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-8">
                      <h2 class="lead"><b><?= $komik['judul']; ?></b></h2>
                      <p class="text-muted text-sm"><b>About: </b> <?= $komik['judul']; ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penerbit :
                          </b><?= $komik['penerbit']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Penulis :
                          </b><?= $komik['penulis']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Slug :
                          </b><?= $komik['slug']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> <b>Dibuat :
                          </b><?= $komik['created_at']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="far fa-calendar-check"></i></span> <b>Update :
                          </b><?= $komik['updated_at']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-slash"></i></span> <b>Delete :
                          </b><?= $komik['id']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-id-badge"></i></span> <b>ID :
                          </b><?= $komik['id']; ?> </li>
                      </ul>
                    </div>
                    <div class="col-4 text-center">
                      <img src="/images/<?= $komik['sampul']; ?>" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-sm btn-warning"><i
                        class="fas fa-edit"></i> Edit </a>

                    <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash-alt"></i> Delete</button>
                    </form>
                    <a href="/komik" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->

          <div class="card-body">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-6">
                  <!-- <div class="card-body"> -->
                  <div class="card-header text-muted border-bottom-0">
                    Detail :
                    <p class="text-muted text-sm"><b>Judul Buku: </b> <?= $komik['judul']; ?> </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penerbit :
                        </b><?= $komik['penerbit']; ?> </li>
                      <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>Penulis :
                        </b><?= $komik['penulis']; ?> </li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Slug :
                        </b><?= $komik['slug']; ?> </li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> <b>Dibuat :
                        </b><?= $komik['created_at']; ?> </li>
                      <li class="small"><span class="fa-li"><i class="far fa-calendar-check"></i></span> <b>Update :
                        </b><?= $komik['updated_at']; ?> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>
                  Edit </a>
                <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');"><i
                      class="fas fa-trash-alt"></i> Delete</button>
                </form>
                <a href="/komik" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

              </div>
            </div>



          </div>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->



      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $title; ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
              title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/images/<?= $komik['sampul']; ?>" class="card-img" alt="<?= $komik['sampul']; ?>">
              </div>
              <div class="col-md-8">
                <div class="card-body d-inline">
                  <h5 class="card-title"><?= $komik['judul']; ?></h5>
                  <br>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Penulis : </b>
                      <?= $komik['penulis']; ?> </li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Penerbit : </b>
                      <?= $komik['penerbit']; ?> </li>
                  </ul>

                  <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-sm btn-warning"><i
                      class="fas fa-edit"></i> Edit </a>
                  <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-sm btn-danger"
                      onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash-alt"></i> Delete</button>
                  </form>
                  <a href="/komik" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>
                </div>
              </div>
            </div>
          </div>







        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->




    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- </div> -->
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>