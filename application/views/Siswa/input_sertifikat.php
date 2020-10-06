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
                                Input Sertifikat
                            </h2>
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
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>
