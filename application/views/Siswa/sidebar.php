<!-- Main Sidebar Container -->
<?php
  $label_dash = "";
  $label_profile = "";
  $label_nun = "";
  $label_sertifikat = "";
  $label_pengunguman = "";
  // var_dump($content);
  // exit();
  switch ($content) {
    case 'Siswa/home':
      $label_dash = "active";
    break;
    case 'Siswa/profil':
      $label_profile = "active";
    break;
     case 'Siswa/update_profil':
      $label_profile = "active";
    break;
    case 'Siswa/nilaiun':
     $label_nun = "active";
    break;
    case 'Siswa/pengunguman':
     $label_pengunguman = "active";
    break;
     case 'Siswa/input_nilaiun':
     $label_nun = "active";
    break;
    case 'Siswa/daftar_sertifikat':
      $label_sertifikat = "active";
    break;
    case 'Siswa/input_sertifikat':
      $label_sertifikat = "active";
    break;
  }

  foreach($pengguna->result_array() as $key)
?>

  <aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>Siswa/Home" class="brand-link">
      <img src="<?php echo base_url();?>asset/gambar/logo.png" alt="Methodist Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Seleksi Kelas Prestasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo $key['nama']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>Siswa/Home" class="nav-link <?= $label_dash; ?>">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url();?>Siswa/Home/pengunguman" class="nav-link <?= $label_pengunguman; ?>">
              <i class="nav-icon fa fa-inbox"></i>
              <p>
                Pengunguman
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $label_profile; ?>">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profil
                <i class="right fa fa-angle-left"></i><!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php
                     if($biodata->num_rows() < 1){?>
                        <a href="<?php echo base_url('Siswa/Home/input_profil');?>" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <span>Input Biodata</span>
                        </a>
                    <?php }else{?>
                        <a href="<?php echo base_url('Siswa/Home/profil');?>" class="nav-link">
                            <i class="fa fa-user nav-icon"></i>
                            <span>Profil</span>
                        </a>
                    <?php }?>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $label_nun ?>">
              <i class="nav-icon fa fa-bar-chart"></i>
              <p>
                Nilai Ujian Nasional
                <i class="right fa fa-angle-left"></i><!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php
                     if($nilaiun->num_rows() < 1){?>
                        <a href="<?php echo base_url('Siswa/Home/input_nilaiun');?>" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <span>Input Nilai Ujian Nasional</span>
                        </a>
                    <?php }else{?>
                        <a href="<?php echo base_url('Siswa/Home/nilaiun');?>" class="nav-link">
                            <i class="fa fa-user nav-icon"></i>
                            <span>Nilai Ujian Nasional</span>
                        </a>
                    <?php }?>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $label_sertifikat ?>">
              <i class="nav-icon fa fa-drivers-license"></i>
              <p>
                Sertifikat Prestasi
                <i class="right fa fa-angle-left"></i><!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php
                     if($sertifikat->num_rows() < 1){?>
                        <a href="<?php echo base_url('Siswa/Home/input_sertifikat');?>" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <span>Input Sertifikat</span>
                        </a>
                    <?php }else{?>
                        <a href="<?php echo base_url('Siswa/Home/daftar_sertifikat');?>" class="nav-link">
                            <i class="fa fa-user nav-icon"></i>
                            <span>Daftar Sertifikat</span>
                        </a>
                    <?php }?>
              </li>
            </ul>
          </li>
          

           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          </div>

           <li class="nav-item">
            <a href="<?php echo base_url();?>Siswa/Home/logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Log-Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>