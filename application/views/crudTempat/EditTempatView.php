<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php $this->load->view('header/Header_admin_view'); ?>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <?php form_open_multipart('TempatWisataCont/Update/'.$this->uri->segment(3)); ?>
    <input type="text" name="foto" class="form-control" value="<?php echo $data_tempat[0]->foto?>"><br>
    <input type="text" name="nama" class="form-control" value="<?php echo $data_tempat[0]->nama?>"><br>
    <input type="text" name="penjelasan" class="form-control" value="<?php echo $data_tempat[0]->penjelasan?>"><br>
    <input type="text" name="jambuka" class="form-control" value="<?php echo $data_tempat[0]->jambuka?>"><br>
    <input type="text" name="tiket" class="form-control" value="<?php echo $data_tempat[0]->tiket?>"><br>
    <input type="text" name="lat" class="form-control" value="<?php echo $data_tempat[0]->lat?>"><br>
    <input type="text" name="longg" class="form-control" value="<?php echo $data_tempat[0]->longg?>"><br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close(); ?>
  </body>
    <?php $this->load->view('header/FooterViewAdmin') ?>
</html>
