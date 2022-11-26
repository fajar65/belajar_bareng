<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ri-close-circle-line" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>



        <!-- new navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-blur blur py-3">
            <div class="container">
                <a href="<?= base_url() ?>">
                <span class="logo-white">
                    Belajar <br> <span class="logo-gradient">Bareng</span>
                </span>
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center pl-5" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item active pr-4 pl-5">
                            <a class="nav-link text-white" href="<?= base_url() ?>">Beranda</a>
                        </li>
                        <li class="nav-item submenu dropdown pr-4">
                            <a href="kategori.php" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="courses.html">Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="course-details.html">Bahasa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="course-details.html">IT dan Data</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown pr-4">
                            <a href="kelas.php" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelas</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="courses.html">Kelas Umum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="course-details.html">Kelas Prakerja</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <li class="nav-link">
                    <a href="<?= site_url('auth/login') ?>" class="btn-green-outline mb-3 mb-sm-0">Login</a>
                    <a href="<?= site_url('auth/daftar') ?>" class="btn-gradient mb-3 mb-sm-0">Daftar</a>
                    <!-- <a href="#" class="nav-link" id="search">
                        <i class="ri-search-2-line bg"></i>
                    </a> -->
                </li>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->