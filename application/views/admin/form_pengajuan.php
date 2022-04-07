 
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
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nippos Atasan :</label>


                                      <div class="col-sm-12 col-md-3">
                                          <input type="text" class="form-control" id="nippos_atasan">
                                      </div>
                                      <button type="button" class="btn btn-primary" id="caripgw">Cari</button>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nippos / Nama Atasan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="nipposnama" value="-">
                                          <input type="hidden" name="nama_atasan" id="nama_atasan">
                                          <input type="hidden" name="nippos_atasan" id="nippos_atasan">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan Atasan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="jabatan" value="-">
                                          <input type="hidden" name="kd_jabatan_atasan" id="kd_jabatan_atasan">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bagian Atasan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="bagian" value="-">
                                          <input type="hidden" name="kd_bagian_atasan" id="kd_bagian_atasan">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pengajuan :</label>
                                      <div class="col-sm-12 col-md-4">
                                          <select class="form-control selectric" id="jns_perangkat">
                                              <option>Laptop</option>
                                              <option>Desktop</option>
                                              <option>Printer</option>
                                              <option>Scanner</option>
                                              <option>Hardisk</option>
                                              <option>Hardisk SSD</option>
                                              <option>Hardisk Eksternal</option>
                                              <option>Perangkat Jaringan</option>
                                              <option value="00">Lain-lain</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div id="inp_jnsperangkat2" style="display:none">
                                  <div class="form-group row mb-4" >
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perangkat Lain :</label>
                                      <div class="col-sm-12 col-md-4">
                                          <input type="text" class="form-control" id="jns_perangkat2">
                                      </div>
                                  </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                      <div class="col-sm-12 col-md-4">
                                          <textarea class="form-control" id="deskripsi"></textarea>
                                      </div>
                                  </div>
                                 
                                  <div class="card-footer text-right col-sm-12 col-md-7">
                                      <button class="btn btn-primary" id="simpan">Submit</button>
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
                    var nippos_atasan = $('#nippos_atasan').val();
                    // alert(nippos_atasan);
                    // $('#profil_pegawai').show();
                    $.ajax({
                        url: '<?php echo base_url('admin/pengajuan/cari_pgw'); ?>',
                        method: 'post',
                        data : "nippos_atasan="+nippos_atasan,
                        success:function(data){
                            var dt = jQuery.parseJSON(data);
                            var nippos = dt[0].Nippos;
                            var nama = dt[0].Nama;
                            var nopend = dt[0].nopendtujuan;
                            var namaktr = dt[0].namaktr;
                            var kodebagian = dt[0].kodebagian;
                            var namabagian = dt[0].namabagian;
                            var kdjabatan = dt[0].jabatan;
                            var jabatan = dt[0].DescJabatan
                            $('#nippos').val(nippos);
                            $('#nipposnama').val(nippos+" - "+nama);
                            $('#nama_atasan').val(nama);
                            $('#kd_jabatan_atasan').val(kdjabatan);
                            $('#jabatan').val(jabatan);
                            $('#kd_bagian_atasan').val(kodebagian.trim());
                            $('#bagian').val(namabagian);
                            // alert(JSON.stringify(data));
		 				    // var mast_tgl_lahir = dt.pribadi[0].PEOPLE_BDATE.split("-");
                            // var ata = JSON.parse(data);
                            // alert(dt[0].Nippos);
                          
                        }   
                    })
                //   alert("tes");
              })

              $('#jns_pengajuan').change(function(){
                var jns_pengajuan = $('#jns_pengajuan').val();
                if(jns_pengajuan == "00"){
                    $('#inp_jnsperangkat2').show();
                }else{
                    $('#inp_jnsperangkat2').hide();
                }
              })

              $('#simpan').click(function(){
                var nippos_pengguna = "999783945";
                var nama_pengguna = "Hasbul Hadi";
                var jabatan_pengguna = "832929";
                var nm_jabatan_pengguna = "senior analis";
                var bagian_pengguna = "348934" ;
                var nm_bagian_pengguna = "pengembangan jaskug" ;
                var nippos_atasan = $('#nippos_atasan').val();
                var nama_atasan = $('#nama_atasan').val();
                var jabatan_atasan = $('#kd_jabatan_atasan').val();
                var nm_jabatan_atasan = $('#jabatan').val();
                var bagian_atasan = $('#kd_bagian_atasan').val();
                var nm_bagian_atasan = $('#bagian').val();
                var jenis_perangkat = $('#jns_perangkat').val();
                var deskripsi = $('#deskripsi').val();
                // alert(jabatan_atasan);
                    $.ajax({
                        url: '<?php echo base_url('admin/pengajuan/insert_pengajuan'); ?>',
                        method: 'post',
                        data : "nippos_pengguna="+nippos_pengguna+"&nama_pengguna="+nama_pengguna+"&jabatan_pengguna="+jabatan_pengguna+"&nm_jabatan_pengguna="+nm_jabatan_pengguna+"&bagian_pengguna="+bagian_pengguna+"&nm_bagian_pengguna="+nm_bagian_pengguna+"&nippos_atasan="+nippos_atasan+"&nama_atasan="+nama_atasan+"&jabatan_atasan="+jabatan_atasan+"&nm_jabatan_atasan="+nm_jabatan_atasan+"&bagian_atasan="+bagian_atasan+"&nm_bagian_atasan="+nm_bagian_atasan+"&jenis_perangkat="+jenis_perangkat+"&deskripsi="+deskripsi,
                        success:function(data){
                           alert(data);
                        }   
                    })
              })
            })
      </script>