<div class="pagetitle">
  <h1>Lowongan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Data Users</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Data Users</h5>
    <div>
      <a href="<?= site_url('admin/user/add'); ?>" class="btn btn-primary btn-flat">
        Tambah
      </a>
    </div>
    <!-- Table with hoverable rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Level</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($row->result() as $key => $data) : ?>
          <tr>
            <?php $a;
            if ($data->level == 1) {
              $a = "Admin";
            } elseif ($data->level == 2) {
              $a = "HRD";
            } else {
              $a = "Pelamar";
            } ?>
            <td><?= $no++ ?></td>
            <td><?= $data->name; ?></td>
            <td><?= $data->username; ?></td>
            <td><?= $data->level = $a; ?></td>
            <td>
              <?php if ($a == "Pelamar" || $a == "HRD") : ?>
                <form action="<?= site_url('admin/user/hapus'); ?>" method="POST">
                  <a href="<?= site_url('admin/user/edit/' . $data->user_id); ?>" class="btn btn-primary rounded-pill">
                    Edit
                  </a>
                  <input type="hidden" value="<?= $data->user_id; ?>" name="user_id">
                  <button onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger rounded-pill">
                    Hapus
                  </button>
                </form>
            </td>
          <?php endif; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- End Table with hoverable rows -->

  </div>
</div>