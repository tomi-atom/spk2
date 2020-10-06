<?php
  foreach($siswa->result_array() as $key)
  foreach ($nilaiun->result_array() as $nilai)
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

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Nilai UJIAN NASIONAL
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <h3 class="profile-username text-center"><?php echo $key['nama']; ?></h3>
                               <p class="text-muted text-center"><?php echo $key['NamaKelas']; ?></p>
                               <ul class="list-group list-group-unbordered mb-3">
                                  <li class="list-group-item">
                                    <b>MTK</b> <a class="float-right"><?php echo $nilai['mtk']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Bahasa Indonesia</b> <a class="float-right"><?php echo $nilai['b_ind']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Bahasa Inggris</b> <a class="float-right"><?php echo $nilai['b_ing']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>IPA</b> <a class="float-right"><?php echo $nilai['ipa']; ?></a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Rata-Rata</b> <a class="float-right"><?php echo $nilai['rata']; ?></a>
                                  </li>
                                </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>