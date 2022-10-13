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

      <div class="pull-right">
        <a href="<?= site_url('pelamar'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
      <div class="col-md-8">
        <div class="card">

          <div class="card-header" method="post">
            <h4>Detail Data Pelamar</h4>
            <input type="hidden" name="id" value=" <?= $row->pelamar_id; ?>">
          </div>
          <div class="card-body">
            <div class="bd-example">
              <dl class="row">
                <dt class="col-sm-3">Nama</dt>
                <dd class="col-sm-9">: <?= $row->nama; ?></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">Jenis Kelamin </dt>
                <dd class="col-sm-9">: <?= $row->jenis_kelamin == 'L' ? "Laki-Laki" : "Perempuan"; ?></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">Tanggal Lahir </dt>
                <dd class="col-sm-9">: <?= $row->tgl_lahir; ?></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">Status</dt>
                <dd class="col-sm-9">: <?= $row->status; ?></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">: <?= $row->email; ?></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">No. Telepon</dt>
                <dd class="col-sm-9">: <?= $row->no_tlp; ?></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-3">Tanggal Pendaftaran</dt>
                <dd class="col-sm-9">: <?= $row->created; ?></dd>
              </dl>
            </div>
            <div class=" form-group">
              <a href="<?= site_url('pelamar/edit/' . $row->pelamar_id); ?>" type="submit" name="" class="btn btn-default btn-flat">
                <i class="fa fa-pencil"> Update</i></a>
            </div>

          </div>
        </div>
</section>
<!-- /.content -->

</footer>
</section>