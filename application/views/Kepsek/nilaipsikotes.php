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
                                Daftar Nilai Psikotes
                            </h2>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nilai Psikotes</th>
                                </tr>
                              </thead>
                              <tbody>
                               <?php
                                    $no=0;
                                    foreach($siswa->result_array() as $data) {
                                    $no++;
                                  ?>
                                  <tr>
                                    <td><?php echo "".$no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <?php 
                                        foreach ($nilai_psikotes->result_array() as $nilai) {
                                            if ($nilai['id']==$data['id']) {
                                  ?>
                                    <td><?php echo $nilai['nilai']; ?></td>
                                  <?php
                                            }
                                          }
                                        
                                  ?>
                                  </tr>
                              <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>                          
<section>
</div>
