<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('header/Header_admin_view'); ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php foreach ($data_tempat as $key) { ?>
        <div class="card" style="width: 28rem;" >
          <div class="card-body">
            <div class="" align="center">
              <img src=<?=base_url("assets/upload")."/".$key->foto?>>
            </div>
            <h5 class="card-title"><?php echo $key->nama; ?></h5>
            <p class="card-text"><?php echo word_limiter ($key->penjelasan,4); ?></p>
            <div class="" align="center">
              <a href="<?=site_url()?>/TempatWisataCont/Update/<?php echo $key->id ?>" type="Button" align="center" class="btn btn-primary" align="center">edit</a>
              <a href="<?=site_url()?>/TempatWisataCont/hapus/<?php echo $key->id ?>" type="Button" class="btn btn-danger" align="center">hapus</a>
              <a href="<?=site_url()?>/TempatWisataCont/peta/<?php echo $key->id ?>" type="Button" class="btn btn-success" align="center">Peta</a>
            </div>
          </div>
        </div>
        <br> <?php } ?>
  </body>
  <?php $this->load->view('header/FooterViewAdmin') ?>
</html>
