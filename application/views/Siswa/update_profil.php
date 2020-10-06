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

    <?php foreach ($siswa as $key)
      $check_lk = "";
      $check_pr = "";
      if($key["jenis_kelamin"] == "Laki - Laki"){
          $check_lk = "checked";
      }else if($key["jenis_kelamin"] == "Perempuan"){
          $check_pr = "checked";
      }

    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">
                                Update Profil
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Siswa/Home/proses_update_siswa" method="post">
                                <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Siswa</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $key['nama'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Asal Sekolah</label>
                                            <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $key['asal_sekolah'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">TTL</label>
                                            <input type="text" name="ttl" class="form-control" value="<?php echo $key['ttl'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" value="<?php echo $key['alamat'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">NO HP</label>
                                            <input type="text" name="no_hp" class="form-control" value="<?php echo $key['no_hp'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">NIS</label>
                                            <input type="text" name="nis" class="form-control" value="<?php echo $key['nis'];?>" required>
                                        </div>
                                    </div>
                                 <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Jenis Kelamin</label>
                                                <div class="form-check">
                                                  <input class="form-check-input" name="jenis_kelamin" type="radio" value="Laki - Laki" <?= $check_lk; ?> >
                                                  <label class="form-check-label" >Laki - laki</label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input" name="jenis_kelamin" type="radio" value="Perempuan" <?= $check_pr; ?>>
                                                  <label class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Asal</label>
                                            <input type="text" name="kecamatan" class="form-control" value="<?php echo $key['kecamatan'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="form-group">
                                            <label for="kelas">Pilih Kelas</label>
                                            <select class="form-control show-tick" name="id_kelas" id="id_kelas">
                                                <option value="">-- PILIH KELAS --</option>
                                                <?php foreach ($kelas->result_array() as $kelas) {
                                                     $sel = "";
                                                     if($key["id_kelas"] == $kelas["id_kelas"]){ $sel = "selected";}else{ $sel = "";  }
                                                  ?>
                                                <option value="<?php echo $kelas['id_kelas'];?>" <?= $sel; ?>><?php echo $kelas['NamaKelas'];?></option>
                                                        <?php } ?>
                                            </select>
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