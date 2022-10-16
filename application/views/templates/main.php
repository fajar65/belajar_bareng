<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/header') ?>
</head>

<body>
    <?php $this->load->view('templates/navbar') ?>

    <?php $this->load->view($view) ?>

    <?php $this->load->view('templates/footer') ?>
</body>

</html>