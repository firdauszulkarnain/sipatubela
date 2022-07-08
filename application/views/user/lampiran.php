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
                    <?= form_open_multipart('pengajuan/proses_pengajuan'); ?>
                    <div class="form-group row">
                        <label for="sk_cpns" class="col-sm-3 col-form-label">SK CPNS</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="sk_cpns" name="sk_cpns" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sk_pns" class="col-sm-3 col-form-label">SK PNS</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="sk_pns" name="sk_pns" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sk_pangkat_terakhir" class="col-sm-3 col-form-label">SK Pangkat Terakhir</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="sk_pangkat_terakhir" name="sk_pangkat_terakhir" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="skp_dua_tahun" class="col-sm-3 col-form-label">SKP 2 Tahun Terakhir</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="skp_dua_tahun" name="skp_dua_tahun" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sk_perjanjian" class="col-sm-3 col-form-label">SK Perjanjian</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="sk_perjanjian" name="sk_perjanjian" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sk_jamin_biaya" class="col-sm-3 col-form-label">SK Jaminan Pembiayaan</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="sk_jamin_biaya" name="sk_jamin_biaya" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="st_izin_kepala" class="col-sm-3 col-form-label">Surat Izin Kepala BKPSDM</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="st_izin_kepala" name="st_izin_kepala" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="st_rekomendasi" class="col-sm-3 col-form-label">Surat Rekomendasi</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="st_rekomendasi" name="st_rekomendasi" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jadwal_kuliah" class="col-sm-3 col-form-label">Jadwal Kuliah</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="jadwal_kuliah" name="jadwal_kuliah" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="st_pernyataan" class="col-sm-3 col-form-label">Surat Pernyataan</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file input-file" id="st_pernyataan" name="st_pernyataan" autocomplete="off" required>
                        </div>
                    </div>
                    <button class="btn btn-success px-5 float-right mb-4 mt-3" type="submit">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>
</section>