<?php $this->load->view('Wisata/Header'); ?>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3>
        Daftar Wisata Tuban
    </div>
<br>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
            <th>Nama Wisata</th>
            <th>Lokasi</th>
            <th>Tarif Tiket</th>
            <th>Tanggal di buka</th>
            <th>Gambar</th>
            <th>Update</th>
            <th>Delate</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $key) {?>
          <tr>
            <td><?= $key->nama?></td>
            <td><?= $key->lokasi?></td> 
            <td><?= $key->tarif?></td>
            <td><?php echo date('d-m-Y',strtotime($key->tanggal))?></td>
            <td><img src="<?php echo base_url('assets/gambar_wisata/').''.$key->gambar?>" alt="" width="100px" height= "100px" srcset=""></td>
            <td><a href="<?= site_url()?>/Wisata/Update/<?php echo $key->id ?>"><button stype="button" class="btn btn-warning" data-toggle="modal" ><i class="fas fa-wrench"></i></button></td>
            <td><a href="<?= site_url()?>/Wisata/Delete/<?php echo $key->id ?>"><button type="button" class="btn btn-danger" data-toggle="modal" ><i class="fas fa-trash-alt"></i></i></button></td>
          </tr>
          </tbody>
          <?php } ?>
          
        </table>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('Wisata/Footer'); ?>
