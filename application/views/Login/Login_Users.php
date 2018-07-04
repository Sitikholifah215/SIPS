<?php $this->load->view('Surat/Header'); ?>

<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<body class="loginBackground">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="white">
                        Selamat Datang di SISTEM PENGARSIPAN SURAT :D 
                    </h1>       
                </div>
                <div class="col-md-6 justify-content-md-center">
                    <form action="<?php echo base_url('Users/Login') ?>" method="post">
                        <div class="form-group">
                            <label class="white" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label class="white" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
                        </div>
                        <button type="submit" name="btn" id="" class="btn btn-primary btn-lg btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<?php $this->load->view('Surat/Footer'); ?>
