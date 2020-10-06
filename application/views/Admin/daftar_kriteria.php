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
                                Daftar Kriteria
                            </h2>
                            <div class="pull-right">
                                <a href="<?php echo site_url('Admin/Home/tambah_kriteria'); ?>" class="btn btn-info">Add</a> 
                            </div>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Jenis</th>
                                    <th>Tipe</th>
                                    <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                    $c = 1;
                                 foreach($kriteria->result_array() as $p){ ?>
                                    
                                <tr>
                                    <td><?php echo $c; ?></td>
                                    <td><?php echo $p['nama']; ?></td>
                                    <td><?php echo $p['bobot']; ?></td>
                                    <td><?php echo $p['jenis']; ?></td>
                                    <td><?php 
                                        if($p['tipe']==1){
                                          echo '(Kualitatif, ya / tidak ada kriteria atau hingga skala 5-point)';
                                        }else if($p['tipe']==2){
                                          echo '(segi kualitas dan mutu)';
                                        }else if($p['tipe']==3){
                                          echo '(Kuantitatif,harga, biaya, daya)';
                                        }else if($p['tipe']==4){
                                          echo '(Kualitatif, ya / tidak ada kriteria atau hingga skala 5-point)';
                                        }else if($p['tipe']==5){
                                          echo '(Kuantitatif, harga, biaya, daya)';
                                        }else if($p['tipe']==6){
                                          echo '(kualitatif dan kuantitatif)';
                                        }
                                    ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/Home/edit_kriteria/'.$p['id_kriteria']); ?>" class="btn btn-info btn-xs">Edit</a> 
                                        <a href="<?php echo site_url('Admin/Home/hapus_kriteria/'.$p['id_kriteria']); ?>" class="btn btn-danger btn-xs">Delete</a>
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
</div>
