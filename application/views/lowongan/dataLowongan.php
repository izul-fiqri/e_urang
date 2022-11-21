<div class="pagetitle">
  <h1>Lowongan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Lowongan</a></li>
      <!-- <li class="breadcrumb-item">Lowongan</li> -->
      <li class="breadcrumb-item active">Data Lowongan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Data Lowongan</h5>
    <?php if ($this->func->user_login()->level == 1) : ?>
      <div>
        <a href="<?= site_url('lowongan/add'); ?>" class="btn btn-primary btn-flat">
          Tambah
        </a>
      </div>
    <?php endif; ?>
    <!-- Table with hoverable rows -->
    <table class="table table-hover">
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
            <?php if ($this->func->user_login()->level == 1) : ?>
              <td>
                <a href="<?= site_url('lowongan/edit/' . $data->lowongan_id); ?>" class="btn btn-primary rounded-pill">
                  Edit
                </a>
                <a href="<?= site_url('lowongan/hapus/' . $data->lowongan_id); ?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger rounded-pill">
                  Hapus
                </a>

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