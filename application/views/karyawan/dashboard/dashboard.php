<!-- Main Content -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('ul li a').click(function() {
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<br>
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Pengajuan</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <?php //print_r($status_pengajuan);
                                ?>
                                <tr>
                                    <th>Jenis Perangkat</th>
                                    <th>Deskripsi</th>
                                    <th>No Surat NDE</th>
                                    <th>Tgl Surat NDE</th>
                                    <th>Statuss</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($status_pengajuan as $b) {
                                ?>
                                    <td><?php echo $b->jenisperangkat; ?></td>
                                    <td><?php echo $b->deskripsi; ?></td>
                                    <td><?php echo $b->no_surat_nde; ?></td>
                                    <td><?php echo $b->tgl_surat_nde; ?></td>

                                <?php
<<<<<<< HEAD
                                        if ($b->status == "0") {
                                            echo '<td><div class="badge badge-info">Pengajuan</div></td>';
                                        } else if ($b->status == "1" or $b->lampiran == "") {
                                            echo '<td><div class="badge badge-warning">In Progress</div></td>';
                                        } else if ($b->status == "2") {
                                            echo '<td><div class="badge badge-success">Completed</div></td>';
                                        } else if ($b->status == "5") {
                                            echo '<td><div class="badge badge-danger">Sudah Dikembalikan</div></td>';
                                        }
=======
                                    if ($b->status == "0") {
                                        echo '<td><div class="badge badge-info">Pengajuan</div></td>';
                                    } else if ($b->status == "1") {
                                        echo '<td><div class="badge badge-warning">In Progress</div></td>';
                                    } else if ($b->status == "2") {
                                        echo '<td><div class="badge badge-success">Completed</div></td>';
                                    } else if ($b->status == "5") {
                                        echo '<td><div class="badge badge-danger">Sudah Dikembalikan</div></td>';
>>>>>>> 7768e3bdc502c709086121d5e38d553bed953dab
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>