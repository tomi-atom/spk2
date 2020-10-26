<?php
  

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK Promethee | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/adminlte.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/toastr.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/toastr.min.css">
 

</head>
<body lcass="hold-transition login-page">
<div class="login-box">2
  <div class="login-logo">
    <a href="<?php echo base_url();?>index2.html"><b>Sistem Pendukung Keputusan</b>Metode Promethee</a>
  </div>
    <?php 
         
         if($this->session->flashdata('msg') == "re-login"){
      ?>
         <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i>Silahkan Login</h5>
        </div>
    <?php } ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Masuk Menggunakan Akun Anda</p>
      <form action="<?php echo base_url();?>Home/proses" method="post">
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-8">
              <p class="mb-0">
        <a href="#" data-toggle="modal" data-target="#modal-default">Register a new membership</a>
      </p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Registrasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                 <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="register_nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="register_uname" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="register_email" placeholder="Masukkan Email">
                </div>
                 <div class="form-group">
                  <label>User</label>
                  <select class="form-control" id="register_role">
                    <!-- <option value="1">Admin</option> -->
                    <option value="">--Pilih--</option>
                    <option value="2">Siswa</option>
                  </select>
                </div>
                <div id="siswa_form">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Jenis Kelamin</label><br>
                   &nbsp;
                  <label class="form-check-label">Laki-Laki</label>
                   <input class="form-check-input" type="radio"  name="jk" value="Laki - Laki" checked="">
                   &nbsp;
                    <label class="form-check-label">Perempuan</label>
                   <input class="form-check-input" type="radio"  name="jk" value="Perempuan">
                </div>
                 <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" id="register_kelas">
                    <?php 
                       if(sizeof($data_kelas->result_array()) > 0){
                        foreach ($data_kelas->result_array() as $value) {
                    ?>
                    <option value="<?= $value['id_kelas'] ?>"><?= $value["NamaKelas"] ?></option>
                    <?php  }} ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="register_kec" placeholder="Kecamatan">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Asal Sekolah</label>
                  <input type="text" class="form-control" id="register_asalsekolah" placeholder="Asal Sekolah">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" id="register_ttl" placeholder="Tempat, tanggal-bulan-tahun">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="register_alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NO HP</label>
                  <input type="text" class="form-control" id="register_nohp" placeholder="Nomor HP">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIS</label>
                  <input type="text" class="form-control" id="register_nis" placeholder="NIS">
                </div>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="register_password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Ulangi Password</label>
                  <input type="password" class="form-control" id="register_re_password" placeholder="Ulangi Password">
                </div>
               
              </div>
              <!-- /.box-body -->
            </form>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="do_register" class="btn btn-primary">Buat Akun</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


      <!--<div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <!--<p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</body>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>asset/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>asset/dist/js/toastr.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })

  $(document).ready(function(){
      toastr.options = {
          "closeButton": true,
          "showDuration": "0",
          "hideDuration": "0",
          "timeOut": "0",
          "extendedTimeOut": "0",
        };
      
      $("#siswa_form").hide();
      $("#register_role").change(function(){
            var value = $("#register_role").val();
            if(value == 2){
              $("#siswa_form").show(500);
            }else{
             $("#siswa_form").hide(500);
            }
      });

      $("#do_register").click(function(){
          if(!validate()){
              toastr.error("Data tidak lengkap","Ooops!!");
          }else{
             $("#notif_invalid").hide();
              if(!validate_repass()){
                 toastr.warning("Password tidak sama","Duuh!!");
              }
              else{
                  var data = [];
                  $("#notif_invalid_pass").hide();
                  data[0] = $("#register_nama").val();
                  data[1] = $("#register_uname").val();
                  data[2] = $("#register_email").val();
                  data[3] = $("#register_password").val();
                  data[4] = $("#register_role").val();
                  data[5] = $('input[name=jk]:checked').val();
                  data[6] = $("#register_kec").val();
                  data[7] = $("#register_kelas").val();
                  data[8] = $("#register_asalsekolah").val();
                  data[9] = $("#register_ttl").val();
                  data[10] = $("#register_alamat").val();
                  data[11] = $("#register_nohp").val();
                  data[12] = $("#register_nis").val();
                  $.ajax({
                      type : "POST",
                      url  : "<?= base_url()?>Home/register",
                      data : {register : JSON.stringify(data)},
                      success : function(msg){
                         location.reload();
                      },
                      error: function(msg) { 
                          toastr.error("Data yang dimasukkan telah ada","Gagal");
                      }   
                  });
              }
          }
          
          
      })

      function validate(){
          valid = true;
          if($("#register_nama").val() == ""){
            valid = false;
            $("#register_nama").css("border-color","red");

          }
          if($("#register_uname").val() == ""){
            valid = false;
            $("#register_uname").css("border-color","red");

          }
          if($("#register_email").val() == ""){
            valid = false;
           $("#register_email").css("border-color","red");

          }
          if($("#register_password").val() == ""){
            valid = false;
            $("#register_password").css("border-color","red");
          }
          if($("#register_role").val() == ""){
            valid = false;
            $("#register_role").css("border-color","red");
          }
          return valid;
      }

      function validate_repass(){
        valid = true;
          if($("#register_password").val() != $("#register_re_password").val()){
             valid = false;
          }
          return valid;
      }
  })
</script>

</html>
