<?php $this->load->view('Surat/Header'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="card">
                    <div class="card-body center text-center">
                        <i class="far fa-user-circle fa-10x" ></i>
                        <h4 class="card-title">Selamat Datang </h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="#">
                               <i class="fas fa-envelope"></i>
                                Edit Profil
                            </a>
                        </li>
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
                        <div class="card-header" style="background-color: #ffeb3b;">
                            <i class="fas fa-envelope"></i> Surat
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                    <div class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="#modelId<?= $data['id_surat'] ?>">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"></h5>
                                            <small></small>
                                        </div>
                                        <p class="mb-1"</p>
                                    </div>
                            </div>
                            <br>
                            <!-- <a href="./data_surat.php"> -->
                                Lihat semua <i class="fas fa-arrow-alt-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

