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
      <h3 class="box-title">Edit Pengguna</h3>
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
            <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
            <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
              <label for="name">Nama</label>
              <input type="text" id=name name="name" value="<?= $this->input->post('name') ?? $row->name; ?>" class="form-control">
              <?= form_error('name'); ?>
            </div>
            <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
              <label for="username">Username</label>
              <input type="text" id=username name="username" value="<?= $this->input->post('username') ?? $row->username; ?>" class=" form-control">
              <?= form_error('username'); ?>
            </div>
            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
              <label for="password">Password</label><small> <i>(Biarkan kosong jika tidak ingin diganti)</i></small>
              <input type="password" id=password name="password" value="<?= $this->input->post('password') ?>" class=" form-control">
              <?= form_error('password'); ?>
            </div>
            <div class="form-group <?= form_error('konfirm_password') ? 'has-error' : null ?>">
              <label for="password">Konfirmasi Password</label>
              <input type="password" id=konfirm_password name="konfirm_password" value="<?= $this->input->post('konfirm_password') ?>" class=" form-control">
              <?= form_error('konfirm_password'); ?>
            </div>
            <div class="form-group <?= form_error('contact') ? 'has-error' : null ?>">
              <label for="contact">Contact</label>
              <input type="text" id=contact name="contact" value="<?= $this->input->post('contact') ?? $row->contact; ?>" class="form-control">
              <?= form_error('contact'); ?>
            </div>
            <div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
              <label for="email">Email</label>
              <input type="text" id=email name="email" value="<?= $this->input->post('email') ?? $row->email; ?>" class="form-control">
              <?= form_error('email'); ?>
            </div>
            <div class="form-group <?= form_error('alamat') ? 'has-error' : null ?>">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" class=" form-control"><?= $this->input->post('alamat') ?? $row->address; ?></textarea>
              <?= form_error('alamat'); ?>
            </div>
            <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
              <label for="level">Level</label>
              <select name="level" id="level" class="form-control">
                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                <option value="">-Pilih-</option>
                <option value="1" <?= $level == 1 ? 'selected' : null; ?>>Admin</option>
                <option value="2" <?= $level == 2 ? 'selected' : null; ?>>Head</option>
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