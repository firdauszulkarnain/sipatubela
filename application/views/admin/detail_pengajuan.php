<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content pb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header font-weight-bolder bg-danger">
                    Data Pribadi Pengguna
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="email" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $pengajuan['nama_lengkap'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="email" class="form-control" id="nip" name="nip" value="<?= $pengajuan['nip'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="unit_kerja">Unit Kerja</label>
                        <input type="email" class="form-control" id="unit_kerja" name="unit_kerja" value="<?= $pengajuan['unit_kerja'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="email" class="form-control" id="jabatan" name="jabatan" value="<?= $pengajuan['jabatan'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="email" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $pengajuan['tempat_lahir'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="email" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pengajuan['tanggal_lahir'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="notelp">Notelp</label>
                        <input type="email" class="form-control" id="notelp" name="notelp" value="<?= $pengajuan['notelp'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="2" disabled><?= $pengajuan['unit_kerja'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="program_studi">Program Studi</label>
                        <input type="email" class="form-control" id="program_studi" name="program_studi" value="<?= $pengajuan['program_studi'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="instusi">Institus Lanjutan</label>
                        <input type="email" class="form-control" id="instusi" name="instusi" value="<?= $pengajuan['instusi'] ?>" disabled>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header font-weight-bolder bg-danger">
                    File Pengajuan Pengguna
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</section>