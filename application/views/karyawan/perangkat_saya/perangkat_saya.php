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
                                            <th>Merk</th>
                                            <th>Jenis Perangkat</th>
                                            <th>Serial Number</th>
                                            <th>Spesifikasi</th>
                                            <th>Status</th>
                                            <th>#</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($dataperangkat as $b) {
                                        ?>

                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $b->merk; ?></td>
                                                <td><?php echo $b->jenisperangkat; ?></td>
                                                <td><?php echo $b->serial_number; ?></td>
                                                <td><?php echo $b->spesifikasi; ?></td>
                                                <?php
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
                                                            <a class="dropdown-item" data-toggle="modal" id="detail">Detail</a>
                                                            <a class="dropdown-item" href="#">Kembalikan</a>
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                foreach ($dataperangkatdetail as $c) {
                    $namaktr = $c->namaktr;
                    $namabagian = $c->namabagian;
                    $jabatan = $c->namajabatan;
                    $merk = $c->merk;
                    $spesifikasi = $c->spesifikasi;
                    $serial_number = $c->serial_number;
                    $jenis_perangkat = $c->jenisperangkat;
                }
                ?>

                <form>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kantor</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" <?php echo $namaktr; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $namabagian; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $jabatan; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" <?php echo $merk; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Spefisikasi</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" <?php echo $spesifikasi; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Serial Number</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" <?php echo $serial_number; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" <?php echo $jenis_perangkat; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Lampiran</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Kembalikan</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Cetak Pengajuan</button>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#detail').click(function() {
            $('.modal').modal('show');
        })


    })
</script>