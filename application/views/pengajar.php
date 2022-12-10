<section class=" section_gap bg-blue-dongker">
    <div class="container">
        <section id="team">
            <div class="main_title">
                <h2 class="my-3 text-green">Pengajar</h2>
                <p>
                Belajar secara terarah dengan mentor yang berpengalaman <br> dan ahli dalam masing-masing bidangnya
                </p>
            </div>
            <div class="container-team">
                <?php
                foreach ($pengajar as $pr) {
                ?>
                    <div class="box">
                        <div class="top-bar"></div>
                        <div class="content-team">
                            <img src="<?= base_url('assets/admin/uploads/pengajar/' . $pr->image) ?>" alt="img-pengajar">
                            <strong class="text-limit-title"><?= $pr->nama_pengajar ?>
                                <i class="ri-checkbox-circle-fill" style="color: #2FCC71;"></i>
                            </strong>
                            <p class="text-limit-title"><?= character_limiter($pr->deskripsi, 30) ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </section>
    </div>
</section>