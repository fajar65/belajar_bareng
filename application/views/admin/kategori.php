<body class="g-sidenav-show   bg-gray-100">

    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <a href="<?= site_url('admin/kategori/add') ?>" class="btn-gradient mb-3 mb-sm-4">
            <i class="fa-solid fa-add me-2"></i> Tambah <?= $title ?>
        </a>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
        <?php } elseif ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
        <?php } ?>
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
                                        <th class="text-dark">Nama Kategori</th>
                                        <th class="text-dark">Deskripsi</th>
                                        <th class="text-dark">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kategori as $kt) {
                                    ?>
                                        <tr>
                                            <td class="align-middle text-center"><?= $no++ ?></td>
                                            <td>
                                                <span><?= $kt->nama_kategori ?></span>
                                            </td>
                                            <td class="align-middle text-start text-sm">
                                                <span class="text-dark"><?= character_limiter($kt->deskripsi, 50) ?></span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="btn btn-group-sm btn-warning text-xs">
                                                    <i class="fa-solid fa-pencil text-xs"></i>
                                                    <span class="ms-1">Edit</span>
                                                </a>
                                                <a href="<?= site_url('admin/kategori/hapus/'.$kt->id_kategori) ?>" onclick="return confirm('Yakin ingin hapus kategori ?')" class="btn btn-group-sm btn-danger text-xs">
                                                <!-- <a href="" class="btn btn-group-sm btn-danger text-xs"> -->
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