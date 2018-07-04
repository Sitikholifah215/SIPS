<?php $this->load->view('Surat/HeaderKonten'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">

            <?php $this->load->view('users/menu_user'); ?>
            
       
            <div class="col-md-10">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #303f9f;">
                        <i class="fas fa-envelope"></i>
                                Surat Masuk
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
                                                    <th>Nomer surat </th>
                                                    <th>Perihal</th>
                                                    <th>Pengirim</th>
                                                    <th>waktu</th>
                                                    <th>Keterangan</th>
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
                                                            <a href="#" class="btn btn-primary"><i class="fas fa-image"></i></a>
                                                            
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

