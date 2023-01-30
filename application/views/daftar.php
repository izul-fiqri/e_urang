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

          <main>
            <div class="container">

              <section class="section register min-vh-200 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-50 col-md-50 d-flex flex-column align-items-center justify-content-center">

                      <div class="d-flex justify-content-center py-4">
                        <a href="" class="logo d-flex align-items-center w-auto">
                          <img src="<?= base_url() ?>assets/adminnice/assets/img/logo.png" alt="">
                          <span class="d-none d-lg-block">e-URANG</span>
                        </a>
                      </div><!-- End Logo -->

                      <div class="card mb-10">

                        <div class="card-body">

                          <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Pendaftaran Karyawan</h5>
                            <p class="text-center small">masukkan data yang diminta untuk mendaftar</p>
                          </div>


                          <div class="alert alert-info  alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Info</h4>
                            <p> Isi data dengan benar dan teliti kembali sebelum mengeklik tombol daftar dikarenakan kesalahan data yang diinput akan
                              mempengaruhi nilai administrasi anda.
                              <hr>
                            <p class="mb-0">Siapkan data dan berkas untuk mendaftar dan teliti kembali sebelum klik tombol daftar.</p>
                          </div>

                          <section class="section profile">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Data Diri</h5>
                                <hr>

                                <!-- posisi yang dilamar -->
                                <?php echo form_open_multipart('daftar/proses') ?>
                                <div class="row mb-3">
                                  <label for="pilih_lowongan" class="col-md-3 col-lg-3 col-form-label">Posisi yang dilamar</label>
                                  <div class="col-md-8 col-lg-6">
                                    <div class="col-md-8">
                                      <select class="form-select" id="pilih_lowongan" name="pilih_lowongan" aria-label="Default select example">
                                        <option disabled="disabled" selected="selected">Open this select menu</option>
                                        <?php foreach ($lowongan->result() as $key => $data) { ?>
                                          <option value="<?= $data->lowongan_id ?>"> <?= $data->nama_lowongan; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>


                                <div class="col-md-7">
                                  <label for="nama" class="form-label">Nama Lengkap</label><small> <i>(sesuai KTP)</i></small>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Moh. Izul Fiqri">
                                </div>
                                <br>
                                <div class="row mb-5">
                                  <label for="nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="nik" type="text" class="form-control" id="nik" placeholder="3512120209920001">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <legend for="jenis_kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</legend>
                                  <div class="col-md-6 col-lg-4">
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
                                </div>

                                <div class="row mb-3">
                                  <label for="tempat_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="situbondo">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Tanggal lahir</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                  <div class="col-md-6 col-lg-4">
                                    <textarea class="form-control" style="height: 100px;" name="alamat" id="alamat" placeholder="kp masjid rt 002/rw 002 desa jangkar, kec. jangkar, kab. situbondo"></textarea>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="telepon" class="col-md-4 col-lg-3 col-form-label">Telepon</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="087363633636">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="email" type="email" class="form-control" name="email" id="email" placeholder="clara93@gmail.com">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="password" type="password" class="form-control" name="password" id="password" placeholder="">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="passconf" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="passconf" type="password" class="form-control" name="passconf" id="passconf" placeholder="">
                                  </div>
                                </div>
                                <!-- data pendidikan -->

                                <div class="row mb-3">
                                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Pendidikan Terakhir</label>
                                  <div class="col-md-6 col-lg-4">
                                    <div class="col-md-12">
                                      <select id="inputState" name="pendidikan" class="form-select">
                                        <option disabled="disabled" selected="selected">Choose...</option>
                                        <option>SMA</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="sekolah" class="col-md-4 col-lg-3 col-form-label">Sekolah/Perguruan Tinggi</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="sekolah" type="text" class="form-control" id="sekolah" placeholder="Universitas Jember">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="jurusan" class="col-md-4 col-lg-3 col-form-label">jurusan</label>
                                  <div class="col-md-6 col-lg-4">
                                    <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="IPA">
                                  </div>
                                </div>
                                <br>
                                <hr>
                                <h5 class="card-title">Upload Berkas</h5>
                                <!-- berkas lamaran -->
                                <div class="row mb-3">
                                  <label for="foto_profil" class="col-sm-2 col-form-label">Foto berwarna 2x3 * </label>
                                  <div class="col-sm-5">
                                    <input name="foto_profil" class="form-control" type="file" id="foto_profil">
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
                                  <label for="file_transkrip" class="col-sm-2 col-form-label">Transkip Nilai * </label>
                                  <div class="col-sm-5">
                                    <input name="file_transkrip" class="form-control" type="text" id="file_transkrip">
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
                                <!-- <div class="text-left">
                                  <button type="submit" >Daftar</button>
                                </div> -->
                                <!-- <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                  </div>
                                </div> -->
                                <div class="row mb-3">
                                  <div class="col-sm-7">
                                    <button class="btn btn-primary w-100" name="<?= $page; ?>" class="btn btn-primary">Daftar</button>
                                  </div>
                                </div>
                                <?php echo form_close() ?>
                              </div>
                            </div>
                        </div>
              </section>
          </main><!-- End #main -->

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