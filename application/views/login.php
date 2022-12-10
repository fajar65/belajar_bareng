<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/admin') ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets/admin') ?>/img/favicon.png">
    <title>
        <?= $title ?>
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/admin') ?>/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin') ?>/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets/admin') ?>/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/admin') ?>/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/remixicon.css" />

    <link rel="stylesheet" href="<?= base_url('assets/vendors/remix-icon/css/remixicon.css') ?>" />
    <!-- boxicons -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/icons/boxicons-2.1.1/css/boxicons.min.css" />

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" />
</head>

<body class="">
    <!-- <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div> -->
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100 bg-blue-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden bg-login" style="background-image: url('assets/img/auth/img-login.jpg'); background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-4">
                                    <img class="img-fluid bg-cover" src="<?= base_url('assets/img/auth/img_login.jpg') ?>" alt="img-login">
                                </span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Login dengan akun kamu"</h4>
                                <p class="text-white position-relative">Dan temukan kelas yang kamu inginkan sekarang juga</p>
                            </div>
                        </div>
                        <div class="col-xl-4 justify-content-center col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card pb-0 p-5 text-start">
                                    <?php if ($this->session->flashdata('success')) { ?>
                                        <div class="alert alert-success text-light"><?= $this->session->flashdata('success') ?></div>
                                    <?php } elseif ($this->session->flashdata('error')) { ?>
                                        <div class="alert alert-danger text-light"><?= $this->session->flashdata('error') ?></div>
                                    <?php } ?>
                                    <div class="col">
                                        <a href="<?= base_url() ?>">
                                            <h2 class="ri-arrow-left-s-line"></h2>
                                        </a>
                                        <h2 class="font-weight-bolder">Login</h2>
                                    </div>
                                    <p class="mb-0">Masukkan email dan password kamu yang valid</p>
                                    <!-- <div class="card-body"> -->
                                    <form role="form" class="form mt-4" action="<?= base_url('auth/ceklogin') ?>" method="POST">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class=" form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
                                        </div>
                                        <div class="justify-content-end">
                                            <a href="#" class="nav-link text-end">Lupa password?</a>
                                        </div>
                                        <div class="text-center">
                                            <!-- <button type="submit" class="btn-green w-100 mt-4 mb-3">Login</button> -->
                                            <button type="submit" class="btn-green w-100 mt-4 mb-2" name="login">Login</button>
                                        </div>
                                        <div class="text-center row row-cols-2 btn-green-outline w-100 text-center mb-4">
                                            <i class="ri-google-fill text-lg-center text-dark"></i>
                                            <!-- <img class="text" src="<?= base_url('assets/img/auth/google.png') ?>" height="24" width="24" alt="logo-google" srcset=""> -->
                                            <a href="#" class="text-center">Login with Google</a>
                                        </div>
                                    </form>
                                    <!-- </div> -->
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-4 text-sm mx-auto">
                                            Belum punya akun ?
                                            <a href="<?= site_url('auth/daftar') ?>" class="text-primary text-gradient font-weight-bold">Daftar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/admin') ?>/js/core/popper.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/admin') ?>/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>