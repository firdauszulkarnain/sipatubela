<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url() ?>auth/login" class="h1"><b>SI</b>TuBela</a>
                <p>Sistem Informasi Tugas Belajar</p>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login Untuk Memulai Aktivitas</p>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                <div class="error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
                <form method="POST" action="<?= base_url('auth/login') ?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" placeholder="Username" value="<?= set_value('username') ?>" name="username" autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-fw fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : '' ?>" placeholder="Password" name="password" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block float-right">Sign In</button>
                        </div>
                    </div>
                </form>

                <p class=" mt-3 text-center">
                    <a href="<?= base_url() ?>auth/register" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
    <!-- SWEETALERT2 -->
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {

            const flashData = $('.flash-data').data('flashdata');
            if (flashData) {
                Swal.fire({
                    title: 'Success',
                    text: flashData,
                    icon: 'success'
                });
            }
            const error = $('.error').data('error');
            if (error) {
                Swal.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error'
                });
            }
        });
    </script>
</body>

</html>