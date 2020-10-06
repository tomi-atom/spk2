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
                                Tambah Kriteria
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_tambah_kriteria" method="post" role="form">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Kriteria</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kelas">Jenis</label>
                                            <select class="form-control show-tick" name="jenis" id="id_kelas">
                                                        <option value="">-- PILIH JENIS --</option>
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kelas">Tipe</label>
                                            <select class=" form-control" name="tipe">
                                                <option value="1">1 (Kualitatif, ya / tidak ada kriteria atau hingga skala 5-point)</option>
                                                <option value="2">2 (segi kualitas dan mutu)</option>
                                                <option value="3">3 (Kuantitatif,harga, biaya, daya)</option>
                                                <option value="4">4 (Kualitatif, ya / tidak ada kriteria atau hingga skala 5-point)</option>
                                                <option value="5">5 (Kuantitatif, harga, biaya, daya)</option>
                                                <option value="6">6 (kualitatif dan kuantitatif)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Bobot</label>
                                            <input type="number" name="bobot" class="form-control" step="0.01" required>
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