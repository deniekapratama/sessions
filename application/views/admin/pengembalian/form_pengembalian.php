      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1><?php echo $title ?></h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#"><?php echo $title ?></a></div>
                  </div>
              </div>
              <div class="section-body">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4><?php echo $title ?></h4>
                              </div>
                              <div class="card-body">
                                <!-- <div id="profil_pegawai" style="display:none"> -->
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pengguna :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Cecep Gaul">
                                      </div>
                                  </div>

                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Divisi :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Jasa Keuangan">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bagian :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Remitance">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nippos Atasan :</label>


                                      <div class="col-sm-12 col-md-3">
                                          <input type="text" class="form-control">
                                      </div>
                                      <button type="button" class="btn btn-primary" id="caripgw">Cari</button>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nippos / Nama Atasan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Remitance">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan Atasan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Remitance">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bagian Atasan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Remitance">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pengajuan :</label>
                                      <div class="col-sm-12 col-md-4">
                                          <select class="form-control selectric">
                                              <option>Laptop</option>
                                              <option>Desktop</option>
                                              <option>Printer</option>
                                              <option>Scanner</option>
                                              <option>Hardisk</option>
                                              <option>Hardisk SSD</option>
                                              <option>Hardisk Eksternal</option>
                                              <option>Perangkat Jaringan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                      <div class="col-sm-12 col-md-4">
                                          <textarea class="form-control"></textarea>
                                      </div>
                                  </div>
                                 
                                  <div class="card-footer text-right col-sm-12 col-md-7">
                                      <button class="btn btn-primary">Submit</button>
                                  </div>
                                <!-- </div> -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
      </section>
      </div>
      <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
      <script>
          $(document).ready(function(){
              $('#caripgw').click(function(){
                    $('#profil_pegawai').show();
                    $.ajax({
                        url: '<?php echo base_url('Auth/login'); ?>',
                        method: 'post',
                        data : "username="+username+"&password="+password,
                        success:function(data){
                            // alert(data);
                            if(username == data){
                                alert("Login Berhasil");
                                window.location.href = "<?php echo base_url('Auth/dashboard'); ?>";
                            }else{
                                alert("Login Gagal");
                            }
                            // alert(data);
                            // $('#myModal').modal("show");
                            // $('#tampil_modal').html(data);
                            // document.getElementById("judul").innerHTML='Edit Data';  
                        }   
                    })
                //   alert("tes");
              })
          })
      </script>