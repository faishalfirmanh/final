<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('header/Header_admin_view'); ?>
    <meta charset="utf-8">
    <style type="text/css">
    #map {
     height: 100%;
   }
   /* Optional: Makes the sample page fill the window. */
   html, body {
     height: 100%;
     margin: 0;
     padding:0;
   }
    </style>
    <title>List</title>
  </head>
  <body>
      <?php
        $no = $this->uri->segment('3') + 1;
        foreach ($data_tempat as $key) { ?>
        <div class="card">
          <div class="card-body">
            <div>
            <div class="" align="center">
              <img src=<?=base_url("assets/upload")."/".$key->foto?> class="gambar">
            </div>
            <h5 class="card-title"><?php echo $key->nama; ?></h5>
            <p class="card-text"><?php echo word_limiter ($key->penjelasan,4); ?></p>
            <div class="" align="center">
              <a href="<?=site_url()?>/TempatWisataCont/Update/<?php echo $key->id ?>" type="Button" align="center" class="btn btn-primary" align="center">edit</a>
              <a href="<?=site_url()?>/TempatWisataCont/hapus/<?php echo $key->id ?>" type="Button" class="btn btn-danger" align="center">hapus</a>
            </div>
          </div>
          </div>
        </div>

        <?php } ?>
        <?php
    echo $this->pagination->create_links();
    ?>



  </body>
  <?php $this->load->view('header/FooterViewAdmin') ?>
</html>
