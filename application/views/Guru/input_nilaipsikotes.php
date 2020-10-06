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
                                Input Nilai Psikotes
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Guru/Home/proses_input_npsikotes" method="post">
                              <div class="col-6">
                                       <div class="form-group">
                                            <label for="kelas">Pilih Siswa</label>
                                            <select class="form-control show-tick" name="siswa" id="siswa">
                                                        <option value="">-- PILIH SISWA --</option>
                                                        <?php foreach ($siswa->result_array() as $key) {?>
                                                            <option value="<?php echo $key['id'];?>|<?php echo $key['nama'];?>"><?php echo $key['nama'];?></option>
                                                        <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Nilai Psikotes</label>
                                            <input type="text" name="nilai" class="form-control" required>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Input</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>