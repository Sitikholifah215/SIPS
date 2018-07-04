<?php $this->load->view('Surat/HeaderKonten'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="card">
                <div class="card-header" style="background-color: #303f9f;">
                <i class="fas fa-bars"></i></i> Menu
                        </div>
                    <div class="card-body center text-center">
                        <i class="far fa-user-circle fa-10x" ></i>
                        <h4 class="card-title">Selamat Datang </h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="#">
                            <i class="fas fa-user"></i>
                                Edit Profil
                            </a>
                        </li>
                        <!-- <li class="list-group-item">
                            <a href="#">
                            <i class="fas fa-user"></i>
                                Tambah user
                            </a>
                        </li> -->
                        <li class="list-group-item">
                            <a href="#">
                                <i class="fas fa-users"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
       
            <div class="col-md-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #303f9f;">
                            <i class="fas fa-users"></i> Organisasi/Komunitas
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                    <div class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"></h5>
                                            <small></small>
                                        </div>
                                        <p class="mb-1"</p>
                                    </div>
                            </div>
                            <br>
                            <a href="./admin/data_organisasi.php">
                                Lihat semua <i class="fas fa-arrow-alt-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-md-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #303f9f;">
                        <i class="fas fa-user-plus"></i> Admin
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                    <div class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"></h5>
                                            <small></small>
                                        </div>
                                        <p class="mb-1"</p>
                                    </div>
                            </div>
                            <br>
                            <a href="<?php base_url('users')?>">
                                Lihat semua <i class="fas fa-arrow-alt-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

<?php $this->load->view('Surat/Footer'); ?>