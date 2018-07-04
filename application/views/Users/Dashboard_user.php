<?php $this->load->view('Surat/HeaderKonten'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">

        <?php $this->load->view('users/menu_user'); ?>
        
            <div class="col-md-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #303f9f;">
                        <i class="fas fa-envelope"></i>
                                Surat Masuk
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
                        <i class="fas fa-envelope-open"></i>
                                Surat Keluar
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