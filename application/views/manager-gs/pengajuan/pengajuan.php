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
                                            <th class="text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Nippos/Nama</th>
                                            <th>Kantor</th>
                                            <th>Bagian</th>
                                            <th>Jabatan</th>
                                            <th>Jenis Perangkat</th>
                                            <th>deskripsi</th>
                                            <th>Serial Number</th>
                                            <th>Merk</th>
                                            <th>Spesifikasi</th>

                                            <th>#</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($dt_pengajuan as $b) {
                                    ?>

                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" name="ids" class="custom-control-input pgw" id="<?php echo $b->id_pengajuan; ?>" value="<?php echo $b->id_pengajuan; ?>">
                                                    <label for="<?php echo $b->id_pengajuan; ?>" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><?php echo $b->nippos . " - " . $b->nama; ?></td>
                                            <td><?php echo $b->nopend . " - " . $b->namaktr; ?></td>
                                            <td><?php echo $b->namabagian; ?></td>
                                            <td><?php echo $b->namajabatan; ?></td>
                                            <td><?php echo $b->jenisperangkat; ?></td>
                                            <td><?php echo $b->deskripsi; ?></td>
                                            <td><?php echo $b->serial_number; ?></td>
                                            <td><?php echo $b->merk; ?></td>
                                            <td><?php echo $b->spesifikasi; ?></td>

                                            <td>
                                                <button class="btn btn-primary" id="detail" value="<?php echo  $b->nippos . "_" . $b->id_pengajuan; ?>">Cetak Surat</button>

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
                <form>

                
                    <input type="hidden" name="id_pengajuan" id="id_pengajuan">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nippos/Nama</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="nipposnama" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kantor</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="kantor" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="bagian" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jabatan" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jns_perangkat" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="deskripsi" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="pilih_perangkat">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
       

        $('#submit').click(function() {
            // var pg = $('.pgw').val();
            // var pg = $("input[type='checkbox']").val();
            var val = [];
            $(':checkbox:checked').each(function(i){
                val[i] = $(this).val();
            });
            // var checkedValue = $('.pgw:checked').val();
            // alert(val);
            
            // var id_pengajuan = $('#id_pengajuan').val();
            // var mast_perangkat = $('#perangkat').val();
            // var myarr = mast_perangkat.split("_");
            // var id_perangkat = myarr[0];
            // var serial_number = myarr[1];

            $.ajax({
                url: '<?php echo base_url('manager-gs/Pengajuan/approve'); ?>',
                method: 'POST',
                data: "parameter=" + val,
                success: function(response) {
                    if(response == "1"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Telah Disetujui',
                        }).then((result) => {
                            location.reload();
                        })
                    }else{
                        Swal.fire({
                        icon: 'error',
                        title: 'Gagal Disimpan',
                        })
                    }
                    // alert(response);
                }
            })
        })
        
    })
</script>