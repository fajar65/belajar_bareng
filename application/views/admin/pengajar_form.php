<div class="container-fluid py-4">
    <a href="<?= site_url('admin/pengajar') ?>" class="btn-green">
        <i class="ri ri-arrow-left-fill pr-2"></i>&nbsp;
        Kembali
    </a>
    <div class="row">
        <div class="col-md-12">
            <div class="card my-3">
                <div class="card-body">
                    <h3 class="text-dark">Form <?= $title ?></h3>
                    <!-- <h2 class="text-uppercase text-lg mb-3">Pengajar</h2> -->
                    <?php if ($this->uri->segment(3) == 'add') { ?>
                        <?php echo form_open_multipart('admin/pengajar/insert'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Pengajar</label>
                                    <input class="form-control" name="nama_pengajar" type="text" value="" placeholder="Masukkan nama pengajar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kelas</label>
                                    <select class="form-control" name="id_kelas" id="">
                                        <?php
                                        foreach ($kelas as $kl) {
                                        ?>
                                            <option value="<?= $kl->id_kelas ?>"><?= $kl->nama_kelas ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <hr class="horizontal dark"> -->
                        <p class="text-uppercase text-sm">Deskripsi</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Thumbnail Kelas</label>
                                    <input class="form-control" name="image" type="file" value="" placeholder="Masukkan thumbnail">
                                    <small class="badge bg-danger mt-3">
                                        Format PNG , JPG, JPEG &nbsp Max. 2 mb
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Deskripsi Kelas</label>
                                    <textarea name="deskripsi" class="form-control" id="" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <center>
                            <div class="row d-flex align-content-center align-items-center">
                                <div class="col-md-1">
                                    <button type="reset" class=" btn-blue-outline">Reset</button>
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class=" btn-gradient">Tambah</button>
                                </div>
                            </div>
                        </center>
                        <hr class="horizontal dark">
                        <?php echo form_close(); ?>

                    <?php } elseif ($this->uri->segment(3) == 'edit') { ?>

                        <?php foreach ($pengajar as $pj) ?>

                        <form action="<?= site_url('admin/pengajar/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_pengajar" value="<?= $pj->id_pengajar ?>" required>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Pengajar</label>
                                        <input class="form-control" name="nama_pengajar" type="text" value="<?= $pj->nama_pengajar ?>" placeholder="Masukkan nama pengajar">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kelas</label>
                                        <select class="form-control" name="id_kelas" id="">
                                            <?php
                                            foreach ($pengajar2 as $kl) {
                                            ?>
                                                <option value="<?= $kl->id_kelas ?>"><?= $kl->nama_kelas ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <hr class="horizontal dark"> -->
                            <p class="text-uppercase text-sm">Deskripsi</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Foto</label>
                                        <img class="avatar mb-2" src="<?= base_url('./assets/admin/uploads/pengajar/' . $pj->image) ?>" width="120">
                                        <input class="form-control" name="image" type="file" placeholder="Masukkan thumbnail">
                                        <small class="badge bg-danger mt-3">
                                            Format PNG , JPG, JPEG &nbsp Max. 2 mb
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Deskripsi Kelas</label>
                                        <input class="form-control" name="deskripsi" type="text" value="<?= $pj->deskripsi ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <center>
                                <div class="row d-flex align-content-center align-items-center">
                                    <div class="col-md-1">
                                        <button type="reset" class=" btn-blue-outline">Reset</button>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" class=" btn-gradient">Update</button>
                                    </div>
                                </div>
                            </center>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>