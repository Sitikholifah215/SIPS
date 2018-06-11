<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="<?php base_url('assets/css/datatables.min.css')?>"/>
    <!-- <link rel="stylesheet" href="<?php base_url('assets/css/bootstrap.min.css')?>"/> -->

    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/font-awesome-5/css/fontawesome-all.css">
</head>
<body>
    <!-- menu navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1a237e;">
        <a class="navbar-brand" href="<?= site_url('Surat')?>">
            <img src="./assets/gambar/icons8-magazine-64.png" height="45px" width="50px" alt="" srcset=""> 
            <!-- SISTEM INFORMASI PENGARSIPAN SURAT -->
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('Surat/Dashboard')?>">
                        <i class="fas fa-home" ></i>    Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Surat/Bantuan')?>">
                    <i class="fas fa-question-circle"></i> Bantuan          
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Surat/Aboutus')?>">
                        <i class="fab fa-audible"></i>  About us
        q             </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>