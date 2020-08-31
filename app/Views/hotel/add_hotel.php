<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<section class="content">
  <!-- <div class="container"> -->

  <main class="container">

    <div class="row">
      <form class="row g-3" action="/hotel/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <div class="mb-3 row">
                <label for="" class="col-sm-3 col-form-label">ID Hotel </label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('')) ? 'is-invalid' : ''; ?>"
                    name="" id="" value=" <?= $newID; ?>" readonly>
                  <div class="invalid-feedback">
                    <?= $validation->getError(''); ?>
                  </div>
                </div>
              </div>
              <div class=" mb-3 row">
                <label for="hotel" class="col-sm-3 col-form-label">Hotel</label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('hotel')) ? 'is-invalid' : ''; ?>"
                    id="hotel" name="hotel" value="<?= old('hotel'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('hotel'); ?>
                  </div>
                </div>
              </div>
              <div class=" mb-3 row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                    id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="kota" class="col-sm-3 col-form-label">Kota</label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('kota')) ? 'is-invalid' : ''; ?>"
                    id="kota" name="kota" value="<?= old('kota'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('kota'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="room" class="col-sm-3 col-form-label">Room</label>
                <div class="col-md-8">
                  <input type="text" class="form-control <?= ($validation->hasError('room')) ? 'is-invalid' : ''; ?>"
                    id="room" name="room" value="<?= old('room'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('room'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="marketing" class="col-sm-3 col-form-label">Marketing</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('marketing')) ? 'is-invalid' : ''; ?>" id="marketing"
                    name="marketing" value="<?= old('marketing'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('marketing'); ?>
                  </div>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="contact_marketing" class="col-sm-3 col-form-label">Contact</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('contact_marketing')) ? 'is-invalid' : ''; ?>"
                    id="contact_marketing" name="contact_marketing" value="<?= old('contact_marketing'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('contact_marketing'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="status_marketing" class="col-sm-3 col-form-label">Status Marketing</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('status_marketing')) ? 'is-invalid' : ''; ?>"
                    id="status_marketing" name="status_marketing" value="<?= old('status_marketing'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('status_marketing'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="checkin" class="col-sm-3 col-form-label">Check-In</label>
                <div class="col-md-8">
                  <input type="date" class="form-control <?= ($validation->hasError('checkin')) ? 'is-invalid' : ''; ?>"
                    id="checkin" name="checkin" value="<?= old('checkin'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('checkin'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="checkout" class="col-sm-3 col-form-label">Check-Out</label>
                <div class="col-md-8">
                  <input type="date"
                    class="form-control <?= ($validation->hasError('checkout')) ? 'is-invalid' : ''; ?>" id="checkout"
                    name="checkout" value="<?= old('checkout'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('checkout'); ?>
                  </div>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <div class="mb-3 row">
                <label for="bed_single" class="col-sm-3 col-form-label">Bed Single</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('bed_single')) ? 'is-invalid' : ''; ?>"
                    id="bed_single" name="bed_single" value="<?= old('bed_single'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('bed_single'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="bed_double" class="col-sm-3 col-form-label">Bed Double</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('bed_double')) ? 'is-invalid' : ''; ?>"
                    id="bed_double" name="bed_double" value="<?= old('bed_double'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('bed_double'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="bed_twin" class="col-sm-3 col-form-label">Bed Twin</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('bed_twin')) ? 'is-invalid' : ''; ?>" id="bed_twin"
                    name="bed_twin" value="<?= old('bed_twin'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('bed_twin'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="meeting_halfday" class="col-sm-3 col-form-label">Meeting Halfday</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('meeting_halfday')) ? 'is-invalid' : ''; ?>"
                    id="meeting_halfday" name="meeting_halfday" value="<?= old('meeting_halfday'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('meeting_halfday'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="meeting_fullday" class="col-sm-3 col-form-label">Meeting Fullday</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('meeting_fullday')) ? 'is-invalid' : ''; ?>"
                    id="meeting_fullday" name="meeting_fullday" value="<?= old('meeting_fullday'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('meeting_fullday'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="meeting_fullboard" class="col-sm-3 col-form-label">Meeting Fullboard</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('meeting_fullboard')) ? 'is-invalid' : ''; ?>"
                    id="meeting_fullboard" name="meeting_fullboard" value="<?= old('meeting_fullboard'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('meeting_fullboard'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="bed_fullboard" class="col-sm-3 col-form-label">Bed Fullboard</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('bed_fullboard')) ? 'is-invalid' : ''; ?>"
                    id="bed_fullboard" name="bed_fullboard" value="<?= old('bed_fullboard'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('bed_fullboard'); ?>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="compliment" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-md-8">
                  <input type="text"
                    class="form-control <?= ($validation->hasError('compliment')) ? 'is-invalid' : ''; ?>"
                    id="compliment" name="compliment" value="<?= old('compliment'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('compliment'); ?>
                  </div>
                </div>
              </div>
              <!-- <div class="mb-3 row">
                <label for="compliment" class="col-sm-3 col-form-label">Logo</label>
                <div class="col-sm-3">
                  <img src="/assets/brand/default.png" width="100" class="img-thumbnail img-preview">
                </div>
                <div class="col-md-5">
                  <div class="custom-file">
                    <input type="file"
                      class="custom-file-input <//?= ($validation->hasError('compliment')) ? 'is-invalid' : ''; ?>"
                      id="compliment" name="compliment" onchange="previewImg()">
                    <div class="invalid-feedback">
                      <//?= $validation->getError('compliment'); ?>
                    </div>
                    <label class="custom-file-label" for="compliment">Pilih gambar</label>
                  </div>
                </div>
              </div> -->

              <div class="form-check offset-md-3 col-md-8">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                  <!-- Check me out -->
                </label><button type="submit" class="btn btn-sm btn-primary">Save</button>
              </div>
            </div>

          </div>
      </form>
    </div>
  </main><!--  /.container -->





  <!-- </div> -->

</section>
<?= $this->endSection() ?>