<?php foreach($user->result_array() AS $k)?>
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
                            <form action="<?php echo base_url();?>Admin/Home/proses_update_pengguna/<?php echo $k['id']?>" method="post" role="form">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $k['nama']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kelas">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $k['email']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $k['username']?>" required>
                                        </div>
                                    </div>
                                    <!--<div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Password</label>
                                            <input type="Password" name="password" class="form-control" required>
                                        </div>
                                    </div>-->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kelas">Hak Akses</label>
                                            <select class="form-control show-tick" name="id_leveling" id="id_kelas">
                                                <option value="">-- Pilih Akses --</option>
                                                <?php foreach ($level->result_array() as $key) {
                                                ?>
                                                <option value="<?php echo $key['id_leveling']; ?>"><?php echo $key['leveling'];?></option>
                                                <?php
                                                } ?>
                                            </select>
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