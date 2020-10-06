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
                                Tambah Siswa
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_tambah_siswa" method="post">
                                <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Siswa</label>
                                            <select class="form-control show-tick" name="id" id="id">
                                                        <option value="">-- PILIH SISWA --</option>
                                                        <?php foreach ($siswa->result_array() as $siswa) {?>
                                                            <option value="<?php echo $siswa['id'];?>|<?php echo $siswa['nama'];?>"><?php echo $siswa['nama'];?></option>
                                                        <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                 <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Jenis Kelamin</label>
                                                <div class="form-check">
                                                  <input class="form-check-input" name="jenis_kelamin" type="radio" value="Laki - laki">
                                                  <label class="form-check-label">Laki - laki</label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input" name="jenis_kelamin" type="radio" value="Perempuan">
                                                  <label class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Asal</label>
                                            <input type="text" name="kecamatan" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="form-group">
                                            <label for="kelas">Pilih Kelas</label>
                                            <select class="form-control show-tick" name="id_kelas" id="id_kelas">
                                                        <option value="">-- PILIH KELAS --</option>
                                                        <?php foreach ($kelas->result_array() as $kelas) {?>
                                                            <option value="<?php echo $kelas['id_kelas'];?>"><?php echo $kelas['NamaKelas'];?></option>
                                                        <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                        
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">TAMBAH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>