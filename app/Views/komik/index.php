<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> <a href="/komik/create" class="btn btn-sm btn-primary"> <i class="fa fa-plus"
                  aria-hidden="true"></i> Add data</a> <a href="/komik/search" class="btn btn-sm btn-warning"> <i
                  class="fab fa-searchengin"></i> Cari data</a></h3>
          </div>
          <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
          <?php endif; ?>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="newData2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Sampul</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Gambar</th>
                  <th>Link</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($komik as $k) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><img src="/images/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                  <td><?= $k['judul']; ?></td>
                  <td><?= $k['penulis']; ?></td>
                  <td><?= $k['penerbit']; ?></td>
                  <td><?= $k['sampul']; ?></td>
                  <td>
                    <a href="/komik/<?= $k['slug']; ?>" class="btn btn-sm btn-success"><i class="fa fa-id-card"
                        aria-hidden="true"></i> Detail</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Sampul</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Gambar</th>
                  <th>Link</th>
                </tr>
              </tfoot>
            </table>
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
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>