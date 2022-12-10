<body>
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area bg-blue-dark" id="home">
        <div class="banner_inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 justify-content-center">
                        <div class="banner_content text-center">
                            <h1 class="font-weight-bolder mt-5 mb-4">
                                Mari Belajar Hal Baru yang Kamu <br> Inginkan di <span class="logo-gradient"> Belajar Bareng</span>
                            </h1>
                            <span class="mt-4 mb-4">
                                Temukan pengetahuan baru, teman baru dan belajar <br> pengalaman dengan mentor dan pengajar <br> yang berpengalaman
                            </span>
                            <div class="searchbar mt-4">
                                <div class="searchbar-wrapper">
                                    <form class="d-flex" role="search" method="GET" action="<?= base_url('kelas/resultSearch') ?>">
                                        <div class="searchbar-center">
                                            <div class="searchbar-input-spacer"></div>
                                            <input type="text" name="cari" id="cari" class="searchbar-input" maxlength="2048" name="q" autocapitalize="off" autocomplete="off" title="Search" role="combobox" placeholder="Mau cari kela apa?">
                                        </div>
                                        <button type="submit" name="search" id="search" style="background-color: transparent;">
                                            <div class="searchbar-right">
                                                <i class="ri-search-2-line"></i>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="<?= base_url('assets/img/img-header-kelas.png') ?>" class="img-fluid mt-4" alt="...">
                </div>
            </div>
        </div>

    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top" id="kelas_populer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Kelas Populer</h2>
                        <p>
                            Temukan dan pelajari kelas yang sedang populer saat ini untuk meningkatkan skill
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        <?php
                        foreach ($kelasPopuler as $kl) {
                        ?>
                            <div class="single_course rounded" style="border-radius: 20px;">
                                <a href="<?= site_url('detailkelas/detailKelas/' . $kl->id_kelas) ?>">
                                    <div class="course_head rounded radius1">
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
                                        <h4 class="mb-2 text-bolder">
                                            <a href="<?= site_url('detailkelas/detailKelas/' . $kl->id_kelas) ?>"><?= character_limiter($kl->nama_kelas, 40) ?></a>
                                        </h4>
                                        <p class="mb-3"><?= character_limiter($kl->deskripsi, 50) ?></p>
                                        <h3 class="text-bold text-purple">Rp.<?= number_format($kl->harga_kelas, 0, '', '.') ?></h3>
                                            <!-- <a href="<?= site_url('DetailKelas') ?>" class="btn btn-green">Detail</a> -->
                                            <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                <div class="mt-lg-0 mt-3">
                                                    <span class="meta_info mr-4">
                                                        <a href="#">
                                                            <i class="ri-star-fill text-yellow"></i>
                                                            5.0
                                                        </a>
                                                    </span>
                                                    <span class="meta_info"><a href="#"> Terjual 35 </a></span>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <center>
                <a href="<?= site_url('kelas') ?>" class=" btn-blue-outline align-items-center text-dark">Lihat semua &nbsp;
                    <i class="ri-arrow-right-line text-center"></i>
                </a>
            </center>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Section Learning Area =================-->
    <div class="section_gap section-learning">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- <div class="register_form"> -->
                    <img class="mb-4 img-fluid" src="<?= base_url('assets/') ?>img/banner/img-section-belajar.png" alt="img-banner-belajar">
                    </form>
                    <!-- </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 class="mb-3 text-dark">Belajar Dimana Saja
                                dan Kapan Saja
                                😊</h1>
                            <p class="text-dark mb-4">
                                Kebebasan dalam belajar tidak
                                menjadi penghalang, karena akses
                                kelas dapat diikuti kapan saja dan selamanya
                            </p>
                        </div>
                        <a href="<?= site_url('kelas') ?>" class="btn btn-green">Lihat Kelas</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Section Learning Area =================-->
    <div class="section_gap section-mentor">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-10">
                            <h1 class="mb-3 text-light">Belajar Dari Pengajar
                                yang Berpengalaman</h1>
                            <p class="text-light mb-4">
                                Belajar secara terarah dengan mentor yang berpengalaman dan ahli dalam masing-masing bidangnya
                            </p>
                        </div>
                        <a href="<?= site_url('pengajar') ?>" class="btn btn-blue">Lihat Pengajar</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="register_form"> -->
                    <img class="mt-4 img-fluid" src="<?= base_url('assets/') ?>img/banner/img-section-mentor.png" alt="img-banner-belajar">
                    </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--================ End Registration Area =================-->

    <a href="#" class="back-to-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </a>