<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url() ?>auth/register" class="h1"><b>SI</b>PtuBela</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register Akun</p>

                <form method="POST" action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control text-capitalize  <?= (form_error('nama')) ? 'border border-danger' : '' ?>" id="nama" placeholder="Nama Lengkap" name="nama" autocomplete="off" value="<?= set_value('nama');  ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('nama', '<small class="form-text text-danger mt-n3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control  <?= (form_error('username')) ? 'border border-danger' : '' ?>" id="username" placeholder="Username" name="username" autocomplete="off" value="<?= set_value('username');  ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('username', '<small class="form-text text-danger mt-n3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control  <?= (form_error('email')) ? 'border border-danger' : '' ?>" id="email" placeholder="Email Address" name="email" autocomplete="off" value="<?= set_value('email');  ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('email', '<small class="form-text text-danger mt-n3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control  <?= (form_error('password1')) ? 'border border-danger' : '' ?>" id="password1" placeholder="Password" name="password1" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password1', '<small class="form-text text-danger mt-n3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control  <?= (form_error('password2')) ? 'border border-danger' : '' ?>" id="password2" placeholder="Konfirmasi Password" name="password2" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password2', '<small class="form-text text-danger mt-n3">', '</small>'); ?>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br>
                <a href="<?= base_url() ?>auth/login" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
</body>

</html>