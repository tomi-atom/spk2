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
                                Hasil Perangkingan SPK
                            </h2>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>Rangking</th>
                                    <th>Nama</th>
                                   <!--  <th>Leaving Flow</th>
                                    <th>Entering Flow</th>
                                    <th>Net Flow</th> -->
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                   $i = 1;
                                  if(count($rangking)>0){
                                       $panjang_id = max($rangking)["Id_Siswa"];
                                  }
                                   foreach ($rangking as $value) {
                                    ?>
                                  <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $value["Nama"]; ?></td>
                                    <!-- <td><?= $value["Leaving_flow"]; ?></td>
                                    <td><?= $value["Entering_flow"]; ?></td>
                                    <td><?= $value["Net_Flow"]; ?></td> -->
                                    <td><a id="siswa<?= $value['Id_Siswa']?>"  ><button>Lihat Detail Siswa</button></a></td>
                                  </tr>
                                <?php $i++; } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>

    <script type="text/javascript">
      $(document).ready(function(){
        var panjang_id = <?= $panjang_id?>;
         for(let i=0;i<=panjang_id;i++){
            $("#siswa"+i).click(function(){
               window.location="<?= base_url()?>Kepsek/Home/detail_siswa/"+i;
            })
         }
      })
    </script>
