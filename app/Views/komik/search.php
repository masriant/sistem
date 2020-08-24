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
          </div>


          <!-- /.card-header -->
          <div class="card-body">
            <table id="newData1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Sampul</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
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
                  <td>
                    <a href="/komik/<?= $k['slug']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-id-card"
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