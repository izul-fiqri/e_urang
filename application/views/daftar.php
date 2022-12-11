         <div class="pagetitle">
           <h1>Daftar</h1>
           <nav>
             <ol class="breadcrumb">
               <!-- <li class="breadcrumb-item"><a href="index.html">Pelamar</a></li> -->
               <li class="breadcrumb-item">Pendaftaran</li>
               <!-- <li class="breadcrumb-item active">Pendaftaran</li> -->
             </ol>
           </nav>
         </div><!-- End Page Title -->

         <section class="section profile">
           <div class="card">
             <div class="card-body">
               <br>
               <h5 class="card-title">Data Diri</h5>
               <hr>
               <!-- Bordered Tabs -->

               <!-- posisi yang dilamar -->
               <form method="POST" action="<?= site_url('daftar/proses'); ?>">

                 <div class="row mb-3">
                   <label for="pilih_lowongan" class="col-md-4 col-lg-3 col-form-label">Posisi yang dilamar</label>
                   <div class="col-md-8 col-lg-9">
                     <div class="col-md-4">
                       <select class="form-select" id="pilih_lowongan" name="pilih_lowongan" aria-label="Default select example">
                         <option selected>Open this select menu</option>
                         <?php foreach ($lowongan->result() as $key => $data) { ?>
                           <option value="<?= $data->lowongan_id ?>" > <?= $data->nama_lowongan; ?></option>
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
                 <h5 class="card-title">Upload Berkas</h5>
                 <hr>
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
               </form>
             </div>
           </div>
           </div>
           </div>
         </section>