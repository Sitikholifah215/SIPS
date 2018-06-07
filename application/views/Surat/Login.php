<?php $this->load->view('Surat/Header'); ?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <form action="" method="post">
                <div class="form-group">
                  <label for="username"></label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-describedby="helpId">
                  <small id="username" class="text-muted">Username</small>
                </div>
                <div class="form-group">
                  <label for=""></label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
                  <small id="password" class="text-muted">Password</small>
                </div>
                <button type="submit" name="btn" id="" class="btn btn-success btn-lg btn-block">Login</button>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('Surat/Footer'); ?>
