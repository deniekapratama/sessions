<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Pengajuan Perangkat Baru2</a></div>
            </div>
        </div>

        <div class="section-body">
            <!-- <h2 class="section-title">DataTables</h2>
            <p class="section-lead">
                We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
            </p> -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4>Advanced Table</h4>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <!-- <th class="text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th> -->
                                            <th>Nippos/Nama</th>
                                            <th>Kantor</th>
                                            <th>Bagian</th>
                                            <th>Jabatan</th>
                                            <th>Jenis Perangkat</th>
                                            <th>deskripsi</th>
                                            <th>Status Approve Manager</th>
                                            <th>#</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($dt_pengajuan as $b) {
                                        $status = $b->status;
                                        if($status == "0"){
                                            $desstatus = "";
                                        }else if($status == "1"){
                                            $desstatus = "Menunggu";
                                        }else if($status == "2"){
                                            $desstatus = "Disetujui";
                                        }
                                    ?>
                                        
                                        <tr>
                                            <!-- <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" name="ids" class="custom-control-input" id="<?php echo $b->nippos; ?>" value="<?php echo $b->nippos; ?>">
                                                    <label for="<?php echo $b->nippos; ?>" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td> -->

                                            <td><?php echo $b->nippos . " - " . $b->nama; ?></td>
                                            <td><?php echo $b->nopend . " - " . $b->namaktr; ?></td>
                                            <td><?php echo $b->namabagian; ?></td>
                                            <td><?php echo $b->namajabatan; ?></td>
                                            <td><?php echo $b->jenisperangkat; ?></td>
                                            <td><?php echo $b->deskripsi; ?></td>
                                            <td><?php echo $desstatus;?></td>
                                            <td>
                                                <button class="btn btn-primary" onclick='detail(<?php echo $b->id_pengajuan; ?>)' >Detail</button>

                                                <!-- <span class="badge badge-pill badge-primary">Primary</span> -->
                                            </td>

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

</body>

</html>

<!-- <div class="modal" tabindex="-1" role="dialog" id="myModal">
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
                 <p>Modal body text goes here.</p> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>

            </div>
        </div>
    </div>
</div> -->


<div class="modal fade bd-example-modal-lg" id="modals" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Perangkat Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form enctype="multipart/form-data" id="myform">

                
                    <input type="hidden" name="id_pengajuan" id="id_pengajuan">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nippos/Nama</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="nipposnama" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kantor</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="kantor" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="bagian" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jabatan" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jns_perangkat" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="deskripsi">
                        </div>
                    </div>

                    <input type="hidden" id="titip_id_pengajuan">
                    <!-- 
                      <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Perangkat</label>
                          <select class="form-control select2 col-sm-6" id="exampleFormControlSelect1">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                          </select>
                      </div> -->
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Perangkat</label>
                        <div class="col-sm-6">
                            <div id="tampil_perangkat">
                            <select class="col-sm-12 form-control" id="perangkat">
                                <option value="00">-- Pilih Perangkat --</option>
                                <?php
                                foreach ($dt_perangkat as $c) {
                                    $id_perangkat = $c->id_perangkat;
                                    $serial_number = $c->serial_number;
                                    $jenis_perangkat = $c->jenis_perangkat;
                                    $merk = $c->merk;
                                    $spesifikasi = $c->spesifikasi;

                                    echo " <option value='$id_perangkat"."_".$serial_number."'>$serial_number - $jenis_perangkat - $merk - $spesifikasi </option>";
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div id="tampil_upload" style="display:none">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Lampiran Serah Terima</label>
                        <div class="col-sm-6">
                           <input type="file" id="fileupload" name="fileupload">
                        </div>
                    </div>
                    </div>
                    
                    <!-- <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Perangkat</label>

                        <select class="form-control select2" id="exampleFormControlSelect2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>

                    </div> -->


                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <div id="btns">
                <button type="button" class="btn btn-primary" id="pilih_perangkat">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // $('#detail2').click(function() {
        //     // alert("tes");
        //     alert("tes");
        //     $('.modal2').modal('show');
        // var ts = $('input[name="ids"]:checked').val();            // $('#profil_pegawai').show();
        // $.ajax({
        // url: '<?php //echo base_url('Auth/login'); 
                    ?>',
        // method: 'post',
        // data : "username="+username+"&password="+password,
        // success:function(data){
        // // alert(data);
        // if(username == data){
        // alert("Login Berhasil");
        // window.location.href = "<?php //echo base_url('Auth/dashboard'); 
                                    ?>";
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
        // })


        $('#pilih_perangkat').click(function() {
            // alert("tes");
            
            var id_pengajuan = $('#id_pengajuan').val();
            var mast_perangkat = $('#perangkat').val();
            var myarr = mast_perangkat.split("_");
            var id_perangkat = myarr[0];
            var serial_number = myarr[1];

            $.ajax({
                url: '<?php echo base_url('staff-gs/Pengajuan/pilih_perangkat'); ?>',
                method: 'POST',
                data: "id_pengajuan=" + id_pengajuan + "&perangkat=" + id_perangkat + "&serial_number=" + serial_number,
                success: function(response) {
                    if(response == "1"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Perangkat Berhasil Dipilih',
                        }).then((result) => {
                            location.reload(true);
                        })
                    }else{
                        Swal.fire({
                        icon: 'error',
                        title: 'Gagal Dipilih',
                        })
                    }
                }
            })
        })
        
    })

    

    function detail(id_pengajuan) {
            // alert(par);
            $('#modals').modal('show');
            // var par = $('#detail').val();
            // var myarr = par.split("_");
            // var nippos = myarr[0];
            // var id_pengajuan = myarr[1];
            $.ajax({
                url: '<?php echo base_url('staff-gs/Pengajuan/detail_pengajuan'); ?>',
                method: 'POST',
                data: "id_pengajuan=" + id_pengajuan,
                success: function(response) {
                    // alert(response);
                    var dt = jQuery.parseJSON(response);
                    var nippos = dt[0].nippos;
                    var nama = dt[0].nama;
                    var nopend = dt[0].nopend;
                    var namaktr = dt[0].namaktr;
                    var kodebagian = dt[0].kodebagian;
                    var namabagian = dt[0].namabagian;
                    var kodejabatan = dt[0].kodejabatan;
                    var namajabatan = dt[0].namajabatan;
                    var jenis_perangkat = dt[0].jenisperangkat;
                    var deskripsi = dt[0].deskripsi;
                    var idpengajuan = dt[0].id_pengajuan;
                    var merk = dt[0].merk;
                    var spesifikasi = dt[0].spesifikasi;
                    var serial_number = dt[0].serial_number;
                    var id_perangkat = dt[0].id_perangkat;
                    var status = dt[0].status;

                    $('#titip_id_pengajuan').val(idpengajuan);

                    if(id_perangkat != 0){
                        $('#tampil_perangkat').html(serial_number+" - "+merk+" - "+spesifikasi);
                    }


                    if(status == 2){
                        $('#tampil_upload').show();
                        $('#btns').html('<button type="button" class="btn btn-primary" onclick="btn_upload()">Upload</button>');
                    }

                    // alert(idpengajuan);

                    $('#nipposnama').val(nippos + " - " + nama);
                    $('#kantor').val(nopend + " - " + namaktr);
                    $('#bagian').val(kodebagian + " - " + namabagian);
                    $('#jabatan').val(kodejabatan + " - " + namajabatan);
                    $('#jns_perangkat').val(jenis_perangkat);
                    $('#deskripsi').val(deskripsi);
                    $('#id_pengajuan').val(idpengajuan);


                    // alert(nopend);

                }
            })
        }

    function btn_upload(){
            // var fd = new FormData();
            // var files = $('#file')[0].files;
            // var nama_file = $('#nama_file').val();
                const fileupload = $('#fileupload').prop('files')[0];
                let formData = new FormData();
                var idpengajuan = $('#titip_id_pengajuan').val();
                formData.append('fileupload', fileupload);
                formData.append('idpengajuan', idpengajuan);

  
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url('staff-gs/Pengajuan/upload'); ?>",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if(response == "1"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Upload File Berhasil',
                        }).then((result) => {
                            location.reload(true);
                        })
                        }else{
                            Swal.fire({
                            icon: 'error',
                            title: 'Upload File Gagal',
                            })
                        }
                    }
                
                });
            };
</script>