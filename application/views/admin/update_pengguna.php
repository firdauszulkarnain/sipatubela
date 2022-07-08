<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content pb-5">
    <div class="row d-fle justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body px-5 pt-5">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control text-capitalize <?= (form_error('nama_lengkap')) ? 'is-invalid' : '' ?>" id="nama_lengkap" name="nama_lengkap" value="<?= $user['nama_user']  ?>" autocomplete="off">
                                <?= form_error('nama_lengkap', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" value="<?= $user['nip_user']  ?>" autocomplete="off">
                                <?= form_error('nip', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control  <?= (form_error('email')) ? 'is-invalid' : '' ?>" id="email" placeholder="Email Address" name="email" autocomplete="off" value="<?= $user['email']   ?>">
                                <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control  <?= (form_error('username')) ? 'is-invalid' : '' ?>" id="username" placeholder="Username" name="username" autocomplete="off" value="<?= $user['username']  ?>">
                                <?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <button class="btn btn-success px-5 float-right mb-4 mt-3" type="submit">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>