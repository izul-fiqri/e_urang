<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url() ?>assets/cads/images/logommp.png">
  <title>E-Urang - MMP</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
    <header class="main-header">
      <a href="#" class="logo">
        <span class="logo-mini">SPK<b>MMP</b></span>
        <span class="logo-lg">e-Urang<b> MMP</b></span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">3</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 3 tasks</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <h3>Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image">
                <span class="hidden-xs"><?= $this->func->user_login()->username ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle">
                  <p><?= $this->func->user_login()->name ?>
                    <small></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= site_url('auth/logout') ?>" class="btn btn-flat bg-red">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column -->
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle">
          </div>
          <div class="pull-left info">
            <p><?= $this->func->user_login()->name ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?= site_url('dashboard/dash_admin') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <a href="<?= site_url('admin/lowongan'); ?>"><i class="fa fa-vimeo"></i> <span>Lowongan</span></a>
          </li>
          <li>
            <a href="<?= site_url('admin/pelamar'); ?>"><i class="fa fa-spinner"></i> <span>Pelamar</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-archive"></i> <span>SPK</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Kriteria</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Units</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Items</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Transaction</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Stock In</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Stock Out</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i> <span>Reports</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Stocks</a></li>
            </ul>
          </li>
          <?php if ($this->func->user_login()->level == 1) : ?>
            <li class="header">SETTINGS</li>
            <li><a href="<?= site_url('admin/user') ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
          <?php endif; ?>
        </ul>
      </section>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <?php echo $contents ?>
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2022 <a href="#">Moh. Izul Fiqri</a>.</strong> All rights reserved.
    </footer>

  </div>

  <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>

</html>


//data lowongan
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
        <a href="<?= site_url('admin/lowongan/add'); ?>" class="btn btn-primary btn-flat">
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
                <a href="<?= site_url('admin/lowongan/edit/' . $data->lowongan_id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                  Edit
                </a>
                <a href="<?= site_url('admin/lowongan/hapus/' . $data->lowongan_id); ?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i>
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



//data user
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
        <a href="<?= site_url('admin/user/add'); ?>" class="btn btn-primary btn-flat">
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
              <td><?= $data->level == 1 ? "Admin" : "Head" ?></td>
              <td>
                <form action="<?= site_url('admin/user/hapus'); ?>" method="POST">
                  <a href="<?= site_url('admin/user/edit/' . $data->user_id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                    Edit
                  </a>
                  <input type="hidden" value="<?= $data->user_id; ?>" name="user_id">
                  <button onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
                    Hapus
                  </button>
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



//form lowongan
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
      <h3 class="box-title"><?= $page; ?> Lowongan</h3>
      <div class="pull-right">
        <a href="<?= site_url('admin/lowongan'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?= site_url('admin/lowongan/proses'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $row->lowongan_id; ?>">
            <div class="form-group">
              <label for="name">Nama Lowongan</label>
              <input type="text" id=nama_lowongan name="nama_lowongan" value="<?= $row->nama_lowongan; ?>" class="form-control" required>
              <div class="invalid-feedback">Please choose a username.</div>
            </div>
            <div class="form-group">
              <label for="name">Kuota</label>
              <input type="text" id=kuota name="kuota" value="<?= $row->kouta; ?>" class="form-control" required>
              <div class="invalid-feedback">Please choose a username.</div>
            </div>
            <div class="form-group">
              <label for="alamat">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control" ?><?= $row->description; ?></textarea>

            </div>
            <div class="form-group">
              <label for="">Tanggal Buka</label>
              <input class="form-control" id="tgl_buka" type="date" name="tgl_buka" value="<?= $row->tgl_buka; ?>" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Tanggal Tutup</label>
              <input class="form-control" id="tgl_tutup" type="date" name="tgl_tutup" value="<?= $row->tgl_buka; ?>" placeholder="">
            </div>

            <div class=" form-group">
              <button type="submit" name="<?= $page; ?>" class="btn btn-success btn-flat">
                <i class="fa fa-paper-plane-o"> Save</i></button>
              <button type="reset" class="btn btn-flat">
                Reset</button>

            </div>


          </form>
        </div>
      </div>
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


//form edit users
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
      <h3 class="box-title">Edit Pengguna</h3>
      <div class="pull-right">
        <a href="<?= site_url('admin/user'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <!-- <?= validation_errors(); ?> -->
          <form action="" method="post">
            <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
            <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
              <label for="name">Nama</label>
              <input type="text" id=name name="name" value="<?= $this->input->post('name') ?? $row->name; ?>" class="form-control">
              <?= form_error('name'); ?>
            </div>
            <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
              <label for="username">Username</label>
              <input type="text" id=username name="username" value="<?= $this->input->post('username') ?? $row->username; ?>" class=" form-control">
              <?= form_error('username'); ?>
            </div>
            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
              <label for="password">Password</label><small> <i>(Biarkan kosong jika tidak ingin diganti)</i></small>
              <input type="password" id=password name="password" value="<?= $this->input->post('password') ?>" class=" form-control">
              <?= form_error('password'); ?>
            </div>
            <div class="form-group <?= form_error('konfirm_password') ? 'has-error' : null ?>">
              <label for="password">Konfirmasi Password</label>
              <input type="password" id=konfirm_password name="konfirm_password" value="<?= $this->input->post('konfirm_password') ?>" class=" form-control">
              <?= form_error('konfirm_password'); ?>
            </div>
            <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
              <label for="level">Level</label>
              <select name="level" id="level" class="form-control">
                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                <option value="">-Pilih-</option>
                <option value="1" <?= $level == 1 ? 'selected' : null; ?>>Admin</option>
                <option value="2" <?= $level == 2 ? 'selected' : null; ?>>Head</option>
              </select>
              <?= form_error('level'); ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-flat">
                <i class="fa fa-paper-plane-o"> Save</i></button>
              <button type="reset" class="btn btn-flat">
                Reset</button>

            </div>

          </form>
        </div>
      </div>
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


<!-- //tambah Pengguna -->
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
      <h3 class="box-title">Tambah Pengguna</h3>
      <div class="pull-right">
        <a href="<?= site_url('user'); ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i>
          Back
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <!-- <?= validation_errors(); ?> -->
          <form action="" method="post">
            <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
              <label for="name">Nama</label>
              <input type="text" id=name name="name" value="<?= set_value('name'); ?>" class="form-control">
              <?= form_error('name'); ?>
            </div>
            <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
              <label for="username">Username</label>
              <input type="text" id=username name="username" value="<?= set_value('username'); ?>" class=" form-control">
              <?= form_error('username'); ?>
            </div>
            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
              <label for="password">Password</label>
              <input type="password" id=password name="password" value="<?= set_value('password'); ?>" class=" form-control">
              <?= form_error('password'); ?>
            </div>
            <div class="form-group <?= form_error('konfirm_password') ? 'has-error' : null ?>">
              <label for="password">Konfirmasi Password</label>
              <input type="password" id=konfirm_password name="konfirm_password" value="<?= set_value('konfirm_password'); ?>" class=" form-control">
              <?= form_error('konfirm_password'); ?>
            </div>
            <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
              <label for="level">Level</label>
              <select name="level" id="level" class="form-control">
                <option value="">-Pilih-</option>
                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Head</option>
              </select>
              <?= form_error('level'); ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-flat">
                <i class="fa fa-paper-plane-o"> Save</i></button>
              <button type="reset" class="btn btn-flat">
                Reset</button>

            </div>


          </form>
        </div>
      </div>
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


<div class="box-body table-responsive">

</div>




<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="" class="logo d-flex align-items-center w-auto">
                <img src="<?= base_url() ?>assets/adminnice/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">e-URANG</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="pagetitle center">
                <center>
                  <h1>Pendaftaran Pelamar</h1>
              </div><!-- End Page Title -->
              </center>
              <section class="section profile">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Data Diri</h5>
                    <hr>

                    <!-- posisi yang dilamar -->
                    <?php echo form_open_multipart('daftar/proses') ?>
                    <div class="row mb-3">
                      <label for="pilih_lowongan" class="col-md-4 col-lg-3 col-form-label">Posisi yang dilamar</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="col-md-4">
                          <select class="form-select" id="pilih_lowongan" name="pilih_lowongan" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <?php foreach ($lowongan->result() as $key => $data) { ?>
                              <option value="<?= $data->lowongan_id ?>"> <?= $data->nama_lowongan; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-8">
                      <label for="nama" class="form-label">Nama Lengkap</label><small> <i>(sesuai KTP)</i></small>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Moh. Izul Fiqri">
                    </div>
                    <br>
                    <div class="row mb-3">
                      <label for="nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                      <div class="col-md-3 col-lg-3">
                        <input name="nik" type="text" class="form-control" id="nik" placeholder="3512120209920001">
                      </div>
                    </div>

                    <fieldset class="row mb-3">
                      <legend class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</legend>
                      <div class="col-md-3 col-lg-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                          <label class="form-check-label" for="jenis_kelamin">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                          <label class="form-check-label" for="jenis_kelamin">
                            Perempuan
                          </label>
                        </div>
                      </div>
                    </fieldset>

                    <div class="row mb-3">
                      <label for="tempat_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                      <div class="col-md-3 col-lg-5">
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="situbondo">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Tanggal lahir</label>
                      <div class="col-md-3 col-lg-5">
                        <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-3 col-lg-5">
                        <textarea class="form-control" style="height: 100px;" name="alamat" id="alamat" placeholder="kp masjid rt 002/rw 002 desa jangkar, kec. jangkar, kab. situbondo"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="telepon" class="col-md-4 col-lg-3 col-form-label">Telepon</label>
                      <div class="col-md-3 col-lg-5">
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="087363633636">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-3 col-lg-5">
                        <input name="email" type="email" class="form-control" name="email" id="email" placeholder="clara93@gmail.com">
                      </div>
                    </div>

                    <!-- data pendidikan -->

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Pendidikan Terakhir</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="col-md-4">
                          <select id="inputState" name="pendidikan" class="form-select">
                            <option selected>Choose...</option>
                            <option>SMA</option>
                            <option>S1</option>
                            <option>S2</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="sekolah" class="col-md-4 col-lg-3 col-form-label">Sekolah/Perguruan Tinggi</label>
                      <div class="col-md-1 col-lg-3">
                        <input name="sekolah" type="text" class="form-control" id="sekolah" placeholder="Universitas Jember">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jurusan" class="col-md-4 col-lg-3 col-form-label">jurusan</label>
                      <div class="col-md-1 col-lg-3">
                        <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="IPA">
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h5 class="card-title">Upload Berkas</h5>
                    <!-- berkas lamaran -->
                    <div class="row mb-3">
                      <label for="foto" class="col-sm-2 col-form-label">Foto berwarna 2x3 * </label>
                      <div class="col-sm-5">
                        <input name="foto" class="form-control" type="file" id="foto">
                        <p>ukuran file maksimal 200 kb</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="ktp" class="col-sm-2 col-form-label">KTP * </label>
                      <div class="col-sm-5">
                        <input name="ktp" class="form-control" type="file" id="ktp">
                        <p>Type file pdf ukuran file maks. 200 Kb</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="ijazah" class="col-sm-2 col-form-label">Ijazah * </label>
                      <div class="col-sm-5">
                        <input name="ijazah" class="form-control" type="file" id="ijazah">
                        <p>Type file pdf ukuran file maks. 200 Kb</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="transkrip" class="col-sm-2 col-form-label">Transkip Nilai * </label>
                      <div class="col-sm-5">
                        <input name="transkrip" class="form-control" type="file" id="transkrip">
                        <p>Type file pdf ukuran file maks. 200 Kb</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="skck" class="col-sm-2 col-form-label">SKCK * </label>
                      <div class="col-sm-5">
                        <input name="skck" class="form-control" type="file" id="skck">
                        <p>Type file pdf ukuran file maks. 200 Kb</p>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="cv" class="col-sm-2 col-form-label">Lamaran Kerja * </label>
                      <div class="col-sm-5">
                        <input name="cv" class="form-control" type="file" id="cv">
                        <p>Type file pdf ukuran file maks. 200 Kb</p>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="<?= $page; ?>" class="btn btn-primary">Daftar</button>
                    </div>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </section>