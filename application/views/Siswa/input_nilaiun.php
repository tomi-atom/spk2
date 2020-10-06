<div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 number-dark">Sistem Pengambil Keputusan</h1>
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

    <?php foreach ($siswa->result_array() as $key)?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">
                                Input Nilai UN
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url();?>Siswa/Home/proses_input_nilaiun" method="post">
                                <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai Matematika</label>
                                      <input type="number" name="mtk" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai Bahasa Indonesia</label>
                                      <input type="number" name="b_ind" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai Bahasa Inggris</label>
                                      <input type="number" name="b_ing" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai IPA</label>
                                      <input type="number" name="ipa" class="form-control" required>
                                  </div>
                                </div>
                                <!-- <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai IPS</label>
                                      <input type="number" name="ips" class="form-control" required>
                                  </div>
                                </div> -->
                               <!--  <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai Agama</label>
                                      <input type="number" name="agama" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                      <label for="nama">Nilai PKN</label>
                                      <input type="number" name="pkn" class="form-control" required>
                                  </div>
                                </div> -->
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>