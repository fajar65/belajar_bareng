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



            <nav class="navbar navbar-expand-lg navbar-light bg-blur blur">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- <a class="navbar-brand logo_h" href="index.html"><img src="<?= base_url('assets/') ?>img/logo.png" alt="" /></a> -->
                    <span class="logo-white">
                        Belajar <br> <span class="logo-gradient">Bareng</span>
                    </span>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto justify-content-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="kategori.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori</a>
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
                            <li class="nav-item submenu dropdown">
                                <a href="kelas.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelas</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="courses.html">Kelas Umum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="course-details.html">Kelas Prakerja</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" style="color: #002333;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #002333;" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link search" id="search">
                                    <i class="ri-search-2-line" style="color: #002333;"></i>
                                </a>
                                <a href="<?= site_url('auth/login') ?>" class="btn-green-outline mb-3 mb-sm-0">Login</a>
                                <a href="<?= site_url('auth/daftar') ?>" class="btn-gradient mb-3 mb-sm-0">Daftar</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->