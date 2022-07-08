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
                    <?php if ($pribadi == NULL) : ?>
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-capitalize <?= (form_error('nama_lengkap')) ? 'is-invalid' : '' ?>" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap');  ?>" autocomplete="off">
                                    <?= form_error('nama_lengkap', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" value="<?= set_value('nip');   ?>" autocomplete="off">
                                    <?= form_error('nip', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('unit_kerja')) ? 'is-invalid' : '' ?>" id="unit_kerja" name="unit_kerja" value="<?= set_value('unit_kerja');   ?>" autocomplete="off">
                                    <?= form_error('unit_kerja', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-capitalize <?= (form_error('jabatan')) ? 'is-invalid' : '' ?>" id="jabatan" name="jabatan" value="<?= set_value('jabatan');   ?>" autocomplete="off">
                                    <?= form_error('jabatan', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('tempat_lahir')) ? 'is-invalid' : '' ?>" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir');   ?>" autocomplete="off">
                                    <?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control <?= (form_error('tanggal_lahir')) ? 'is-invalid' : '' ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir');   ?>" autocomplete="off">
                                    <?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notelp" class="col-sm-3 col-form-label">No. Telp/Hp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-capitalize <?= (form_error('notelp')) ? 'is-invalid' : '' ?>" id="notelp" name="notelp" value="<?= set_value('notelp');   ?>" autocomplete="off">
                                    <?= form_error('notelp', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control l <?= (form_error('alamat')) ? 'is-invalid' : '' ?>" id="alamat" rows="3" name="alamat" autocomplete="off"><?= set_value('alamat');   ?></textarea>
                                    <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="program_studi" class="col-sm-3 col-form-label">Program Studi Lanjutan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('program_studi')) ? 'is-invalid' : '' ?>" id="program_studi" name="program_studi" value="<?= set_value('program_studi');   ?>" autocomplete="off">
                                    <?= form_error('program_studi', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="instusi" class="col-sm-3 col-form-label">Instusi Lanjutan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('instusi')) ? 'is-invalid' : '' ?>" id="instusi" name="instusi" value="<?= set_value('instusi');   ?>" autocomplete="off">
                                    <?= form_error('instusi', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <button class="btn btn-success px-5 float-right mb-4 mt-3" type="submit">Simpan Data</button>
                        </form>

                    <?php else : ?>
                        <form action="<?= base_url() ?>pengajuan/update_data" method="POST">
                            <div class="form-group row">
                                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-capitalize <?= (form_error('nama_lengkap')) ? 'is-invalid' : '' ?>" id="nama_lengkap" name="nama_lengkap" value="<?= $pribadi != NULL ? $pribadi['nama_lengkap'] : set_value('nama_lengkap');  ?>" autocomplete="off">
                                    <?= form_error('nama_lengkap', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" value="<?= $pribadi != NULL ? $pribadi['nip'] : set_value('nip');   ?>" autocomplete="off">
                                    <?= form_error('nip', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('unit_kerja')) ? 'is-invalid' : '' ?>" id="unit_kerja" name="unit_kerja" value="<?= $pribadi != NULL ? $pribadi['unit_kerja'] : set_value('unit_kerja');   ?>" autocomplete="off">
                                    <?= form_error('unit_kerja', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-capitalize <?= (form_error('jabatan')) ? 'is-invalid' : '' ?>" id="jabatan" name="jabatan" value="<?= $pribadi != NULL ? $pribadi['jabatan'] : set_value('jabatan');   ?>" autocomplete="off">
                                    <?= form_error('jabatan', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('tempat_lahir')) ? 'is-invalid' : '' ?>" id="tempat_lahir" name="tempat_lahir" value="<?= $pribadi != NULL ? $pribadi['tempat_lahir'] : set_value('tempat_lahir');   ?>" autocomplete="off">
                                    <?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control <?= (form_error('tanggal_lahir')) ? 'is-invalid' : '' ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pribadi != NULL ? $pribadi['tanggal_lahir'] : set_value('tanggal_lahir');   ?>" autocomplete="off">
                                    <?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notelp" class="col-sm-3 col-form-label">No. Telp/Hp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control text-capitalize <?= (form_error('notelp')) ? 'is-invalid' : '' ?>" id="notelp" name="notelp" value="<?= $pribadi != NULL ? $pribadi['notelp'] : set_value('notelp');   ?>" autocomplete="off">
                                    <?= form_error('notelp', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control l <?= (form_error('alamat')) ? 'is-invalid' : '' ?>" id="alamat" rows="3" name="alamat" autocomplete="off"><?= $pribadi != NULL ? $pribadi['alamat'] : set_value('alamat');   ?></textarea>
                                    <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="program_studi" class="col-sm-3 col-form-label">Program Studi Lanjutan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('program_studi')) ? 'is-invalid' : '' ?>" id="program_studi" name="program_studi" value="<?= $pribadi != NULL ? $pribadi['program_studi'] : set_value('program_studi');   ?>" autocomplete="off">
                                    <?= form_error('program_studi', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="instusi" class="col-sm-3 col-form-label">Instusi Lanjutan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= (form_error('instusi')) ? 'is-invalid' : '' ?>" id="instusi" name="instusi" value="<?= $pribadi != NULL ? $pribadi['instusi'] : set_value('instusi');   ?>" autocomplete="off">
                                    <?= form_error('instusi', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <button class="btn btn-success px-5 float-right mb-4 mt-3" type="submit">Simpan Data</button>
                        </form>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>