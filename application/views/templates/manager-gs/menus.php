<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- sidebar -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('manager-gs/dashboard'); ?>"><b>
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
                <a href="<?= base_url('manager-gs/dashboard'); ?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data</li>
            <li class="dropdown <?php echo activate_menu('pengajuan'); ?> , <?php echo activate_menu('service'); ?> , <?php echo activate_menu('upgrade'); ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-arrow-up"></i> <span>Daftar Pengajuan</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php if ($this->uri->segment('2') == 'pengajuan') {
                                    echo 'active';
                                } ?>"><a class="nav-link" href="<?= base_url('manager-gs/pengajuan'); ?>">Perangkat Baru</a></li>
                    <li <?php if ($this->uri->segment('2') == 'upgrade') {
                            echo 'active';
                        } ?>><a href="<?= base_url('manager-gs/upgrade'); ?>">Data Upgrade</a></li>
                </ul>
            </li>
            <li class="menu-header">Report</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-bar"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Pengajuan</a></li>
                    <li><a href="auth-forgot-password.html">Pengembalian </a></li>
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