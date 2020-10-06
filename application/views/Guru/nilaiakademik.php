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
                                Daftar Nilai Akdemik
                            </h2>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Rata-rata Nilai Akademik</th>
                                </tr>
                              </thead>
                              <tbody>
                               <?php
                                    if(sizeof($siswa) > 0){
                                      $no=0;
                                       foreach($siswa as $data) {
                                       $no++;
                                    
                                  ?>
                                  <tr>
                                    <td><?php echo "".$no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['value']; ?></td>
                                  </tr>
                              <?php }} ?>
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
