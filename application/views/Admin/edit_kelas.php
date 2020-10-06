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
    <?php foreach ($kelas->result_array() as $key)?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">
                                Edit Kelas : <?php echo $key['NamaKelas'];?>
                            </h2>
                        </div>
                        <div class="card-body">
                            <?php 
                              $split_s = explode(" ", $key['NamaKelas']);
                              $tingkat = $split_s[0];
                              $jurusan = $split_s[1];
                              $kelas = $split_s[2];
                            ?>
                            <form action="<?php echo base_url();?>Admin/Home/proses_update_kelas/<?php echo $key['id_kelas'];?>" method="post" role="form">
                                <label for="nama">Nama Kelas</label>
                                   <div class="row">
                                       <div class="col-3">
                                            <select class="form-control show-tick" name="tingkat" id="nama">
                                                <option value="">-- PILIH TINGKAT --</option>
                                                <option value="X" <?php if($tingkat=="X"){echo "selected";}?>>X</option>            
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control show-tick" name="konsentrasi" id="nama">
                                                <option value="">-- PILIH KEJURUAN --</option>
                                                <option value="IPA" <?php if($jurusan=="IPA"){echo "selected";}?>>IPA</option>
                                                <option value="IPS" <?php if($jurusan=="IPS"){echo "selected";}?>>IPS</option>
                                                <option value="BAHAS">Bahasa</option>            
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" placeholder="Kelas" value="<?= $kelas; ?>" name="kelas">
                                        </div>
                                   </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
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