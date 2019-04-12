<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php $this->load->view('header/HeaderUser') ?>
  </head>
  <body>
  <?php foreach ($data_tempat as $key) {?>
<?php echo $key->nama; ?>
<?php echo $key->penjelasan; ?>
<?php  } ?>
  </body>
  <?php $this->load->view('header/FooterUser') ?>
</html>
