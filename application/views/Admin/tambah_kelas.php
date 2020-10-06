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
                                Tambah Kelas
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_tambah_kelas" method="post" role="form">
                                <label for="nama">Nama Kelas</label>
                                   <div class="row">
                                       <div class="col-3">
                                            <select class="form-control show-tick" name="tingkat" id="nama">
                                                <option value="">-- PILIH TINGKAT --</option>
                                                <option value="X">X</option>            
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control show-tick" name="konsentrasi" id="nama">
                                                <option value="">-- PILIH KEJURUAN --</option>
                                                <option value="IPA">IPA</option>
                                                <option value="IPS">IPS</option>
                                                <option value="BAHAS">Bahasa</option>            
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                                        </div>
                                   </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">TAMBAH</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>
</div>