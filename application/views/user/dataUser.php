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
      <h3 class="box-title">Data Pengguna</h3>
      <div class="pull-right">
        <a href="<?= site_url('user/add'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i>
          Tambah
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Email</th>
            <th>Level</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($row->result() as $key => $data) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data->name; ?></td>
              <td><?= $data->username; ?></td>
              <td><?= $data->address; ?></td>
              <td><?= $data->contact; ?></td>
              <td><?= $data->email; ?></td>
              <td><?= $data->level == 1 ? "Admin" : "Head" ?></td>
              <td class="text-center" width="160px">
                <a href="<?= site_url('user/add'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                <a href="<?= site_url('user/add'); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus </a>

              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
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