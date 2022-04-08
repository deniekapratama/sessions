
<script src="<?php echo base_url('assets/assets/modules/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lampiran NDE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Surat NDE :</label>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Surat NDE :</label>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="exampleFormControlFile1 text-md-right col-12 col-md-3 col-lg-3">Lampiran File PDF Surat (NDE) :</label>
                        <div class="col-sm-12 col-md-6">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <!-- <p>Modal body text goes here.</p> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>

            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title"><?php echo $title ?></h2>
            <p class="section-lead">Data Pengajuan, Perbaikan & Upgrade</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Advanced Table</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Nippos / Nama Pengguna</th>
                                        <th>Kantor </th>
                                        <th>Bagian </th>
                                        <th>Jabatan</th>
                                        <th>Jenis Perangkat </th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>

                                    </tr>
                                   <?php
                                        foreach($dt_pengajuan as $b)
                                        {
                                    ?>
                                            <tr>
                                                <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" name="ids" class="custom-control-input" id="<?php echo $b->nippos_pengguna;?>" value="<?php echo $b->nippos_pengguna;?>">
                                                        <label for="<?php echo $b->nippos_pengguna;?>" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><?php echo $b->nippos_pengguna." - ".$b->nama_pengguna;?></td>
                                                <td><?php echo $b->nopend_pengguna." - ".$b->namaktr_pengguna;?></td>
                                                <td><?php echo $b->nm_bagian_pengguna;?></td>
                                                <td><?php echo $b->nm_jabatan_pengguna;?></td>
                                                <td><?php echo $b->jenis_perangkat;?></td>
                                                <td><?php echo $b->deskripsi;?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>
                                   
                                </table>
                                <div class="card-footer text-right col-sm-12 col-md-12">
                                    <button class="btn btn-primary" id="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>


<!-- General JS Scripts -->
<!-- <script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script> -->

<!-- JS Libraies -->
<!-- <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script> -->

<!-- Page Specific JS File -->
<!-- <script src="assets/js/page/components-table.js"></script> -->

<!-- Template JS File -->
<!-- <script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script> -->
</body>

</html>

<script>
$(document).ready(function() {
$('#submit').click(function() {
// alert("tes");
$('#myModal').modal('show');
var selectedLanguage = new Array();
			$('input[name="ids"]:checked').each(function() {
			  selectedLanguage.push(this.value);
			});
// var ts = $('input[name="ids"]:checked').val();
alert(selectedLanguage);
// $('#profil_pegawai').show();
// $.ajax({
// url: '<?php //echo base_url('Auth/login'); 
            ?>',
// method: 'post',
// data : "username="+username+"&password="+password,
// success:function(data){
// // alert(data);
// if(username == data){
// alert("Login Berhasil");
// window.location.href = "<?php echo base_url('Auth/dashboard'); ?>";
// }else{
// alert("Login Gagal");
// }
// // alert(data);
// // $('#myModal').modal("show");
// // $('#tampil_modal').html(data);
// // document.getElementById("judul").innerHTML='Edit Data';
// }
// })
// alert("tes");
})
})
</script>
