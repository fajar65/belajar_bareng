<body class="g-sidenav-show   bg-gray-100">

    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
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
                                        <th class="text-dark">Foto</th>
                                        <th class="text-dark">Username / Email</th>
                                        <th class="text-dark">Nama</th>
                                        <th class="text-dark">Created at</th>
                                        <th class="text-dark">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($user as $us) {
                                    ?>
                                        <tr>
                                            <td class="align-middle text-center"><?= $no++ ?></td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="<?= base_url('assets/admin') ?>/img/team-3.jpg" class="avatar avatar-lg me-2" alt="user1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h4 class="mb-0 text-lg"><?= $us->username ?></h4>
                                                    <p class="text-sm text-secondary mb-0"><?= $us->email ?></p>
                                                </div>
                                            </td>
                                            <td class="text-start"><?= $us->nama_user ?></td>
                                            <td class="align-middle text-start text-sm">
                                                <span class="text-secondary"><?= date('d - m - Y, H:i', strtotime($us->created_at)) ?></span>
                                            </td>
                                            <td class="align-middle">
                                                <!-- <a href="#" class="btn btn-group-sm btn-warning text-xs">
                                                    <i class="fa-solid fa-pencil text-xs"></i>
                                                    <span class="ms-1">Edit</span>
                                                </a> -->
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