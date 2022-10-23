<section class="content-header">
  <h1>Applicant
    <small>Pelamar</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">
        <i class="fa fa-user-plus"></i>
      </a></li>
    <li class="active">Pelamar</li>
  </ol>
</section>

<!-- Main contenct -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= $page; ?> Pelamar</h3>
      <div class="pull-right">
        <a href="<?= site_url('pelamar'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?= site_url('pelamar/proses'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $row->pelamar_id; ?>">
            <div class="form-group">
              <label for="nama">Nama </label>
              <input type="text" id=nama name="nama" value="<?= $row->nama; ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select name="jenis_kelamin" id=jenis_kelamin class="form-control" required>
                <option value="L">-Pilih-</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Status Pernikahan</label>
              <select name="jenis_kelamin" id=jenis_kelamin class="form-control" required>
                <option value="L">-pilih-</option>
                <option value="L" <?= $row->jenis_kelamin == 'L' ? 'selected' : null; ?>>Belum Menikah</option>
                <option value="P" <?= $row->jenis_kelamin == 'P' ? 'selected' : null; ?>>Sudah Menikah</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control" ?></textarea>
            </div>
            <div class="form-group">
              <label for="name">Email</label>
              <input type="text" id=email name="email" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="name">No. Telepon </label>
              <input type="text" id=no_tlp name="no_tlp" value="" class="form-control" required>
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