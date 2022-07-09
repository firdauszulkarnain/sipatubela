<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | APTUBELA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
    <!-- DATATABLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- SELECTPICKER -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-select/bootstrap-select.css">
    <!-- DATEPICKER -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker/bootstrap-datepicker.css">
    <!-- My Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/myadmin.css">

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- DATEPICKER -->
    <script src="<?= base_url() ?>assets/js/bootstrap-datepicker/bootstrap-datepicker.js"></script>



</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item mr-n2">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#logoutModal" class="nav-link">
                        <i class="bg- fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>user/dashboard" class="brand-link">
                <img src="<?= base_url() ?>assets/img/logo/bogor.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text">APTUBELA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>assets/img/profile/Default.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url() ?>user/profile" class="d-block text-capitalize <?= $this->uri->segment(2) == 'profile' ? "text-light" : "" ?>""><?= $user['username'] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class=" mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>user" class="nav-link <?= $this->uri->segment(1) == 'user' && $this->uri->segment(2) == 'dashboard' ? "active" : "" ?>">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'pengajuan' ? "active" : "" ?>">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Pengajuan
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>pengajuan/data" class="nav-link <?= $this->uri->segment(1) == 'pengajuan'  && $this->uri->segment(2) == 'data' ? "active" : "" ?>">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Pribadi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>pengajuan/lampiran" class="nav-link <?= $this->uri->segment(1) == 'pengajuan'  && $this->uri->segment(2) == 'lampiran' ? "active" : "" ?>">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Lampiran</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            </nav>
                    </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="content-wrapper">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
            <?= $contens ?>
        </div>
        <!-- END MAINCONTENT -->



        <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y') ?> APTUBELA All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <!-- ./wrapper -->


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin untuk keluar dari aplikasi?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url() ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DATA TABLE -->
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
    <!-- SWEETALERT2 -->
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- SELECT PICKER -->
    <script src="<?= base_url() ?>assets/js/bootstrap-select/bootstrap-select.js"></script>
    <script src="<?= base_url('assets/js/select/defaults-id_ID.min.js') ?>"></script>
    <!-- JQUERY MASKING Money -->
    <script src="<?= base_url() ?>assets/js/jquery-mask/jquery.mask.js"></script>

    <!-- FileStyle -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-filestyle/bootstrap-filestyle.min.js"> </script>
    <!-- MYJS -->
    <script src="<?= base_url() ?>assets/js/myjs.js"></script>
</body>

</html>