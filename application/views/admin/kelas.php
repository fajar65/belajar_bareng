<body class="g-sidenav-show   bg-gray-100">

    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <a href="#" class="btn-gradient mb-3 mb-sm-4">
            <i class="fa-solid fa-add me-2"></i> Tambah <?= $title ?>
        </a>
        <!-- <a href="#" class="btn-group-lg btn-green-2 mb-3 my-4">
            <i class="fa-solid fa-add me-2"></i> Tambah <?= $title ?>
        </a> -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data <?= $title ?></h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-dark text-center">No</th>
                                        <th class="text-dark">Gambar</th>
                                        <th class="text-dark">Judul</th>
                                        <th class="text-dark">Harga</th>
                                        <th class="text-dark">Kategori</th>
                                        <th class="text-dark">Deskripsi</th>
                                        <th class="text-dark">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kelas as $kls) {
                                    ?>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <?= $no++; ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="<?= base_url('assets/admin') ?>/img/team-3.jpg" class="img-thumbnail avatar-xxl me-3 bg-cover" alt="img-thumbnail">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span><?= character_limiter($kls->nama_kelas, 18) ?></span>
                                            </td>
                                            <td>
                                                <span class="text-bold">Rp. <?= number_format($kls->harga_kelas, 0, ",", ".") ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php
                                                if ($kls->nama_kategori == 'Marketing') {
                                                    $bg_color = 'bg-gradient-success';
                                                } elseif ($kls->nama_kategori == 'Bahasa') {
                                                    $bg_color = 'bg-gradient-info';
                                                } elseif ($kls->nama_kategori == 'IT dan Data') {
                                                    $bg_color = 'bg-gradient-warning';
                                                }
                                                ?>
                                                <span class="badge badge-sm <?= $bg_color ?>"><?= $kls->nama_kategori ?></span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="text-secondary"><?= character_limiter($kls->deskripsi, 15) ?></span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="btn btn-group-sm btn-warning text-xs">
                                                    <i class="fa-solid fa-pencil text-xs"></i>
                                                    <span class="ms-1">Edit</span>
                                                </a>
                                                <a href="#" class="btn btn-group-sm btn-danger text-xs">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span class="ms-1">Hapus</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>