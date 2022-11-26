<div class="min-height-300 bg-blue-dark position-absolute w-100"></div>

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="<?= site_url('admin/dashboard') ?>">
            <!-- <img src="<?= site_url() ?>assets/admin/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo"> -->
            <span class="ms-1 font-weight-bold text-lg text-bold text-center"><span class="logo-gradient text-3xl text-center">B </span>  &nbsp; Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2) == 'dashboard') ? 'active' : ''?>" href="<?= site_url('admin/dashboard') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house text-danger fs-6"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2) == 'kelas') ? 'active' : ''?>" href="<?= site_url('admin/kelas') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i> -->
                        <i class="fa-solid fa-book text-success fs-6"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2) == 'kategori') ? 'active' : ''?>" href="<?= site_url('admin/kategori') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="ni ni-credit-card text-success text-sm opacity-10"></i> -->
                        <i class="fa-solid fa-window-restore text-warning fs-6"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kategori</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Users</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2) == 'user') ? 'active' : ''?>" href="<?= site_url('admin/user') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-user-group text-dark fs-6"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2) == 'pengajar') ? 'active' : ''?>" href="<?= site_url('admin/pengajar') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-user-tie text-primary fs-6"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pengajar</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Transaksi</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2) == 'transaksi') ? 'active' : ''?>" href="<?= site_url('admin/transaksi') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-file-invoice text-warning fs-6"></i>
                    </div>
                    <span class="nav-link-text ms-1">Transaksi</span>
                </a>
            </li>

        </ul>
    </div>
</aside>