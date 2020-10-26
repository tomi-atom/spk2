<!-- Main Sidebar Container -->
<?php
  $dashboard_label = "";
  $pengguna_label = "";
  $guru_label = "";
  $npsikotest_label = "";
  $siswa_label = "";
  $kriteria_label = "";
  $kelas_label = "";
  $nilai_label = "";
  $perhitungan_label = "";
  if($content == "Admin/home"){
     $dashboard_label = "active";
  }else if($content == "Admin/daftar_pengguna" || $content == "Admin/tambah_pengguna"){
      $pengguna_label = "active";
  }else if($content == "Admin/daftar_guru" || $content == "Admin/tambah_guru" || $content == "Admin/daftar_kelas" || $content == "Admin/tambah_kelas"){
       $guru_label = "active";
  }else if($content == "Admin/input_nilaipsikotes" || $content == "Admin/nilaipsikotes"){
       $npsikotest_label = "active";
  }else if($content == "Admin/daftar_siswa" || $content == "Admin/tambah_siswa"){
       $siswa_label = "active";
  }else if($content == "Admin/daftar_kriteria" || $content == "Admin/tambah_kriteria"){
      $kriteria_label = "active";
  }else if($content == "Admin/daftar_nilai_kriteria"){
      $nilai_label = "active";
  }else if($content == "Admin/perhitungan_seleksi" || $content == "Admin/hasil_seleksi"){
     $perhitungan_label = "active";
  }
  foreach($pengguna->result_array() as $key)
?>

  <aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    
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
          <li class="nav-item menu">
            <a href="<?=base_url() ?>Admin/Home/" class="nav-link <?= $dashboard_label; ?>">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>Admin/Home/daftar_pengguna" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Pengguna
                <i class="right fa fa-angle-left"></i><!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
       
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $siswa_label; ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Mahasiswa
                <i class="right fa fa-angle-left"></i><!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home/daftar_siswa" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>Daftar Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home/tambah_siswa" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Input Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $kriteria_label; ?>">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Kriteria
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home/daftar_kriteria" class="nav-link">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>Daftar Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home/tambah_kriteria" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Input Kriteria</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $kelas_label; ?>">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Kelas
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home/daftar_kelas" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home/tambah_kelas" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Kelas</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>Admin/Home/daftar_nilai" class="nav-link <?= $nilai_label; ?>">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Daftar Nilai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Admin/Home/perhitungan_seleksi" class="nav-link <?= $perhitungan_label; ?>">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Perhitungan Seleksi
              </p>
            </a>
          </li>

           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          </div>

           <li class="nav-item">
            <a href="<?php echo base_url();?>Admin/Home/logout" class="nav-link">
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
