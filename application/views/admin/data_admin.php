<?php $this->load->view('Surat/HeaderKonten'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="card">
                <div class="card-header" style="background-color: #303f9f;">
                            <i class="fas fa-envelope"></i> Menu
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
                        <li class="list-group-item">
                            <a href="#">
                                <i class="fas fa-users"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
       
            <div class="col-md-10">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #303f9f;">
                        <i class="fas fa-user-plus"></i> Admin
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalInsertSurat">
                                            <i class="fas fa-plus-square"></i> Tambah Data User
                                        </button>
                                     </div>    
                                    <div>
                                        <table id="dataadmin" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No. </th>
                                                    <th>Nama Organisasi</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Foto</th>
                                                    <!-- dipilihan sini ada icon hapus,edit,details -->
                                                    <th>Pilihan</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <!-- disini ada foreach -->
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>
                                                        <div class="btn-group" role="group" aria-label="">
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#"><i class="fas fa-edit"></i></button>
                                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                            <a href="#" class="btn btn-secondary"><i class="fas fa-info"></i></a>
                                                        </div>
                                                    </th>
                                                    

                                                    
                                                
                                                </tr>
                                                </tbody>
                                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
  </div>

