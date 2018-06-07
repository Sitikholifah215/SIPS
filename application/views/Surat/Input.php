<?php $this->load->view('Wisata/Header'); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
<div class="container">
    <div class = "row">
        <!-- form ini masuk ke controller bernama Wisata function create -->
    <?php echo form_open_multipart('Wisata/Create');?>
    <legend><h3></h3>Input Data Wisata Tuban</h3></legend>
    <?php echo validation_errors(); ?>
    <?php  if(isset($error)){echo $error;} ?>

   <div class="form-group" style="width:430px">
     <br><label for="nama">Nama Wisata</label>
     <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Wisata"  aria-describedby="helpId"><br>
     
     <label for="lokasi">Lokasi</label><br>
     <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Lokasi" aria-describedby="helpId"><br>
     
     <label for="tarif">Tarif</label>
     <input type="number" name="tarif" id="tarif" class="form-control" placeholder="Harga Tiket" aria-describedby="helpId">
     <small id="helpId" class="form-text text-primary">*) Dalam Rupiah</small><br>

     <label for="tanggal">Tanggal dibuka</label>
     <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="" aria-describedby="helpId"><br>

                 
     <input type="file" class="form-control-file" name="gambar" id="gambar" aria-describedby="fileHelpId">
     <small id="fileHelpId" class="form-text text-primary">Klik Upload file untuk upload gambar wisata</small><br><br>
   
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>   
</div>


<?php 
 $this->load->view('Wisata/Footer'); 
?>