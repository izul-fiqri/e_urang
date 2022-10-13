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
      <h3 class="box-title">Data Pelamar</h3>
      <div class="pull-right">
        <a href="<?= site_url('pelamar/add'); ?>" class="btn btn-primary btn-flat">
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
            <th>Nama Pelamar</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($row->result() as $key => $data) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data->nama; ?></td>
              <td><?= $data->jenis_kelamin == 'L' ? "Laki-Laki" : "Perempuan"; ?></td>
              <td><?= $data->alamat; ?></td>
              <td><?= $data->created; ?></td>
              <td>
                <a href="<?= site_url('pelamar/detail/' . $data->pelamar_id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-book"></i>
                  Detail
                </a>
                <!-- <a href="<?= site_url('pelamar/edit/' . $data->pelamar_id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                  Edit
                </a> -->
                <a href="<?= site_url('pelamar/hapus/' . $data->pelamar_id); ?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i>
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