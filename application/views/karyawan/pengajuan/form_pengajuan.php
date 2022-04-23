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
                             <!-- <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nippos Atasan :</label>


                                 <div class="col-sm-12 col-md-4">
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
                                 <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kantor :</label>
                                 <div class="col-sm-12 col-md-6">
                                     <input type="text" readonly class="form-control-plaintext" id="namaktr_atasan" value="-">
                                     <input type="hidden" name="nopend_atasan" id="nopend_atasan">
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
                             </div> -->
                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pengajuan :</label>
                                 <div class="col-sm-12 col-md-5">
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
                                 <div class="form-group row mb-4">
                                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perangkat Lain :</label>
                                     <div class="col-sm-12 col-md-5">
                                         <input type="text" class="form-control" id="jns_perangkat2">
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                 <div class="col-sm-12 col-md-5">
                                     <textarea class="form-control" id="deskripsi"></textarea>
                                 </div>
                             </div>

                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Surat NDE :</label>
                                 <div class="col-sm-12 col-md-5">
                                     <input type="text" class="form-control" id="no_surat_nde">
                                 </div>
                             </div>
                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Surat NDE :</label>
                                 <div class="col-sm-12 col-md-5">
                                     <input type="text" class="form-control datepicker" id="tgl_surat_nde">
                                 </div>
                             </div>
                             <div class="form-group row mb-4">
                                 <label class="exampleFormControlFile1 text-md-right col-12 col-md-3 col-lg-3">Lampiran File PDF Surat (NDE) :</label>
                                 <div class="col-sm-12 col-md-5">
                                     <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                 </div>
                             </div>

                             <input type="hidden" name="nippos" id="nippos" value="<?php echo $this->session->userdata('nippos');?>">
                             <input type="hidden" name="nama" id="nama" value="<?php echo $this->session->userdata('nama');?>">
                             <input type="hidden" name="nopend" id="nopend" value="<?php echo $this->session->userdata('nopend');?>">
                             <input type="hidden" name="namaktr" id="namaktr" value="<?php echo $this->session->userdata('namaktr');?>">
                             <input type="hidden" name="kodejabatan" id="kodejabatan" value="<?php echo $this->session->userdata('kodejabatan');?>">
                             <input type="hidden" name="namajabatan" id="namajabatan" value="<?php echo $this->session->userdata('namajabatan');?>">
                             <input type="hidden" name="kodebagian" id="kodebagian" value="<?php echo $this->session->userdata('kodebagian');?>">
                             <input type="hidden" name="namabagian" id="namabagian" value="<?php echo $this->session->userdata('namabagian');?>">



                             <div class="card-footer text-right col-sm-12 col-md-8">
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
     $(document).ready(function() {
         $('#caripgw').click(function() {
             var nippos_atasan = $('#nippos_atasan').val();
             // alert(nippos_atasan);
             // $('#profil_pegawai').show();
             $.ajax({
                 url: '<?php echo base_url('admin/pengajuan/cari_pgw'); ?>',
                 method: 'post',
                 data: "nippos_atasan=" + nippos_atasan,
                 success: function(data) {
                     var dt = jQuery.parseJSON(data);
                     var nippos = dt[0].Nippos;
                     var nama = dt[0].Nama;
                     var nopend_atasan = dt[0].nopendtujuan;
                     var namaktr = dt[0].namaktr;
                     var kodebagian = dt[0].kodebagian;
                     var namabagian = dt[0].namabagian;
                     var kdjabatan = dt[0].jabatan;
                     var jabatan = dt[0].DescJabatan;
                     $('#nippos').val(nippos);
                     $('#nipposnama').val(nippos + " - " + nama);
                     $('#nama_atasan').val(nama);
                     $('#nopend_atasan').val(nopend_atasan);
                     $('#namaktr_atasan').val(namaktr);
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

         $('#jns_pengajuan').change(function() {
             var jns_pengajuan = $('#jns_pengajuan').val();
             if (jns_pengajuan == "00") {
                 $('#inp_jnsperangkat2').show();
             } else {
                 $('#inp_jnsperangkat2').hide();
             }
         })

         $('#simpan').click(function() {
            var nippos_pengguna = $('#nippos').val();
            var nama_pengguna = $('#nama').val();
            var nopend_pengguna = $('#nopend').val();
            var namaktr_pengguna = $('#namaktr').val();
            var jabatan_pengguna = $('#kodejabatan').val();
            var nm_jabatan_pengguna = $('#namajabatan').val();
            var bagian_pengguna = $('#kodebagian').val();
            var nm_bagian_pengguna = $('#namabagian').val();
            var no_surat_nde = $('#no_surat_nde').val();
            var tgl_surat_nde = $('#tgl_surat_nde').val();
            //  var nippos_pengguna = "993783785";
            //  var nama_pengguna = "Deni";
            //  var nopend_pengguna = "40005";
            //  var namaktr_pengguna = "KANTOR PUSAT BANDUNG";
            //  var jabatan_pengguna = "832929";
            //  var nm_jabatan_pengguna = "senior analis";
            //  var bagian_pengguna = "348934";
            //  var nm_bagian_pengguna = "pengembangan jaskug";
            //  var nippos_atasan = $('#nippos_atasan').val();
            //  var nama_atasan = $('#nama_atasan').val();
            //  var nopend_atasan = $('#nopend_atasan').val();
            //  var namaktr_atasan = $('#namaktr_atasan').val();
            //  var jabatan_atasan = $('#kd_jabatan_atasan').val();
            //  var nm_jabatan_atasan = $('#jabatan').val();
            //  var bagian_atasan = $('#kd_bagian_atasan').val();
            //  var nm_bagian_atasan = $('#bagian').val();
             var jenis_perangkat = $('#jns_perangkat').val();
             var deskripsi = $('#deskripsi').val();
             // alert(jabatan_atasan);
             $.ajax({
                 url: '<?php echo base_url('admin/Pengajuan/insert_pengajuan'); ?>',
                 method: 'POST',
                 data: "nippos_pengguna=" + nippos_pengguna + "&nama_pengguna=" + nama_pengguna + "&nopend_pengguna=" + nopend_pengguna + "&namaktr_pengguna=" + namaktr_pengguna + "&jabatan_pengguna=" + jabatan_pengguna + "&nm_jabatan_pengguna=" + nm_jabatan_pengguna + "&bagian_pengguna=" + bagian_pengguna + "&nm_bagian_pengguna=" + nm_bagian_pengguna + "&jenis_perangkat=" + jenis_perangkat + "&deskripsi=" + deskripsi + "&no_surat_nde=" + no_surat_nde + "&tgl_surat_nde=" + tgl_surat_nde,
                 success: function(response) {
                     alert(response);
                 }
             })
         })
     })
 </script>