<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <link rel="icon" href="<?= base_url() ?>assets/cads/images/logommp.png">
  <title>e-Urang | Home</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/cads/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/cads/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?= base_url() ?>assets/cads/css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="<?= base_url() ?>assets/cads/images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/cads/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?= base_url() ?>assets/cads/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="<?= site_url('home'); ?>">
                    <p>e-Urang</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                  <li class="login_btn" class="nav-item">
                    <a class="nav-link" href="<?= site_url('auth/login'); ?>">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('auth/register'); ?>">Sing Up</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header inner -->
  <!-- end header -->
  <!-- banner -->
  <section class="banner_main">
    <div class="container-fluid">
      <div class="row d_flex">
        <div class="col-xl-6 col-lg-6 col-md-6 ">
          <div class="text-bg">
            <h1>Selamat Datang </h1>
            <span>di Website Pendaftaran <br>
              Karyawan Baru<br> PT Mega Marine Pride </span>
            <strong>Ayo Gabung Rek!</strong>
            <a href="<?= site_url('auth/register'); ?>">Gabung</a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 padding_lert2">

          <div class="text-img">
            <figure><img src="<?= base_url() ?>assets/cads/images/pc.png" alt="#" /></figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end banner -->
  <!-- about -->
  <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="titlepage">
            <span>Tentang Perusahaan</span>
            <h2>PT MEGA MARINE PRIDE</h2>
            <p>PT. Mega Marine Pride didirikan pada tahun 1984 berdasarkan visi dan moto pendiri untuk menyediakan produk makanan laut
              berkualitas terbaik dengan menerapkan fokus yang ketat pada kualitas di setiap tahap. Pengalaman berharga selama
              bertahun-tahun dan prinsip keyakinan yang teguh didirikan pada budaya perusahaan kami untuk berjuang untuk keunggulan
              berdasarkan kejujuran, integritas, tanggung jawab, dan menjadi proaktif dan bersemangat dalam operasi bisnis kami.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="ccol-md-10 offset-md-1">
          <div class="about_box">
            <!-- <figure><img src="<?= base_url() ?>assets/cads/images/udang.jpeg" alt="#" /></figure> -->
          </div>
        </div>


      </div>

    </div>
  </div>

  <!-- end about -->
  <!-- classified -->
  <div class="classified">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>LOWONGAN PEKERJAAN</h2>
            <span>Bagian yang dibutuhkan</span>
          </div>
          <div class="row">
            <?php foreach ($row->result() as $key => $data) : ?>
              <div class="col-xl-4 col-lg-4 col-md-4 margin_bott">
                <div class="classified_box">
                  <h3><span><?= $data->nama_lowongan; ?></span></h3>
                  <br>
                  <p><?= $data->description; ?></p>
                  <p>Buka Pendaftaran: <?= $data->tgl_buka; ?> <br>
                    Tutup Pendaftaran: <?= $data->tgl_tutup; ?></p>

                </div>
                <br>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>

      <!-- end classified -->


      <!-- testimonial -->
      <div class="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="titlepage">
                <h2>CONTACT US</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container">
                      <div class="carousel-caption ">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                            <div class="test_box1">
                              <img src="<?= base_url() ?>assets/cads/images/logommp.png" alt="#" />
                            </div>
                          </div>
                          <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="test_box">
                              <p>ALAMAT : Desa Wonokoyo, Kecamatan Beji, Pasuruan 67154, Indonesia</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                      <div class="carousel-caption">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                            <div class="test_box1">
                              <img src="<?= base_url() ?>assets/cads/images/logommp.png" alt="#" />
                            </div>
                          </div>
                          <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="test_box">
                              <p>Phone: +62 (343) 656 513 // 656 466</p>
                              <p>Email: hrd@megamarinepride.com</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                      <div class="carousel-caption">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-12 margin_boot">
                            <div class="test_box1">
                              <img src="<?= base_url() ?>assets/cads/images/logommp.png" alt="#" />
                            </div>
                          </div>
                          <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="test_box">
                              <p>Fax: +62 (343) 656 195</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end testimonial -->

      <!--  footer -->
      <footer>
        <div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="cont">
                  <h3>e-URANG <br>
                  </h3>
                  <p>Sistem Pendaftaran Online PT Mega Marine Pride</p>
                  <a class="read_more" href="#">Kembali ke Beranda</a>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <p>©2022 All Rights Reserved. Design by <a href="">Moh. Izul Fiqri</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?= base_url() ?>assets/cads/js/jquery.min.js"></script>
      <script src="<?= base_url() ?>assets/cads/js/popper.min.js"></script>
      <script src="<?= base_url() ?>assets/cads/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url() ?>assets/cads/js/jquery-3.0.0.min.js"></script>
      <script src="<?= base_url() ?>assets/cads/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?= base_url() ?>assets/cads/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?= base_url() ?>assets/cads/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>