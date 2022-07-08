<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="card-body">
                    <table class="table table-striped table-bordered dt-responsive nowrap" id="mytabel" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th width="20%">Nama Lengkap</th>
                                <th width="12%">NIP</th>
                                <th width="12%">Unit Kerja</th>
                                <th>File Pengajuan</th>
                                <th></th>
                                <th>Status</th>
                                <th width="13%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengajuan as $item) : ?>
                                <tr>
                                    <td class="text-center align-middle"></td>
                                    <td class="text-capitalize text-center align-middle"><?= $item['nama_lengkap'] ?></td>
                                    <td class="text-center align-middle"><?= $item['nip'] ?></td>
                                    <td class="text-center align-middle"><?= $item['unit_kerja'] ?></td>
                                    <td>
                                        <label class="form-check-label" for="sk_cpns">SK CPNS</label>
                                        <br>
                                        <label class="form-check-label" for="sk_pns">SK PNS</label>
                                        <br>
                                        <label class="form-check-label" for="sk_pangkat_terakhir">SK Pangkat Terakhir</label>
                                        <br>
                                        <label class="form-check-label" for="skp_dua_tahun">SKP 2 Tahun Terakhir</label>
                                        <br>
                                        <label class="form-check-label" for="sk_perjanjian">SK Perjanjian</label>
                                        <br>
                                        <label class="form-check-label" for="sk_jamin_biaya">SK Jaminan Pembiayaan</label>
                                        <br>
                                        <label class="form-check-label" for="st_izin_kepala">Surat Izin Kepala BKPSDM</label>
                                        <br>
                                        <label class="form-check-label" for="st_rekomendasi">Surat Rekomendasi</label>
                                        <br>
                                        <label class="form-check-label" for="jadwal_kuliah">Jadwal Kuliah</label>
                                        <br>
                                        <label class="form-check-label" for="st_pernyataan">Surat Pernyataan</label>
                                    </td>
                                    <td class="text-center">

                                        <input type="checkbox" id="sk_cpns" checked disabled>
                                        <br>
                                        <input type="checkbox" id="sk_pns" checked disabled>
                                        <br>
                                        <input type="checkbox" id="sk_pangkat_terakhir" checked disabled>
                                        <br>
                                        <input type="checkbox" id="skp_dua_tahun" checked disabled>
                                        <br>
                                        <input type="checkbox" id="sk_perjanjian" checked disabled>
                                        <br>
                                        <input type="checkbox" id="sk_jamin_biaya" checked disabled>
                                        <br>
                                        <input type="checkbox" id="st_izin_kepala" checked disabled>
                                        <br>
                                        <input type="checkbox" id="st_rekomendasi" checked disabled>
                                        <br>
                                        <input type="checkbox" id="jadwal_kuliah" checked disabled>
                                        <br>
                                        <input type="checkbox" id="st_pernyataan" checked disabled>
                                    </td>
                                    <td></td>
                                    <td class="text-center align-middle">
                                        <!-- Button Detail -->
                                        <a href="<?= base_url() ?>pengguna/detail_pengajuan/<?= $item['id_pengajuan'] ?>" class="btn btn-sm btn-success text-light"><i class="fas fa-fw fa-eye"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>