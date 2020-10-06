<div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sistem Pengambil Keputusan</h1>
          </div><!-- /.col -->
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!--  BIODATA SISWA-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Biodata Siswa
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <h3 class="profile-username text-center"><?= $biodata[0]['nama']?></h3>
                               <p class="text-muted text-center"><?= $biodata[0]['NamaKelas']?></p>
                               <ul class="list-group list-group-unbordered mb-3">
                                  <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right"><?= $biodata[0]['nama']?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>Asal Sekolah</b> <a class="float-right"><?= $biodata[0]['asal_sekolah']?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>TTL</b> <a class="float-right"><?= $biodata[0]['ttl']?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>Alamat</b> <a class="float-right"><?= $biodata[0]['alamat']?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>No HP</b> <a class="float-right"><?= $biodata[0]['no_hp']?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>NIS</b> <a class="float-right"><?= $biodata[0]['nis']?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>Kelas</b> <a class="float-right"><?= $biodata[0]['NamaKelas']?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right"><?= $biodata[0]['jenis_kelamin']?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Kecamatan</b> <a class="float-right"><?= $biodata[0]['kecamatan']?></a>
                                  </li>
                                </ul>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- RERATA NILAI SISWA -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Nilai Kriteria Siswa
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <ul class="list-group">
                                <?php 
                                   foreach ($reratanilai as $value) {
                                ?>
                                  <li class="list-group-item">
                                    <b><?= $value["nama"]?></b> <a class="float-right"><?= $value["value"]?></a>
                                  </li>
                                <?php } ?>
                                </ul>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
           <!-- NILAI UN -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Nilai Ujian Nasional
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <ul class="list-group">
                                <?php 
                                // var_dump($nilaiun[0]);
                                // exit();
                                ?>
                                  <li class="list-group-item">
                                    <b>Bahasa Indonesia</b> <a class="float-right"><?= $nilaiun[0]['b_ind']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Bahasa Inggris</b> <a class="float-right"><?= $nilaiun[0]['b_ing']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Matematika</b> <a class="float-right"><?= $nilaiun[0]['mtk']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>IPA</b> <a class="float-right"><?= $nilaiun[0]['ipa']; ?></a>
                                  </li>
                                </ul>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- NILAI AKADEMIK -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Nilai Akademik
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <ul class="list-group">
                                <?php 
                                  foreach ($nilaiakademik as $value) {
                                ?>
                                  <li class="list-group-item">
                                    <b><?= $value['nama_mp']; ?></b> <a class="float-right"><?= $value['nilai']; ?></a>
                                  </li>
                                <?php } ?>
                                </ul>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- NILAI AKADEMIK -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Sertifikat Prestasi
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <ul class="list-group">
                                <?php 
                                  foreach ($sertifikat as $value) {
                                ?>
                                  <li class="list-group-item">
                                    <b><?= $value['NamaSertifikat']; ?></b> <a class="float-right" target="blank" href="<?php echo base_url();?>file/dokumen/<?php echo $value['FileSertifikat'];?>"><img src="<?php echo base_url();?>file/dokumen/<?php echo $value['FileSertifikat'];?>" alt="Product Image" width="100px"></a>
                                  </li>
                                <?php } ?>
                                </ul>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>

