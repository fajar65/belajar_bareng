<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/templates/header') ?>
</head>
<body>
    <?php $this->load->view('admin/templates/sidebar') ?>
    
    <?php $this->load->view('admin/templates/navbar') ?>
    
    <?php $this->load->view($view) ?>
    
    <?php $this->load->view('admin/templates/footer') ?>
</body>
</html>