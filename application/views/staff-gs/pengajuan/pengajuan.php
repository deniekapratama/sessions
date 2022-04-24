<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Pengajuan Perangkat Baru</a></div>
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
                                            <th>#</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($dt_pengajuan as $b) {
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
                                            <td>
                                                <button class="btn btn-primary" id="detail" value="<?php echo  $b->nippos."_". $b->id_pengajuan;?>">Detail</button>

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
                <?php
                    // foreach ($dataperangkatdetail as $c){
                    //     $namaktr = $c->namaktr;
                    //     $namabagian = $c->namabagian;
                    //     $jabatan = $c->namajabatan;
                    //     $merk = $c->merk;
                    //     $spesifikasi = $c->spesifikasi;
                    //     $serial_number = $c->serial_number;
                    //     $jenis_perangkat = $c->jenisperangkat;
                    // }
                ?>
                <form>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nippos/Nama</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kantor</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Perangkat</label>
                        <select class="form-control col-sm-6" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Perangkat</label>

                        <select class="form-control select2" id="exampleFormControlSelect2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>

                    </div>


                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
            // window.location.href = "<?php //echo base_url('Auth/dashboard'); ?>";
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


        $('#detail').click(function() {
            // alert("tes");
            $('#modals').modal('show');
            var par = $('#detail').val();
            var myarr = par.split("_");
            var nippos = myarr[0];
            var id_pengajuan = myarr[1];
            $.ajax({
                 url: '<?php echo base_url('staff-gs/Pengajuan/detail_pengajuan'); ?>',
                 method: 'POST',
                 data: "nippos=" + nippos + "&id_pengajuan=" + id_pengajuan,
                 success: function(response) {
                     alert(response);
                 }
             })
        })
    })
</script>