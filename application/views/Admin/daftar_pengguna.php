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
                                Daftar Pengguna
                            </h2>
                            <div class="pull-right">
                                <a href="<?php echo site_url('Admin/Home/tambah_pengguna'); ?>" class="btn btn-info">Add</a> 
                            </div>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                    $c = 1;
                                 foreach($user->result_array() as $p){ ?>
                                    
                                <tr>
                                    <td><?php echo $c; ?></td>
                                    <td><?php echo $p['nama']; ?></td>
                                    <td><?php echo $p['email']; ?></td>
                                    <td><?php echo $p['username']; ?></td>
                                    <td><?php echo $p['leveling']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/Home/edit_pengguna/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a>
                                        <a href="<?php echo site_url('Admin/Home/reset/'.$p['id']); ?>" class="btn btn-warning btn-xs">Reset Password</a> 
                                        <a href="<?php echo site_url('Admin/Home/hapus_pengguna/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
                                    </td>
                                </tr>
                                <?php $c++; } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>                          
<section>
