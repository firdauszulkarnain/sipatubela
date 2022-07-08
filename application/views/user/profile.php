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
                                <input type="text" class="form-control text-capitalize <?= (form_error('nama_lengkap')) ? 'is-invalid' : '' ?>" id="nama_lengkap" name="nama_lengkap" value="<?= $user['nama_lengkap']  ?>" autocomplete="off">
                                <?= form_error('nama_lengkap', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" value="<?= $user['nip']  ?>" autocomplete="off">
                                <?= form_error('nip', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ttl" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= (form_error('ttl')) ? 'is-invalid' : '' ?>" id="ttl" name="ttl" value="<?= $user['ttl']  ?>" autocomplete="off">
                                <?= form_error('ttl', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control text-capitalize <?= (form_error('agama')) ? 'is-invalid' : '' ?>" id="agama" name="agama" value="<?= $user['agama']  ?>" autocomplete="off">
                                <?= form_error('agama', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control text-capitalize <?= (form_error('jabatan')) ? 'is-invalid' : '' ?>" id="jabatan" name="jabatan" value="<?= $user['jabatan']  ?>" autocomplete="off">
                                <?= form_error('jabatan', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pendidikan" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= (form_error('pendidikan')) ? 'is-invalid' : '' ?>" id="pendidikan" name="pendidikan" value="<?= $user['pendidikan']  ?>" autocomplete="off">
                                <?= form_error('pendidikan', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control l <?= (form_error('alamat')) ? 'is-invalid' : '' ?>" id="alamat" rows="3" name="alamat" autocomplete="off"><?= $user['alamat'] ?></textarea>
                                <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <button class="btn btn-success px-5 float-right mb-4 mt-3" type="submit">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>