<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title ?></title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.9/sweetalert2.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.9/sweetalert2.min.js"></script>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/jquery-selectric/selectric.css">


    <!-- CSS Libraries -->
    <!-- data picker form -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <link rel="shortcut icon" href="<?= base_url('assets/assets/img/'); ?>lo.png" type="image/x-icon">


    <head>

        <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

        <style type="text/css">
            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color: #fff;
            }

            .preloader .loading {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                font: 14px arial;
            }
        </style>

    </head>

    <!-- <div class="preloader">
        <div class="loading">
            <img src="poi.gif" width="80">
            <p>Harap Tunggu</p>
        </div>
    </div> -->


    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url('assets/assets/img/logopossessions.png'); ?>" width="200">
            <p>???Protecting Device for Everyone???</p>
        </div>
    </div>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg navbar-fixed"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url('assets/'); ?>assets/img/avatar/avatar-1.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b>
                                        <p>Hello, Bro!</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url('assets/'); ?>assets/img/avatar/avatar-2.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Dedik Sugiharto</b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url('assets/'); ?>assets/img/avatar/avatar-3.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b>
                                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url('assets/'); ?>assets/img/avatar/avatar-4.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url('assets/'); ?>assets/img/avatar/avatar-5.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b>
                                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-success text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Low disk space. Let's clean it!
                                        <div class="time">17 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Stisla template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('assets/'); ?>assets/img/avatar/avatar-4.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('nama'); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="<?= base_url('staff-gs/profil'); ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <!-- <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url(''); ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>