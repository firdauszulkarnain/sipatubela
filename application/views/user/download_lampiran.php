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
                    <div class="form-group row">
                        <label for="sk_cpns" class="col-sm-3 col-form-label">SK CPNS</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['sk_cpns'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sk_pns" class="col-sm-3 col-form-label">SK PNS</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['sk_pns'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sk_pangkat_terakhir" class="col-sm-3 col-form-label">SK Pangkat Terakhir</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['sk_pangkat_terakhir'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="skp_dua_tahun" class="col-sm-3 col-form-label">SKP 2 Tahun Terakhir</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['skp_dua_tahun'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sk_perjanjian" class="col-sm-3 col-form-label">SK Perjanjian</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['sk_perjanjian'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sk_jamin_biaya" class="col-sm-3 col-form-label">SK Jaminan Pembiayaan</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['sk_jamin_biaya'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="st_izin_kepala" class="col-sm-3 col-form-label">Surat Izin Kepala BKPSDM</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['st_izin_kepala'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="st_rekomendasi" class="col-sm-3 col-form-label">Surat Rekomendasi</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['st_rekomendasi'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jadwal_kuliah" class="col-sm-3 col-form-label">Jadwal Kuliah</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['jadwal_kuliah'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="st_pernyataan" class="col-sm-3 col-form-label">Surat Pernyataan</label>
                        <div class="col-sm-9">
                            <a href="<?= base_url(''); ?>assets/file/<?= $pengajuan['st_pernyataan'] ?>" class="btn btn-block font-weight-bolder text-light bg-primary" target="_blank"> Download File</a>
                        </div>
                    </div>
                    <a class="btn btn-danger px-5 float-right mb-4 mt-3" href="<?= base_url() ?>pengajuan/hapus_pengajuan/<?= $pengajuan['id_pengajuan'] ?>">Upload Ulang Lampiran</a>
                </div>
            </div>
        </div>
    </div>
</section>