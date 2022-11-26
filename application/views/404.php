<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" />

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <center>
        <div class="wrapper">
            <div class="content-wrapper d-flex justify-content-center align-items-center bg-transparent m-0">
                <section class="content">
                    <div class="error-page m-0">
                        <lottie-player src="<?= base_url('assets/img/94905-404-not-found.json') ?>" background="transparent" speed="2" style="width: 400px; height: 300px;" loop autoplay></lottie-player>
                        <!-- <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_zyu0ctqb.json" background="transparent" speed="1" style="width: 600px; height: 300px;" loop autoplay></lottie-player> -->
                        <h2 class="headline float-none text-purple"> 404</h2>
                        <div class="error-content m-0">
                            <h3><i class="fas fa-exclamation-triangle text-purple"></i> Oops! Page not found.</h3>
                            <p class="m-0">
                                <a href="javascript:window:history.go(-1);" class="btn-gradient">return to index</a>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </center>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>