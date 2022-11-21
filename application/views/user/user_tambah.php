<div class="pagetitle">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Form User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Tambah User</h5>

    <!-- Form tambah user-->
    <form class="row g-3" action="" method="POST">

      <div class="col-7" <?= form_error('name') ? 'has-error' : null ?>>
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id=name name="name" value="<?= set_value('name'); ?>">
        <?= form_error('name'); ?>
      </div>
      <div class="col-7 <?= form_error('username') ? 'has-error' : null ?>">
        <label for="kuota" class="form-label">Username</label>
        <input type="text" class="form-control" id=username name="username" value="<?= set_value('username'); ?>">
        <?= form_error('username'); ?>
      </div>
      <div class="col-7 <?= form_error('password') ? 'has-error' : null ?>">
        <label for="">Password</label>
        <input class="form-control " type="password" id=password name="password" value="<?= set_value('password'); ?>">
        <?= form_error('password'); ?>
      </div>
      <div class="col-7 <?= form_error('konfirm_password') ? 'has-error' : null ?>">
        <label for="">Konfirmasi Password</label>
        <input class="form-control" type="password" id=konfirm_password name="konfirm_password" value="<?= set_value('konfirm_password'); ?>">
        <?= form_error('konfirm_password'); ?>
      </div>
      <div class="col-7" <?= form_error('level') ? 'has-error' : null ?>>
        <label class="col-sm-2 col-form-label" for="level">Level</label>
        <div class="col-sm-12">
          <select name="level" id="level" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1" <?= set_value('level') == 2 ? "selected" : null ?>>HRD</option>
            <option value="3" <?= set_value('level') == 3 ? "selected" : null ?>>Pelamar</option>
          </select>
          <?= form_error('level'); ?>
        </div>
      </div>

      <div class="text-left">
        <button type="submit" name="" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>