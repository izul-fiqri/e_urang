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
    <h5 class="card-title">Edit User</h5>

    <!-- Vertical Form -->
    <form class="row g-3" method="POST">
      <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
      <div class="col-7" <?= form_error('name') ? 'has-error' : null ?>>
        <label for="name">Nama</label>
        <input type="text" id=name name="name" value="<?= $this->input->post('name') ?? $row->name; ?>" class="form-control">
        <?= form_error('name'); ?>
      </div>
      <div class="col-7" <?= form_error('username') ? 'has-error' : null ?>>
        <label for="username">Username</label>
        <input type="text" id=username name="username" value="<?= $this->input->post('username') ?? $row->username; ?>" class=" form-control">
        <?= form_error('username'); ?>
      </div>
      <div class="col-7" <?= form_error('password') ? 'has-error' : null ?>>
        <label for="password">Password</label><small> <i>(Biarkan kosong jika tidak ingin diganti)</i></small>
        <input type="password" id=password name="password" value="<?= $this->input->post('password') ?>" class=" form-control">
        <?= form_error('password'); ?>
      </div>
      <div class="col-7" <?= form_error('konfirm_password') ? 'has-error' : null ?>>
        <label for="password">Konfirmasi Password</label>
        <input type="password" id=konfirm_password name="konfirm_password" value="<?= $this->input->post('konfirm_password') ?>" class=" form-control">
        <?= form_error('konfirm_password'); ?>
      </div>
      <div class="col-7" <?= form_error('level') ? 'has-error' : null ?>>
        <input type="hidden" name="level" value="<?= $row->level; ?>">

      </div>

      <div class="text-left">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>