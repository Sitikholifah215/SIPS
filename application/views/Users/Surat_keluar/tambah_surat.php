<?php $this->load->view('Surat/HeaderKonten'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">
        <?php $this->load->view('users/menu_user'); ?>

            <div class="col-md-10">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #303f9f;">
                            <i class="fas fa-envelope-open"></i>
                                Tambah Surat Keluar
                        </div>
                        <br>
                        <!-- Button trigger modal -->
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalInsertSurat">
                            <i class="fas fa-plus-square"></i> Tambah Data
                            </button>
                        </div>

                        <br>

                        <!-- Modal -->
                        <div class="modal fade" id="modalInsertSurat" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <form action="model/surat/insert_surat.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modelTitleId">Form tambah data</h4>
                                                <h4 class="modal-title" id="modelTitleId">Gambar</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="perihal" id="" aria-describedby="helpId" placeholder="Perihal">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="pengirim" id="" aria-describedby="helpId" placeholder="Pengirim">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nomor_surat" id="" aria-describedby="helpId" placeholder="Nomor Surat">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="lampiran" id="" aria-describedby="helpId" placeholder="Lampiran">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="waktu" id="" aria-describedby="helpId" value="<?= date('Y-m-d H:i:s') ?>">
                                                    <small id="fileHelpId" class="form-text text-danger">Tanggal surat Otomatis akan di update sesuai dengan jam upload</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file" name="gambar" id="" aria-describedby="fileHelpId">
                                                    <small id="fileHelpId" class="form-text text-danger">Klik Upload file untuk upload gambar surat</small>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="keterangan" id="" rows="3" placeholder="Keterangan"></textarea>
                                                </div>
                                                <input type="hidden" name="id_user" value="<?= $_SESSION['id'] ?><">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>


                        <div class="card-body">
                        <?php echo form_open_multipart('surat/create');?>
                        <?php echo validation_errors(); ?>
                        <?php  if(isset($error)){echo $error;} ?>
                        <div class="form-group">
                            <h5>Perihal</h5>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Organisasi">
                            <h5>Pengirim</h5>
                            <input type="text" name="nip" class="form-control" id="username" placeholder="Username">
                            <h5>Nomer Surat</h5>
                            <input type="date" name="tanggal" class="form-control" id="passwordl" placeholder="Password">
                            <h5>Waktu</h5>
                            <input type="date" class="form-control" name="waktu" id="waktu"  value="<?= date('Y-m-d H:i:s') ?>">
                            <h5>Foto</h5>
                            <input type="file" class="form-control-file" name="gambar" id="" aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-danger">Klik Upload file untuk upload gambar surat</small>
                            <h5>Keterangan</h5>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Organisasi">

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