<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-Urang | MMP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/adminnice/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/adminnice/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/adminnice/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/adminnice/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= site_url('dashboard'); ?>" class="logo d-flex a  lign-items-center">
        <img src="<?= base_url() ?>assets/adminnice/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">e-URANG</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url() ?>assets/adminnice/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $this->func->user_login()->name ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $this->func->user_login()->name ?></h6>
              <?php
              $a;
              $data = $this->func->user_login()->level;
              if ($data == 1) {
                $a = "Admin";
              } elseif ($data == 2) {
                $a = "Head";
              } else {
                $a = "Pelamar";
              } ?>
              <span><?= $a ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= site_url('auth/logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('dashboard') ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- <?php if ($this->func->user_login_pelamar()) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('daftar/add') ?>">
            <i class="bi bi-dash-circle"></i>
            <span>Cetak Form Pendaftaran</span>
          </a>
        </li>
      <?php endif ?> -->

      <?php if ($this->func->user_login()->level != 3) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('lowongan') ?>">
            <i class="bi bi-question-circle"></i>
            <span>Lowongan</span>
          </a>
        </li><!-- End lowongan -->
      <?php endif; ?>

      <?php if ($this->func->user_login()->level != 3) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('pelamar'); ?>">
            <i class="bi bi-envelope"></i>
            <span>Pelamar</span>
          </a>
        </li><!-- End Contact Page Nav -->
      <?php endif; ?>

      <?php if ($this->func->user_login()->level != 3) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-register.html">
            <i class="bi bi-card-list"></i>
            <span>SPK</span>
          </a>
        </li><!-- End Register Page Nav -->
      <?php endif; ?>

      <?php if ($this->func->user_login()->level != 3) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-login.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Hasil Hitung</span>
          </a>
        </li><!-- End Login Page Nav -->
      <?php endif; ?>

      <?php if ($this->func->user_login()->level != 3) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-blank.html">
            <i class="bi bi-file-earmark"></i>
            <span>Kriteria</span>
          </a>
        </li><!-- End Blank Page Nav -->
      <?php endif; ?>


      <li class="nav-heading">Settings</li>

      <?php if ($this->func->user_login()->level != 3) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('user') ?>">
            <i class="bi bi-person"></i>
            <span>Users</span>
          </a>
        </li><!-- End user -->
      <?php endif; ?>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <?php echo $contents ?>
  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>assets/adminnice/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/adminnice/assets/js/main.js"></script>

</body>

</html>