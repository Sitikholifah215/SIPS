<?php $this->load->view('Wisata/Header'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="FaberNainggolan">
    <title>CodeIgniter dengan Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-5/css/fontawesome-all.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery-3..1.min.js')?>"></script> 
</head>

<body>
    <div class="alert alert-success" >
    <strong>Data Berhasil diUpdate</strong>
    <?php
    echo anchor('Wisata/index','lihat data wisata');
    ?>
    </div>
</body>
</html>


<?php $this->load->view('Wisata/Footer'); ?>