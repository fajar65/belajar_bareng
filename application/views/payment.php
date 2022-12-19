<section class="course_details_area section_gap">
<div class="container">
    <?php
    foreach($detailKelas as $kl){
    ?>
    <div class="col-lg-4 right-contents">
        <div class="single_course rounded mb-4" style="border-radius: 20px;">
            <div class="course_head rounded radius1 mt-3">
                <img class="img-fluid rounded radius1" src="<?= base_url('assets/') ?>img/courses/thumbnail-ui-ux.jpg" alt="" />
            </div>
            <div class="course_content">
                <span class="mb-4 d-inline-block">
                    <p class="d-inline-block tag bg-primary">
                        Marketing
                    </p>
                </span>
                <h5 class="mb-2 text-bolder">
                    <?= $kl->nama_kelas ?>
                </h5>
                <!-- <p class="mb-3 desc"><?= character_limiter($kl->deskripsi, 100) ?></p> -->
                <h4 class="text-bold text-bolder text-purple price-class mb-4">
                    Rp. <?= number_format($kl->harga_kelas, 0, '', '.') ?>
                </h4>
            </div>
        </div>
        <!-- <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-dark">Enroll the course</a> -->
    </div>
    <?php } ?>
</div>
</section>