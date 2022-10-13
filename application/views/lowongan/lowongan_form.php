<section class="content-header">
  <h1>Vacancy
    <small>Lowongan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">
        <i class="fa fa-vimeo"></i>
      </a></li>
    <li class="active">Lowongan</li>
  </ol>
</section>

<!-- Main contenct -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= $page; ?> Lowongan</h3>
      <div class="pull-right">
        <a href="<?= site_url('lowongan'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?= site_url('lowongan/proses'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $row->lowongan_id; ?>">
            <div class="form-group">
              <label for="name">Nama Lowongan</label>
              <input type="text" id=nama_lowongan name="nama_lowongan" value="<?= $row->nama_lowongan; ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="name">Kuota</label>
              <input type="text" id=kuota name="kuota" value="<?= $row->kouta; ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="alamat">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control" ?><?= $row->description; ?></textarea>
            </div>
            <div class="form-group">
              <label>Tanggal Buka</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker">
              </div>
              <!-- /.input group -->
            </div>

            <div class=" form-group">
              <button type="submit" name="<?= $page; ?>" class="btn btn-success btn-flat">
                <i class="fa fa-paper-plane-o"> Save</i></button>
              <button type="reset" class="btn btn-flat">
                Reset</button>

            </div>


          </form>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>

</footer>
</section>