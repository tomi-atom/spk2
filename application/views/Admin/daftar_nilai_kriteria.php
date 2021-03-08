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
                                Daftar Nilai Peserta
                            </h2>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <?php foreach($kriteria->result_array() as $krit) {?>
                                    <th><?php echo $krit['nama'];?></th>
                                    <?php } ?>
                                </tr>
                              </thead>
                              <tbody>
                               <?php
                                    $no=0;
                                     if(sizeof($peserta->result_array())>0){
                                           $panjang_id_mahasiswa = $peserta->result_array()[sizeof($peserta->result_array())-1]["id_mahasiswa"];
                                    }
                                    foreach($peserta->result_array() as $data) {
                                    $no++;
                                  ?>
                                  <tr>
                                    <td><?php echo "".$no; ?></td>
                                    <td><a href="#" id="siswa<?= $data['id_mahasiswa']?>" data-toggle="modal" data-target="#modal-default"><?php echo $data['nama']; ?></a></td>
                                    <?php 
                                      foreach ($kriteria->result_array() as $namakriteria) {
                                        foreach ($nilai_peserta->result_array() as $nilai) {
                                          if($namakriteria['id_kriteria']==$nilai['id_kriteria']){
                                            if ($nilai['calon_id']==$data['id_mahasiswa']) {
                                  ?>
                                    <td><?php echo $nilai['value']; ?></td>
                                  <?php
                                            }
                                          }
                                        }
                                      } 
                                  ?>
                                  </tr>
                              <?php } ?>
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

 <div class="modal fade"  id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content"  style="width: 600px">
              <div class="modal-header">
                <h4 class="modal-title" id="view_nama_siswa">Nama Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                 <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-text-width"></i>
                  Deskripsi Mahasiswa
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl>
                  <dt>Email</dt>
                  <dd id="view_email" ></dd>
                  <dt>Mahasiswa Jurusan</dt>
                  <dd id="view_kelas"></dd>
                  <dt>Jenis Kelamin</dt>
                  <dd id="view_jk"></dd>
                  <dt>Kecamatan</dt>
                  <dd id="view_kec"></dd>
                   <?php 
                     $panjang_id_kriteria = $kriteria->result_array()[sizeof($kriteria->result_array())-1]["id_kriteria"];
                    foreach ($kriteria->result_array() as $value) {
                   ?>
                    <dt id=""><?= $value['nama']; ?></dt>
                    <dd id="kriteria<?= $value['id_kriteria']?>">-- belum diinput --</dd>
                <?php } ?>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>

      <script type="text/javascript">
  $(document).ready(function(){
     var panjang          = <?= $panjang_id_mahasiswa; ?>;
     var panjang_kriteria = <?= $kriteria->result_array()[sizeof($kriteria->result_array())-1]["id_kriteria"]?>;
     var data;
     for(let i=0;i<=panjang;i++){
        $("#siswa"+i).click(function(){
            $.post("<?= base_url()?>Admin/Home/read_detail_siswa",{id : i},function(data){
                data = JSON.parse(data);
                console.log(data);
                 clear_view(data);
                $("#view_nama_siswa").text(data.data_mahasiswa[0].nama);
                $("#view_email").text(data.data_mahasiswa[0].email);
                $("#view_jk").text(data.data_mahasiswa[0].jenis_kelamin);
                $("#view_kelas").text(data.data_mahasiswa[0].NamaKelas);
                $("#view_kec").text(data.data_mahasiswa[0].kecamatan);
                for(let j=0;j<data.data_kriteria.length;j++){
                   $("#kriteria"+data.data_kriteria[j].id_kriteria).text(data.data_kriteria[j].value);
                }
            });
        });
     }
     function clear_view(){
       for(let j=0;j<=panjang_kriteria;j++){
                   $("#kriteria"+j).text("-- belum diinput --");
                }
     }

  })
</script>
