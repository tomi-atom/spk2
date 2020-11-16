<?php 
// 

			$jarak_kriteria = [];
			$h_d = [];
			$ranking = [];
			$hasil = [];
			$ip = [];

foreach ($data_kriteria['data'] as $key_kriteria => $value_kriteria) {

				$bobot = $value_kriteria['bobot']/$data_kriteria['ekstra']['total_bobot'];
				$y = 1;
				// Jarak Kriteria
				foreach ($data_calon['data'] as $key_calon_y => $value_calon_y) {

						 $tmp_bobot_y = $value_calon_y['kriteria'][$key_kriteria]['value'];

						 //$value_calon_y['kriteria'][$key_kriteria]['nama_subkriteria'] == 'input' ? $value_calon_y['kriteria'][$key_kriteria]['value'] : $value_calon_y['kriteria'][$key_kriteria]['bobot_subkriteria']; 


					foreach ($data_calon['data'] as $key_calon_x => $value_calon_x) {
						$tmp_bobot_x =  $value_calon_x['kriteria'][$key_kriteria]['value'];
						$jka = $tmp_bobot_y-$tmp_bobot_x;	

						$jarak_kriteria[$key_kriteria]['A cd              '.$y][] = $jka;

						//echo tresholdP($value_kriteria['id_kriteria'])."--".tresholdQ($value_kriteria['id_kriteria'])."||";

						$nilai_pref = NilaiPreferensi($value_kriteria['tipe'], $jka,tresholdQ($value_kriteria['id_kriteria']), tresholdP($value_kriteria['id_kriteria']), $bobot);

						$h_d[$key_kriteria]['A'.$y][] = $nilai_pref;
						$ip[$key_kriteria]['A'.$y][] = $nilai_pref*$bobot;

					}
					$y++;
				}

				
			}


			for ($i=0; $i < count($data_calon['data']); $i++) { 
				
				for ($j=0; $j < count($data_calon['data']); $j++) {

					$tmp_sum = 0;
					foreach ($data_kriteria['data'] as $key => $value) {

						$tmp_sum += $ip[$key]['A'.($i+1)][$j];	


					}
					$ranking['A'.($i+1)][$j] = $tmp_sum*(1/count($data_kriteria['data']));

				}

				$hasil['A'.($i+1)]['leaving']= array_sum($ranking['A'.($i+1)])/(count($data_calon['data'])-1);
			}
			$j = 0;
			foreach ($data_calon['data'] as $key => $value) {
				$tmp_entering = 0;
				for ($i=0; $i < count($data_calon['data']); $i++) { 
					$tmp_entering += $ranking['A'.($i+1)][$j];
				}
				$hasil['A'.($j+1)]['entering'] = $tmp_entering/(count($data_calon['data'])-1);
				$hasil['A'.($j+1)]['net_flow'] = $hasil['A'.($j+1)]['leaving']-$hasil['A'.($j+1)]['entering'];
				$hasil['A'.($j+1)]['status'] = $hasil['A'.($j+1)]['net_flow'] < 0 ? 'Ditolak' : 'Diterima';
                $hasil['A'.($j+1)]['nama'] = $value['nama'];
                $hasil['A'.($j+1)]['jurusan'] = $value['NamaJurusan'];
				$j++;
			}

?>


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
                                Tabel Normalisasi Bobot Kriteria
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="vertical-align: middle;">No</th>
                                            <th rowspan="2" style="vertical-align: middle;">Kriteria</th>
                                            <th rowspan="2" style="vertical-align: middle;">Bobot</th>
                                            <th rowspan="2" style="vertical-align: middle;">Jenis</th>
                                            <th width="100" rowspan="2" style="vertical-align: middle;">Tipe</th>
                                            <th colspan="2" style="text-align: center">Parameter</th>
                                        </tr>
                                        <tr>
                                            <th width="140" class="text-center">q</th>
                                            <th width="140" class="text-center">p</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $x= 1; ?>
                                       <?php foreach ($data_kriteria['data'] as $key => $value): ?>
                                            <tr>
                                                <td><?php echo $x++ ?></td>
                                                <td><?php echo $key ?></td>
                                                <td><?php echo $value['bobot']/$data_kriteria['ekstra']['total_bobot'];?></td>
                                                <td><?php echo  $value['jenis'] ?></td>
                                                <td>
                                                    <?php echo $value['tipe'] ?>
                                                </td>
                                                <td>
                                                    <?php echo tresholdQ($value['id_kriteria']) ?>
                                                </td>
                                                <td>
                                                    <?php echo tresholdP($value['id_kriteria']) ?>
                                                </td>
                                            </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                </table>
                                </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    






            <div class="card card-info">
                <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills ml-auto p-2">
	                    <li class="nav-item">
	                    	<a class="nav-link active" data-toggle="tab" href="#result">Hasil Seleksi</a>
	                    </li>
	                    <li class="nav-item"><a class="nav-link"data-toggle="tab" href="#ranking">Ranking</a></li>
	                    <li class="nav-item"><a class="nav-link"data-toggle="tab" href="#kecocokan">Matriks Kecocokan Alternatif</a></li>
	                    <?php foreach ($data_kriteria['data'] as $key => $value): ?>
	                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#<?php echo $value['id_kriteria'] ?>"><?php echo $value['nama'] ?></a></li>
	                    <?php endforeach ?>
                  </ul>
                 </div>
                 <div class="card-body">
                 	<div class="tab-content">
                    	<div id="result" class="tab-pane active">
	                        <h3>Tabel Hasil Seleksi</h3>
	                        <div class="table-responsive">
                                <table id="example10" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Leaving Flow</th>
                                            <th>Entering Flow</th>
                                            <th>Net Flow</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($hasil as $key => $value){ ?>
                                            <tr>
                                                <td><?php echo $key ?></td>
                                                <td><?php echo $value['nama']; ?></td>
                                                <td><?php echo $value['jurusan']; ?></td>
                                                <td><?php echo $value['leaving'] ?></td>
                                                <td><?php echo $value['entering'] ?></td>
                                                <td><?php echo $value['net_flow'] ?></td>
                                               
                                            </tr>
                                        <?php
                                           
                                    } ?>
                                    </tbody>
                                </table>
	                        </div>
	                    </div>
						<div id="ranking" class="tab-pane fade">
                        	<h3>Tabel Ranking</h3>
                            <div class="table-responsive">
                                    <table id="example4" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="100">Alternatif</th>
                                                <?php foreach ($ranking as $key => $value): ?>
                                                    <th><?php echo $key; ?></th>
                                                <?php endforeach ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ranking as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key ?></td>
                                                    <?php for ($i=0; $i < count($value); $i++):?>
                                                        <td><?php echo $value[$i] ?></td>
                                                    <?php endfor; ?>

                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.panel-body -->
                        </div>
                    	<div id="kecocokan" class="tab-pane fade">
                        	<h3>Tabel Matriks Kecocokan</h3>
                       		<div class="table-responsive">
                            	<table id="example5" class="table table-striped table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th rowspan="2">Alternatif</th>
	                                        <?php $c = 1; ?>
	                                        <?php foreach($data_kriteria['data'] as $key => $value): ?>
	                                            <th>C<?php echo $c++; ?></th>
	                                        <?php endforeach; ?>
	                                    </tr>
	                                    <tr>
	                                        <?php foreach($data_kriteria['data'] as $key => $value): ?>
	                                            <th><?php echo $value['nama']; ?></th>
	                                        <?php endforeach; ?>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php foreach ($data_calon['data'] as $key => $value): ?>
	                                        <tr>
	                                            <td><?php echo $value['nama'] ?></td>
	                                            <?php foreach ($value['kriteria'] as $key_sub => $value_sub):?>
	                                                <td><?php echo $value_sub['value']; ?></td>
	                                            <?php endforeach; ?>
	                                        </tr>
	                                    <?php endforeach ?>
	                                </tbody>
                            	</table>
                        	</div>
                    	</div>
                    <?php
                    $i = 6; 
                    foreach ($data_kriteria['data'] as $key_k => $value_k): ?>
                        <div id="<?php echo $value_k['id_kriteria'] ?>" class="tab-pane fade">
                            <h3>Tabel Jarak Kriteria <?php echo $value_k['nama']; ?></h3>
                            <div class="table-responsive">
                                <!-- /.panel-heading -->
                                    <table id="example<?php echo $i;?>" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="100">Alternatif</th>
                                                <?php foreach ($jarak_kriteria[$value_k['nama']] as $key => $value): ?>
                                                    <th><?php echo $key; ?></th>
                                                <?php endforeach ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jarak_kriteria[$value_k['nama']] as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key ?></td>
                                                    <?php for ($i=0; $i < count($value); $i++):?>
                                                        <td><?php echo $value[$i] ?></td>
                                                    <?php endfor; ?>

                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.panel-body table-responsive -->
                                <br>
                                <br>
                            <h3>Tabel H (d) <?php echo $value_k['nama']; ?></h3>
                            <div class="table-responsive">
                                <table id="example<?php echo $i+1;?>" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="100">Alternatif</th>
                                                <?php foreach ($h_d[$value_k['nama']] as $key => $value): ?>
                                                    <th><?php echo $key; ?></th>
                                                <?php endforeach ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($h_d[$value_k['nama']] as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key ?></td>
                                                    <?php for ($i=0; $i < count($value); $i++):?>
                                                        <td><?php echo $value[$i] ?></td>
                                                    <?php endfor; ?>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.panel-body -->


                            <h3>Tabel Index Preferensi (d) <?php echo $value_k['nama']; ?></h3>
                                <div class="table-responsive">
                                    <table id="example<?php echo $i+2;?>" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="100">Alternatif</th>
                                                <?php foreach ($ip[$value_k['nama']] as $key => $value): ?>
                                                    <th><?php echo $key; ?></th>
                                                <?php endforeach ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ip[$value_k['nama']] as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key ?></td>
                                                    <?php for ($i=0; $i < count($value); $i++):?>
                                                        <td><?php echo $value[$i] ?></td>
                                                    <?php endfor; ?>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                    <?php $i=$i+3; endforeach ?>

                  </div>
                </div>
            </div>
        
        </div>
        <!-- /#page-wrapper -->
    </section>


    <script type="text/javascript">
        function kuota(elem) {
                    document.getElementById("show").style.display = 'block';
            }
        $(document).ready(function(){
            $("#simpan_hasil").click(function(){
               var hasil = <?= json_encode($hasil)?>;
               $.post("<?= base_url() ?>Admin/Home/hasil/simpan",{rangking : hasil},
                function(res){
                   toastr.success(res,"Berhasil");
               })
            });

          
        });
    </script>
