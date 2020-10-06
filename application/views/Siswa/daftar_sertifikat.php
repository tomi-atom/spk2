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
                                Daftar Sertifikat
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <ul class="products-list product-list-in-card">
                                <?php foreach($sertifikat->result_array() as $sert) {
                                ?>
                                  <li class="item">
                                    <div class="product-img">
                                      <a target="blank" href="<?php echo base_url();?>file/dokumen/<?php echo $sert['FileSertifikat'];?>" class="product-title">
                                      <img src="<?php echo base_url();?>file/dokumen/<?php echo $sert['FileSertifikat'];?>" alt="Product Image" width="100px">
                                    </a>
                                    </div>
                                    <div class="product-info">
                                      <?php echo $sert['NamaSertifikat'];?>
                                    </div>
                                  </li>
                                 <?php } ?>
                                </ul>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title">
                                Tambah Lagi Sertifikat
                            </h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Siswa/Home/proses_input_sertifikat" method="post" enctype="multipart/form-data">
                                <div class="col-12">
                                  <div id="dynamic_field">
                                  <div class="row">
                                        <div class="col-6">
                                            <label for="nama">Nama Sertifikat</label>
                                            <input type="text" name="NamaSertifikat[]" class="form-control" required>
                                        </div>
                                        <div class="col-5">
                                            <label for="nama">Pilih File</label>
                                            <input type="file" name="FileSertifikat[]" class="form-control" required>
                                        </div>
                                        <div class="col-1">
                                            <label for="nama">Tambah</label>
                                            <button type="button" name="add" id="add" class="btn-success m-t-15 waves-effect form-control"><i class="icon fa fa-plus-square"></i></button>
                                        </div>

                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>