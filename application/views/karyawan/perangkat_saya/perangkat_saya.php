<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('karyawan/dashboard'); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
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
                                            <th>
                                                No
                                            </th>
                                            <th>Bagian</th>
                                            <th>Jabatan</th>
                                            <th>Jenis Perangkat</th>
                                            <th>Serial Number</th>
                                            <th>Merk</th>
                                            <th>Spesifikasi</th>
                                            <th>Status</th>
                                            <th>#</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // print_r($dataperangkat);
                                        $no = 1;
                                        foreach ($dataperangkat as $b) {
                                        ?>

                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $b->kodebagian." - ".$b->namabagian;; ?></td>
                                                <td><?php echo $b->kodejabatan." - ".$b->namajabatan; ?></td>
                                                <td><?php echo $b->jenisperangkat; ?></td>
                                                <td><?php echo $b->serial_number; ?></td>
                                                <td><?php echo $b->merk; ?></td>
                                                <td><?php echo $b->spesifikasi; ?></td>

                                                <?php
                                                $nippos = $b->nippos;
                                                $sn = $b->serial_number;
                                                $id_perangkat = $b->id_perangkat;

                                                if ($b->status == "0") {
                                                    echo '<td><div class="badge badge-info">Pengajuan</div></td>';
                                                } else if ($b->status == "1") {
                                                    echo '<td><div class="badge badge-warning">Completed</div></td>';
                                                } else if ($b->status == "2") {
                                                    echo '<td><div class="badge badge-success">Completed</div></td>';
                                                } else if ($b->status == "5") {
                                                    echo '<td><div class="badge badge-danger">Sudah Dikembalikan</div></td>';
                                                }
                                                ?>


                                                <td>
                                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" id="detail">Details</button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Kembalikan</button> -->
                                                    <!-- Example single danger button -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Pilih
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" id="detail" href="javascript:void(0)" onclick="detail('<?php echo $nippos;?>','<?php echo $sn;?>','<?php echo $id_perangkat;?>')">Detail</a>
                                                            <a class="dropdown-item" id="kembali" href="javascript:void(0)" onclick="kembali()">Kembalikan</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>

                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal -->


<!-- 
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> -->


<div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Perangkat Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
            <hr>

            <div class="modal-body">
                <!-- form -->
                <?php
                // foreach ($dataperangkatdetail as $c) {
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
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kantor</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="namaktr">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="bagian">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jabatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="jenisperangkat" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="merk">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Spefisikasi</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="spesifikasi" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Serial Number</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="sn">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Surat NDE</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="tgl_surat_nde" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No Surat NDE</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="no_surat_nde" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Lampiran NDE</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="lampiran_nde" value=": Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Lampiran Serah Terima</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="lampiran_serah_terima" value=": Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Lampiran pengembalian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="lampiran_pengembalian" value=": Lampiran Serah Terima">
                        </div>
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pengembalian Perangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tanggal Pengajuan Pengembalian:</label>
                        <input type="date" class="form-control" id="recipient-name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        // $('#detail').click(function() {
        //     $('#exampleModal1').modal('show');
        //     // var val_detail = $(this).attr('href');
        //     var val_detail = $(this).attr('href');

        // })

       


    })
    function detail(nippos,sn,idperangkat){  
       
            // alert(sn);        
            $('#exampleModal1').modal('show');
            $.ajax({
                url: '<?php echo base_url('karyawan/Perangkat_saya/detail_perangkatsaya'); ?>',
                method: 'POST',
                data: "nippos=" + nippos + "&sn=" + sn + "&idperangkat=" + idperangkat,
                success: function(response) {
                    // alert(response);
                    var dt = jQuery.parseJSON(response);
                    // var nippos = dt[0].nippos;
                    // var nama = dt[0].nama;
                    var nopend = dt[0].nopend;
                    var namaktr = dt[0].namaktr;
                    var kodebagian = dt[0].kodebagian;
                    var namabagian = dt[0].namabagian;
                    var kodejabatan = dt[0].kodejabatan;
                    var namajabatan = dt[0].namajabatan;
                    var jenis_perangkat = dt[0].jenisperangkat;
                    var merk = dt[0].merk;
                    var spesifikasi = dt[0].spesifikasi;
                    var sn = dt[0].serial_number;
                    var tgl_surat_nde = dt[0].tgl_surat_nde;
                    var no_surat_nde = dt[0].no_surat_nde;

                    $('#namaktr').val(nopend + " - " + namaktr);
                    $('#bagian').val(kodebagian + " - " + namabagian);
                    $('#jabatan').val(kodejabatan + " - " + namajabatan);
                    $('#jenisperangkat').val(jenis_perangkat);
                    $('#merk').val(merk);
                    $('#spesifikasi').val(spesifikasi);
                    $('#sn').val(sn);
                    $('#tgl_surat_nde').val(tgl_surat_nde);
                    $('#no_surat_nde').val(no_surat_nde);

                    // $('#nipposnama').val(nippos + " - " + nama);
                    // $('#kantor').val(nopend + " - " + namaktr);
                    // $('#bagian').val(kodebagian + " - " + namabagian);
                    // $('#jabatan').val(kodejabatan + " - " + namajabatan);
                    // $('#jns_perangkat').val(jenis_perangkat);
                    // $('#deskripsi').val(deskripsi);

                }
            })
        }

        function kembali(){
            $('#exampleModal2').modal('show');

        }
</script>