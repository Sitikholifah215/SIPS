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
                            <i class="fas fa-users"></i> Tambah User
                        </div>
                        <div class="card-body">
                        <?php echo form_open_multipart('surat/create');?>
                        <?php echo validation_errors(); ?>
                        <?php  if(isset($error)){echo $error;} ?>
                        <div class="form-group">
                            <h5>Nama Organisasi</h5>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Organisasi">
                            <h5>Username</h5>
                            <input type="text" name="nip" class="form-control" id="username" placeholder="Username">
                            <h5>Password</h5>
                            <input type="date" name="tanggal" class="form-control" id="passwordl" placeholder="Password">
                            <h5>Level</h5>
                                <select name="level" id="level" class="form-control" style="height: 40px; width: 190px;">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>

                            <h5>Foto</h5>
                            <input type="file" name="userfile" class="form-control" id="foto" >

                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
  </div>

<?php $this->load->view('Surat/footer'); ?>