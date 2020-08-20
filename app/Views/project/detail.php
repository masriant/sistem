<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Table <a href="/project" class="btn btn-sm btn-primary"> <i
                  class="fas fa-undo-alt"></i> Back</a></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
          <?php endif; ?>
          <div class="card-body">
            <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Detail <?= $project['userid']; ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-8">
                      <h2 class="lead"><b><?= $project['nama']; ?></b></h2>
                      <p class="text-muted text-sm"><b>About: </b> <?= $project['nama']; ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>jabatan :
                          </b><?= $project['jabatan']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-edit"></i></span> <b>instansi :
                          </b><?= $project['instansi']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Slug :
                          </b><?= $project['slug']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> <b>Dibuat :
                          </b><?= $project['created_at']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="far fa-calendar-check"></i></span> <b>Update :
                          </b><?= $project['updated_at']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-user-slash"></i></span> <b>Delete :
                          </b><?= $project['id']; ?> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-id-badge"></i></span> <b>ID :
                          </b><?= $project['id']; ?> </li>
                      </ul>
                    </div>
                    <div class="col-4 text-center">
                      <img src="/assets/images/<?= $project['kodeqr']; ?>" alt="user-avatar"
                        class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="/project/edit/<?= $project['slug']; ?>" class="btn btn-sm btn-warning"><i
                        class="fas fa-edit"></i> Edit P</a>
                    <a href="/project/editing/<?= $project['slug']; ?>" class="btn btn-sm btn-warning"><i
                        class="fas fa-edit"></i> Edit L</a>

                    <form action="/project/<?= $project['id']; ?>" method="POST" class="d-inline">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash-alt"></i> Delete</button>
                    </form>
                    <a href="/project" class="btn btn-sm btn-primary"> <i class="fas fa-undo-alt"></i> Back</a>

                  </div>
                </div>

              </div>
            </div>
            <!-- </div> -->

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->




      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection(); ?>