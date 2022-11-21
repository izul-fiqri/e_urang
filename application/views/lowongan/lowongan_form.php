<div class="pagetitle">
  <h1>Lowongan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
      <li class="breadcrumb-item">Lowongan</li>
      <li class="breadcrumb-item active">Form Lowongan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?= $page; ?> Lowongan</h5>

    <!-- Form lowongan-->
    <form class="row g-3 needs-validation" action="<?= site_url('lowongan/proses'); ?>" method="POST" novalidate>
      <input type="hidden" name="id" value="<?= $row->lowongan_id; ?>">
      <div class="col-6">
        <label for="nama_lowongan" class="form-label">Nama Lowongan</label>
        <input type="text" class="form-control" id=nama_lowongan name="nama_lowongan" value="<?= $row->nama_lowongan; ?>" required>
        <div class="invalid-feedback">nama tidak boleh kosong.</div>
      </div>
      <div class="col-1">
        <label for="kuota" class="form-label">Kuota</label>
        <input type="text" class="form-control" id=kuota name="kuota" value="<?= $row->kouta; ?>" required>
        <div class="invalid-feedback">kuota tidak boleh kosong.</div>
      </div>
      <div class="col-12">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" style="height: 100px;" name="deskripsi" id="deskripsi" ?><?= $row->description; ?></textarea>
      </div>
      <div class="col-6">
        <label for="">Tanggal Buka</label>
        <input class="form-control" id="tgl_buka" type="date" name="tgl_buka" value="<?= $row->tgl_buka; ?>" placeholder="" required>
        <div class="invalid-feedback">tanggal buka tidak boleh kosong.</div>
      </div>
      <div class="col-6">
        <label for="">Tanggal Tutup</label>
        <input class="form-control" id="tgl_tutup" type="date" name="tgl_tutup" value="<?= $row->tgl_buka; ?>" placeholder="" required>
        <div class="invalid-feedback">tanggal tutup tidak boleh kosong.</div>
      </div>

      <div class="text-center">
        <button type="submit" name="<?= $page; ?>" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>