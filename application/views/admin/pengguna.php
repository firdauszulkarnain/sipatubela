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
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengguna as $item) : ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td class="text-capitalize"><?= $item['nama_user'] ?></td>
                                    <td><?= $item['nip_user'] ?></td>
                                    <td><?= $item['username'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td>
                                        <!-- Button Edit -->
                                        <a href="<?= base_url() ?>pengguna/update_pengguna/<?= $item['id_user'] ?>" class="btn btn-sm btn-info text-light"><i class="fas fa-fw fa-edit"></i></a>
                                        <!-- Button Hapus -->
                                        <form action="<?= base_url() ?>pengguna/hapus_pengguna" method="POST" class="d-inline">
                                            <input type="hidden" name="id_user" value="<?= $item['id_user'] ?>">
                                            <button class="btn btn-sm btn-danger text-light tombol-hapus" type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>


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