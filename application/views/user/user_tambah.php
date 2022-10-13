<section class="content-header">
  <h1>Users
    <small>Pengguna</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">
        <i class="fa fa-users"></i>
      </a></li>
    <li class="active">User</li>
  </ol>
</section>

<!-- Main contenct -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tambah Pengguna</h3>
      <div class="pull-right">
        <a href="<?= site_url('user'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <!-- <?= validation_errors(); ?> -->
          <form action="" method="post">
            <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
              <label for="name">Nama</label>
              <input type="text" id=name name="name" value="<?= set_value('name'); ?>" class="form-control">
              <?= form_error('name'); ?>
            </div>
            <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
              <label for="username">Username</label>
              <input type="text" id=username name="username" value="<?= set_value('username'); ?>" class=" form-control">
              <?= form_error('username'); ?>
            </div>
            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
              <label for="password">Password</label>
              <input type="password" id=password name="password" value="<?= set_value('password'); ?>" class=" form-control">
              <?= form_error('password'); ?>
            </div>
            <div class="form-group <?= form_error('konfirm_password') ? 'has-error' : null ?>">
              <label for="password">Konfirmasi Password</label>
              <input type="password" id=konfirm_password name="konfirm_password" value="<?= set_value('konfirm_password'); ?>" class=" form-control">
              <?= form_error('konfirm_password'); ?>
            </div>
            <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
              <label for="level">Level</label>
              <select name="level" id="level" class="form-control">
                <option value="">-Pilih-</option>
                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Head</option>
              </select>
              <?= form_error('level'); ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-flat">
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