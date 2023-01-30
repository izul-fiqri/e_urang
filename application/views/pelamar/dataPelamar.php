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

<?php $this->view('message'); ?>
<div class="card">

  <div class="card-body">
    <h5 class="card-title">Data Lowongan</h5>

    <!-- Table with hoverable rows -->
    <table class="table table-hover">
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
              <a href="<?= site_url('pelamar/detail/' . $data->pelamar_id); ?>" class="btn btn-primary rounded-pill">
                Detail
              </a>
              <a href="<?= site_url('pelamar/hapus/' . $data->pelamar_id); ?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger rounded-pill">
                Hapus
              </a>

              </form>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- End Table with hoverable rows -->

  </div>
</div>