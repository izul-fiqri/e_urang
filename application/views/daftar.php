         <div class="pagetitle">
           <h1>Profile</h1>
           <nav>
             <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Pelamar</a></li>
               <li class="breadcrumb-item">Daftar</li>
               <li class="breadcrumb-item active">Pendaftaran</li>
             </ol>
           </nav>
         </div><!-- End Page Title -->

         <section class="section profile">
           <div class="card">
             <div class="card-body">
               <!-- Bordered Tabs -->
               <ul class="nav nav-tabs nav-tabs-bordered">

                 <li class="nav-item">
                   <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                     Data Pribadi</button>
                 </li>

                 <li class="nav-item">
                   <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Data Pendidikan</button>
                 </li>

                 <li class="nav-item">
                   <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Posisi Lamaran</button>
                 </li>

                 <li class="nav-item">
                   <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Lampiran</button>
                 </li>

               </ul>
               <div class="tab-content pt-2">

                 <div class="tab-pane fade show active profile-overview" id="profile-overview">
                   <form class="row g-3">
                     <div class="col-md-8">
                       <label for="nama" class="form-label">Nama Lengkap</label><small> <i>(sesuai KTP)</i></small>
                       <input type="text" class="form-control" id="nama" name="nama" placeholder="Moh. Izul Fiqri">
                     </div>
                     <div></div>

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
                           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                           <label class="form-check-label" for="gridRadios1">
                             Laki-Laki
                           </label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                           <label class="form-check-label" for="gridRadios2">
                             Perempuan
                           </label>
                         </div>
                     </fieldset>

                     <div class="row mb-3">
                       <label for="tempat_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                       <div class="col-md-3 col-lg-5">
                         <input name="tempat_lahir" type="text" class="form-control" id="tempat lahir" placeholder="situbondo">
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="Country" class="col-md-4 col-lg-3 col-form-label">Tanggal lahir</label>
                       <div class="col-md-3 col-lg-5">
                         <input name="country" type="date" class="form-control" id="Country" value="USA">
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
                         <input name="phone" type="text" class="form-control" id="telepon" name="telepon" placeholder="087363633636">
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                       <div class="col-md-3 col-lg-5">
                         <input name="email" type="email" class="form-control" name="email" id="email" placeholder="k.anderson@example.com">
                       </div>
                     </div>


                     <div class="text-center">
                       <button type="submit" class="btn btn-primary">Save Changes</button>
                     </div>
                   </form><!-- End data pribadi -->

                   </form>

                 </div>

                 <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                   <!-- data pendidikan -->
                   <form>
                     <div class="row mb-3">
                       <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Pendidikan Terakhir</label>
                       <div class="col-md-8 col-lg-9">
                         <div class="col-md-4">
                           <select id="inputState" class="form-select">
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

                     <div class="text-center">
                       <button type="submit" class="btn btn-primary">Save Changes</button>
                     </div>
                   </form><!-- End data pendidikan -->

                 </div>

                 <div class="tab-pane fade pt-3" id="profile-settings">

                   <!-- posisi yang dilamar -->
                   <form>

                     <div class="row mb-3">
                       <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Posisi yang dilamar</label>
                       <div class="col-md-8 col-lg-9">
                         <div class="col-md-4">
                           <select id="inputState" class="form-select">
                             <option selected>Choose...</option>
                             <option>Operator Produksi</option>
                             <option>Admin Produksi</option>
                             <option>OPerator Produksi</option>
                           </select>
                         </div>
                       </div>
                     </div>
                     <br><br><br><br>
                     <div class="text-center">
                       <button type="submit" class="btn btn-primary">Save Changes</button>
                     </div>
                   </form><!-- End posisi yang dilamar -->

                 </div>

                 <div class="tab-pane fade pt-3" id="profile-change-password">
                   <!-- berkas lamaran -->
                   <form>

                     <div class="row mb-3">
                       <label for="inputNumber" class="col-sm-2 col-form-label">Foto berwarna 2x3 * </label>
                       <div class="col-sm-5">
                         <input class="form-control" type="file" id="formFile">
                         <p>ukuran file maksimal 200 kb</p>
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="inputNumber" class="col-sm-2 col-form-label">KTP * </label>
                       <div class="col-sm-5">
                         <input class="form-control" type="file" id="formFile">
                         <p>Type file pdf ukuran file maks. 200 Kb</p>
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="inputNumber" class="col-sm-2 col-form-label">Ijazah * </label>
                       <div class="col-sm-5">
                         <input class="form-control" type="file" id="formFile">
                         <p>Type file pdf ukuran file maks. 200 Kb</p>
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="inputNumber" class="col-sm-2 col-form-label">Transkip Nilai * </label>
                       <div class="col-sm-5">
                         <input class="form-control" type="file" id="formFile">
                         <p>Type file pdf ukuran file maks. 200 Kb</p>
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="inputNumber" class="col-sm-2 col-form-label">SKCK * </label>
                       <div class="col-sm-5">
                         <input class="form-control" type="file" id="formFile">
                         <p>Type file pdf ukuran file maks. 200 Kb</p>
                       </div>
                     </div>

                     <div class="row mb-3">
                       <label for="inputNumber" class="col-sm-2 col-form-label">Lamaran Kerja * </label>
                       <div class="col-sm-5">
                         <input class="form-control" type="file" id="formFile">
                         <p>Type file pdf ukuran file maks. 200 Kb</p>
                       </div>
                     </div>

                   </form><!-- End berkas lamaran -->

                 </div>

               </div><!-- End Bordered Tabs -->

             </div>
           </div>

           </div>
         </section>