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
                                Input Nilai Akademik ( <?= $jurusan; ?> )
                            </h2>
                        </div>
                        <div class="card-body">
                              <div class="col-6">
                                       <div class="form-group">
                                            <label for="kelas">Pilih Siswa</label>
                                            <select class="form-control show-tick" name="siswa" id="siswa">
                                              <?php
                                                    if(sizeof($siswa) < 1){ ?>
                                                       <option value="">-- Tidak Ada Siswa --</option>
                                                    <?php }else{ ?> 
                                                       <option value="">-- PILIH SISWA --</option>
                                                        <?php foreach ($siswa as $key) {?>
                                                            <option value="<?php echo $key['id_siswa'];?>"><?php echo $key['nama'];?></option>
                                                        <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-6">
                                  <?php 
                                          if(sizeof($mata_pelajaran) > 0){
                                             $panjang_id = $mata_pelajaran[sizeof($mata_pelajaran)-1]["id_mp"];
                                          }
                                          $contoh = 1;
                                          foreach ($mata_pelajaran as $value) {
                                  ?>
                                    <div class="form-group">
                                          <label for="nama"><?= $value['nama_mp']; ?></label>
                                            <input type="text" value="50" id="nilai<?= $value["id_mp"]?>" class="form-control" required>
                                    </div>
                                        <?php    
                                          $contoh++; } 

                                  ?>
                                </div>
                                <button id="simpan_nilai" type="submit" class="btn btn-primary m-t-15 waves-effect">Input</button>
                                 <?php 

                                                    }
                                               ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>

    <script type="text/javascript">
      $(document).ready(function(){
         var panjang_id = <?= $panjang_id; ?>;
         var data = [];

         $("#simpan_nilai").click(function(){

            var id_siswa = $("#siswa").val();

            if(id_siswa == ""){
                alert("siswa belum dipilih");
            }else{
                for(let i =0; i<= panjang_id;i++){
                   var nilai = $("#nilai"+i).val();
                   if(nilai != null){
                      data.push({"id_siswa":id_siswa,"id_mp" : i,"nilai" : nilai});          
                   }
                }
               $.post("<?= base_url()?>Guru/Home/simpan_nakademik",{data : JSON.stringify(data)},
                 function(res){
                    console.log(res);
                    window.location="<?= base_url()?>Guru/Home/nilaiakademik";
               })
            }
         });

         
      })
    </script>