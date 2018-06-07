<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-5/css/fontawesome-all.css')?>">

    <script src="<?= base_url('assets/js/jquery-3.1.min.js')?>"></script> 
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/js/poopper.min.js') ?>"></script>
</head>
<body>
    <!-- menu navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #18ffff;">
        <a class="navbar-brand" href="<?= site_url('Wisata')?>">
            <img src="<?= base_url('assets/gambar/48ea8-logobookgreen.png') ?>" alt="">
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('Wisata/Create')?>">
                        <i class="fas fa-keyboard"></i>Input <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Wisata/Maintenance')?>">
                        <i class="fas fa-edit"></i>Maintenence
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Wisata/Aboutus')?>">
                        <i class="fab fa-audible"></i>About us
                    </a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
</body>
</html>