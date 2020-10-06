<?php
  foreach($siswa as $key)
?>
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
     <?php 
          $data_kelas = "-- Belum Ada Kelas--";
          foreach ($kelas as $value) {
             if($key['id_kelas'] == $value['id_kelas']){ 
                 $data_kelas = $value['NamaKelas'];
             }
          }
      ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Profil
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <h3 class="profile-username text-center"><?php echo $key['nama']; ?></h3>
                               <p class="text-muted text-center"><?= $data_kelas ?></p>
                               <ul class="list-group list-group-unbordered mb-3">
                                  <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right"><?php echo $key['nama']; ?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>Asal Sekolah</b> <a class="float-right"><?php echo $key['asal_sekolah']; ?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>TTL</b> <a class="float-right"><?php echo $key['ttl']; ?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>Alamat</b> <a class="float-right"><?php echo $key['alamat']; ?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>No HP</b> <a class="float-right"><?php echo $key['no_hp']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>NIS</b> <a class="float-right"><?php echo $key['nis']; ?></a>
                                  </li>
                                   <li class="list-group-item">
                                    <b>Kelas</b> <a class="float-right"><?= $data_kelas ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right"><?php echo $key['jenis_kelamin']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Asal</b> <a class="float-right"><?php echo $key['kecamatan']; ?></a>
                                  </li>
                                </ul>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url();?>Siswa/Home/update_profil"><button  type="button" class="btn btn-primary m-t-15 waves-effect">Update</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>