<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- sidebar -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('karyawan/dashboard'); ?>"><b>
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
                <a href="<?= base_url('karyawan/dashboard'); ?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Form</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                    <ul class="nav navbar-nav">
                        <li class="<?php if ($this->uri->segment('3') == 'form_pengajuan') {
                                        echo 'active';
                                    } ?>"> <a href=" <?= base_url('karyawan/pengajuan/form_pengajuan'); ?>">Perangkat Baru</a></li>
                        <li class="<?php if ($this->uri->segment('3') == 'form_service') {
                                        echo 'active';
                                    } ?>"><a href="<?= base_url('karyawan/service/form_service'); ?>">Service</a></li>
                        <li class="<?php if ($this->uri->segment('3') == 'form_upgrade') {
                                        echo 'active';
                                    } ?>"><a href="<?= base_url('karyawan/upgrade/form_upgrade'); ?>">Upgrade</a></li>
                    </ul>
                </ul>
            </li>
            <li class="menu-header">Personal</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-laptop-code"></i> <span>Perangkat Saya</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Pengajuan Perangkat</a></li>
                    <li><a href="auth-forgot-password.html">Daftar Perangkat Saya</a></li>
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