<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Famie - Farm Services &amp; Organic Food Store Template | Contact</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>/cssfarmie/img/core-img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/cssfarmie/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/artikel.css" type="text/css">
  <style type="text/css">

  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
<?php $this->load->view('header/HeaderFution') ?>


<div class="container kertas">
  <div class="row">
    <div class="col-md-12">
      <?php foreach ($data_tempat as $key) {?>
        <h1 align="center"><?php echo $key->nama; ?></h1>
          <img align="center" src=<?=base_url("assets/upload")."/".$key->foto?> class="gambar">
          <br><br>
            <p class="isi"><?php echo $key->penjelasan; ?></p>
      <?php  } ?>
    </div>
  </div>
</div>




<?php $this->load->view('header/footerFuction') ?>
  <!-- ##### Footer Area End ##### -->


</body>

</html>
