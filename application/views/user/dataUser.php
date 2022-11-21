<div class="pagetitle">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Users</a></li>
      <!-- <li class="breadcrumb-item">Users</li> -->
      <li class="breadcrumb-item active">Data Users</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Data Users</h5>

    <!-- Table with hoverable rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Level</th>
          <?php if ($this->func->user_login()->level == 1) : ?>
            <th>Actions</th>
          <?php endif ?>
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
              $a = "Leader";
            } else {
              $a = "Pelamar";
            } ?>
            <td><?= $no++ ?></td>
            <td><?= $data->name; ?></td>
            <td><?= $data->username; ?></td>
            <td><?= $data->level = $a; ?></td>
            <td>
              <?php if ($a == "Pelamar") : ?>
                <?php if ($this->func->user_login()->level == 1) : ?>
                  <form action="<?= site_url('user/hapus'); ?>" method="POST">
                    <a href="<?= site_url('user/edit/' . $data->user_id); ?>" class="btn btn-primary rounded-pill">
                      Edit
                    </a>
                    <input type="hidden" value="<?= $data->user_id; ?>" name="user_id">
                    <button onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger rounded-pill">
                      Hapus
                    </button>
                  </form>
            </td>
          <?php endif; ?>
        <?php endif; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- End Table with hoverable rows -->

  </div>
</div>