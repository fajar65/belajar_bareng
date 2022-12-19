<body>
    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
        <div class="container">
            <div class="container-banner">
                <img class="img-banner-class img-fluid" src="<?= base_url('assets/') ?>img/banner/img-banner.jpg" alt="img-banner-class">
                <div class="main_title centered align-items-center text-center p-4">
                    <h2 class="mb-3 title-kelas bg-green" style="color: #00FF84;">Kelas Umum</h2>
                    <p>
                        Temukan dan pelajari kelas yang sedang populer saat ini untuk meningkatkan skill
                    </p>
                </div>
            </div>

            <!-- <div class="container"> -->
            <div class="justify-content-between mb-4">
                <div class="row align-content-center align-items-center">
                    <div class="col">
                        <h4>Daftar Kelas</h4>
                    </div>
                    <!-- <div class="col"> -->
                    <div class="col-lg-4">
                        <!-- <h4>Cari Kelas</h4> -->
                        <form class="d-flex" role="search" method="GET" action="<?= base_url('kelas/resultSearch') ?>">
                            <input name="cari" id="cari" class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" required>
                            <button class="btn btn-dark" type="submit" name="search" id="search">Search</button>
                        </form>
                        <!-- </div> -->
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                            <div class="row align-items-center">
                                <h4 class="mr-3">Urutkan</h4>
                                <select class="form-select col-lg-5" name="" id="">
                                    <option value="terbaru" selected>Terbaru</option>
                                    <option value="termurah">Termurah</option>
                                </select>
                            </div>
                        </div> -->
                </div>
            </div>
            <!-- </div> -->
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <!-- <div class="owl-carousel active_course"> -->
                    <div class="row">
                        <?php
                        if (!empty($kelas)) {
                            foreach ($kelas as $kl) {
                        ?>
                                <a href="<?= site_url('detailkelas/detailKelas/' . $kl->id_kelas) ?>">
                                    <div class="single_course rounded col-md-3 mb-4" style="border-radius: 20px;">
                                        <div class="course_head rounded radius1 mt-3">
                                            <img class="img-fluid rounded radius1" src="<?= base_url('assets/') ?>img/courses/thumbnail-ui-ux.jpg" alt="" />
                                        </div>
                                        <div class="course_content">
                                            <!-- <span class="price"><?= number_format($kl->harga_kelas) ?></span> -->
                                            <span class="mb-4 d-inline-block">
                                                <?php
                                                if ($kl->nama_kategori == 'Marketing') {
                                                    $bg_color = 'bg-success';
                                                } elseif ($kl->nama_kategori == 'Bahasa') {
                                                    $bg_color = 'bg-info';
                                                } elseif ($kl->nama_kategori == 'IT dan Data') {
                                                    $bg_color = 'bg-warning';
                                                }
                                                ?>
                                                <p class="d-inline-block tag <?= $bg_color ?>">
                                                    <?= $kl->nama_kategori ?>
                                                </p>
                                            </span>
                                            <h5 class="mb-2 text-bolder">
                                                <a href="<?= site_url('detailkelas/detailKelas/' . $kl->id_kelas) ?>"><?= character_limiter($kl->nama_kelas, 30) ?></a>
                                            </h5>
                                            <p class="mb-3 desc"><?= character_limiter($kl->deskripsi, 40) ?></p>
                                            <h4 class="text-bold text-bolder text-purple price-class">
                                                Rp.<?= number_format($kl->harga_kelas, 0, '', '.') ?>
                                            </h4>
                                            <!-- <a href="<?= site_url('DetailKelas') ?>" class="btn btn-green">Detail</a> -->
                                            <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                <div class="mt-lg-0 mt-3">
                                                    <span class="meta_info mr-4">
                                                        <a href="#">
                                                            <i class="ri-star-fill text-yellow"></i>
                                                            5.0
                                                        </a>
                                                    </span>
                                                    <!-- <span class="meta_info"><a href="#"> Terjual 35 </a></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php }
                        } else { ?>
                            <div class="container align-items-center text-center align-content-center">
                                <img class="img-fluid" src="<?= base_url('assets/') ?>img/img-empty.png" alt="img-empty">
                                <h4 class='text-dark mb-4'>Data kelas tidak ditemukan, <br> mohon cari dengan kata lain !</h4>
                                <a href="javascript:window:history.go(-1);" class=" btn btn-blue">Cari Kelas Lagi</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--================ End Popular Courses Area =================-->