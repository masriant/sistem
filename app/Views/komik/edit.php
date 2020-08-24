<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= $title; ?> <a href="/komik" class="btn btn-sm btn-primary"> <i
            class="fas fa-undo-alt"></i> Back</a></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <!-- <h2 class="my-3">Form Tambah Data </h2> -->
      <!-- <form class="form-horizontal" action="/komik/save" method="post" id="quickForm"> -->

      <form class="form-horizontal" action="/komik/update/<?= $komik['id']; ?>" method="post"
        enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">

        <div class="form-group row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
              id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>"
              id="penulis" name="penulis" placeholder="Penulis"
              value="<?= (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('penulis'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>"
              id="penerbit" name="penerbit" placeholder="Penerbit"
              value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('penerbit'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/images/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"
                id="sampul" name="sampul" onchange="previewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
              <label class="custom-file-label" for="sampul"><?= $komik['sampul']; ?></label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-closed-captioning"></i> Ubah</button>
            <button type="reset" class="btn btn-sm btn-primary"><i class="fas fa-undo-alt"></i> Reset</button>
          </div>
        </div>
      </form>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Pastikan memasukkan data dengan benar karena data tersebut yang akan tercetak di database dan seluruh hal
      administrasi.
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
<?= $this->endSection(); ?>
<!-- /.content-wrapper -->