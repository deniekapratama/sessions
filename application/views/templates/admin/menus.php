<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- sidebar -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('admin/dashboard'); ?>"><b>
                    <img width="120px" src="<?= base_url('assets/auth/img/logoses.svg') ?>" alt="">
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><b>POS</b></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php if ($this->uri->segment('2') == 'dashboard') {
                            echo 'active';
                        } ?>">
                <a href="<?= base_url('admin/dashboard'); ?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Form</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                    <ul class="nav navbar-nav">
                        <li class="<?php if ($this->uri->segment('3') == 'form_pengajuan') {
                                        echo 'active';
                                    } ?>"> <a href=" <?= base_url('admin/pengajuan/form_pengajuan'); ?>">Perangkat Baru</a></li>
                        <li class="<?php if ($this->uri->segment('3') == 'form_service') {
                                        echo 'active';
                                    } ?>"><a href="<?= base_url('admin/service/form_service'); ?>">Service</a></li>
                        <li class="<?php if ($this->uri->segment('3') == 'form_upgrade') {
                                        echo 'active';
                                    } ?>"><a href="<?= base_url('admin/upgrade/form_upgrade'); ?>">Upgrade</a></li>
                    </ul>
                </ul>
            </li>
            <li class="menu-header">Data</li>
            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-arrow-up"></i> <span>Daftar Pengajuan</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php if ($this->uri->segment('2') == 'pengajuan') {
                                    echo 'active';
                                } ?>"><a class="nav-link" href="<?= base_url('admin/pengajuan'); ?>">Perangkat Baru</a></li>

                    <li class="<?php if ($this->uri->segment('2') == 'service') {
                                    echo 'active';
                                } ?>"><a class="nav-link" href="<?= base_url('admin/service'); ?>">Data Service</a></li>

                    <li <?php if ($this->uri->segment('2') == 'upgrade') {
                            echo 'active';
                        } ?>><a href="<?= base_url('admin/upgrade'); ?>">Data Upgrade</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-arrow-down"></i> <span>Daftar Pengembalian</span></a></li>

            <li class="menu-header">Perangkat</li>
            <li><a href="<?= base_url('admin/perangkat'); ?>"><i class="fas fa-laptop"></i> <span>Daftar Perangkat</span></a></li>

            <li class="menu-header">Personal</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-laptop-code"></i> <span>Perangkat Saya</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Pengajuan Perangkat</a></li>
                    <li><a href="auth-forgot-password.html">Daftar Perangkat Saya</a></li>
                </ul>
            </li>
            <li class="menu-header">Transaksi</li>
            <li><a href="<?= base_url('admin/perangkat'); ?>"><i class="fas fa-laptop"></i> <span>Daftar Serah Terima</span></a></li>
            <li><a href="<?= base_url('admin/perangkat'); ?>"><i class="fas fa-laptop"></i> <span>Daftar Pengembalian</span></a></li>
            <li class="menu-header">Report</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-bar"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Pengajuan</a></li>
                    <li><a href="auth-forgot-password.html">Pengembalian </a></li>
                    <li><a href="auth-forgot-password.html">Data Perangkat </a></li>
                </ul>
            </li>
            <!-- <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> -->
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href=" https://getstisla.com/docs" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
<!-- 
<script>
    $("ul > li").hover(
        function() {
            $(this).addClass('active');
        },
        function() {
            $(this).removeClass('active');
        }
    );
    $("ul > li").click(function() {
        $(this).toggleClass('active');
    });
</script> -->