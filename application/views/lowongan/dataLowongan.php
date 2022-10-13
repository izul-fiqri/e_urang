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
      <h3 class="box-title">Data Lowongan</h3>
      <div class="pull-right">
        <a href="<?= site_url('lowongan/add'); ?>" class="btn btn-primary btn-flat">
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
            <th>Nama Lowongan</th>
            <th>Kuota</th>
            <th>Deskripsi</th>
            <th>Buka Pendaftaran</th>
            <th>Tutup Pendaftaran</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($row->result() as $key => $data) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data->nama_lowongan; ?></td>
              <td><?= $data->kouta; ?></td>
              <td><?= $data->description; ?></td>
              <td><?= $data->tgl_buka; ?></td>
              <td><?= $data->tgl_tutup; ?></td>
              <td>
                <a href="<?= site_url('lowongan/edit/' . $data->lowongan_id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                  Edit
                </a>
                <a href="<?= site_url('lowongan/hapus/' . $data->lowongan_id); ?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i>
                  Hapus
                </a>

                </form>

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