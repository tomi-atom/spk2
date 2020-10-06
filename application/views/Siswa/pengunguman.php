
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">
                                Pengunguman
                            </h2>
                          </div>
                        <div class="body">
                            <div align="center">
                              <?php 
                                 $status = $siswa[0]["status"];
                                 if($status == "Diterima"){
                                  echo  "<h1><b>Selamat</b>, Anda di terima di kelas unggulan</h1>";
                                 }else if($status == "Ditolak"){
                                  echo  "<h1> <b>Maaf</b>, Anda di tolak di kelas unggulan</h1>";
                                 }else if($status == "Belom"){
                                   echo  "<p>Tidak Ada Pengunguman</p>";
                                 }else{ 
                                    echo  "<p>".$status."</p>";
                                 }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
