<section class=" section_gap bg-blue-dongker">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3 text-green">Daftar Pengajar</h2>
                    <p>
                        Belajar secara terarah dengan mentor yang berpengalaman dan ahli dalam masing-masing bidangnya
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single course -->
            <div class="col-lg-12">
                <!-- <div class="owl-carousel active_course"> -->
                <div class="row">
                    <?php
                    if (!empty($pengajar)) {
                        foreach ($pengajar as $pj) {
                    ?>
                            <div class="single_course rounded col-md-3 mb-4" style="border-radius: 20px;">
                                <div class="course_head rounded bg-light radius1 mt-3 content-team">
                                    <img class=" m-4" src="<?= base_url('assets/admin/uploads/pengajar/' . $pj->image) ?>" alt="img-pengajar" />
                                </div>
                                <div class="course_content rounded">
                                    <h5 class="mb-2 text-bolder text-center">
                                        <a href="<?= site_url('detailkelas/detailKelas/' . $pj->id_kelas) ?>"><?= character_limiter($pj->nama_pengajar, 30) ?></a>
                                    </h5>
                                    <p class="mb-3 desc text-center"><?= character_limiter($pj->deskripsi, 40) ?></p>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <div class="container align-items-center text-center align-content-center">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>img/img-empty.png" alt="img-empty">
                            <h4 class='text-dark mb-4'>Belum ada mentor !</h4>
                            <a href="javascript:window:history.go(-1);" class=" btn btn-blue">Kembali</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>