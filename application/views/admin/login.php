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
    <link rel="stylesheet" href="<?= base_url('assets/vendors/remix-icon/css/remixicon.css') ?>" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/admin') ?>/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
</head>

<body class="">

    <main class="main-content  mt-0 bg-blue-dark">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain bg-white">
                                <div class="card-header pb-0 text-start">
                                    <center>
                                        <span class="logo-white text-dark text-center mb-4">
                                            Belajar <br> <span class="logo-gradient">Bareng</span>
                                        </span>
                                    </center>
                                    <?php if ($this->session->flashdata('success')) { ?>
                                        <div class="alert alert-success my-4 text-white fadeOut"><?= $this->session->flashdata('success') ?></div>
                                    <?php } elseif ($this->session->flashdata('error')) { ?>
                                        <div class="alert alert-danger alert-dismissible alert-message my-4 text-white fadeOut" role="alert"><?= $this->session->flashdata('error') ?></div>
                                    <?php } ?>
                                    <div class="row col-12">
                                        <a href="<?= site_url('') ?>">
                                            <i class="ri-arrow-left-line text-2xl text-lg text-dark"></i>
                                        </a>
                                        <h4 class="font-weight-bolder mt-4">Login</h4>
                                    </div>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" action="<?= site_url('admin/login/ceklogin') ?>" method="POST">
                                        <div class="mb-3">
                                            <label class="form-check-label" for="">Username</label>
                                            <input type="text" name="username" class="form-control form-control-lg rounded-3" placeholder="Username" aria-label="Username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-check-label" for="">Password</label>
                                            <input type="password" name="password" class="form-control form-control-lg rounded-3" placeholder="Password" aria-label="Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-lg btn-gradient btn-lg w-100 h-auto mt-4 mb-0">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {

            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>