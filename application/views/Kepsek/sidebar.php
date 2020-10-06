<!-- Main Sidebar Container -->
<?php
   $dash      = "";
   $hasil     = "";
   $batas     = "";
   switch ($content) {
     case 'Kepsek/home':
        $dash = "active";
       break;
       case 'Kepsek/rangking':
        $hasil = "active";
       break;
       case 'Kepsek/batas':
        $batas = "active";
        break;
     default:
        $hasil = "active";
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
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>Kepsek/Home" class="nav-link <?= $dash; ?>">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>Kepsek/Home/batas" class="nav-link <?= $batas; ?>">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Batas Nilai
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>Kepsek/Home/rangking" class="nav-link <?= $hasil; ?>">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Hasil Perangkingan
              </p>
            </a>
          </li>
        
        <!--   <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $nakademik; ?>">
              <i class="nav-icon fa fa-drivers-license"></i>
              <p>
                Nilai Akademik
                <i class="right fa fa-angle-left"></i><!--<span class="right badge badge-danger">New</span>-->
            <!--   </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                        <a href="<?php echo base_url('Guru/Home/input_nilaiakademik');?>" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <span>Input Nilai Akademik</span>
                        </a>
              
                        <a href="<?php echo base_url('Guru/Home/nilaiakademik');?>" class="nav-link">
                            <i class="fa fa-user nav-icon"></i>
                            <span>Daftar Nilai Akademik</span>
                        </a>
              </li>
            </ul>
          </li> --> 
          

           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          </div>

           <li class="nav-item">
            <a href="<?php echo base_url();?>Kepsek/Home/logout" class="nav-link">
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