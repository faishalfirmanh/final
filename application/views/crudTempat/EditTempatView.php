<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php $this->load->view('header/Header_admin_view'); ?>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <?php form_open_multipart('TempatWisataCont/Editnf/'.$this->uri->segment(3)); ?>

    <input type="file" name="foto"><br>
    <input type="text" name="nama" class="form-control" value="<?php echo $data_tempat['nama'] ?>"><br>
    <input type="text" name="penjelasan" class="form-control" value="<?php echo $data_tempat['penjelasan'] ?>"><br>
    <input type="text" name="jambuka" class="form-control" value="<?php echo $data_tempat['jambuka'] ?>"required><br>
    <input type="text" name="tiket" class="form-control" value="<?php echo $data_tempat['tiket'] ?>"required><br>
    <input type="text" name="lat" class="form-control" value="<?php echo $data_tempat['lat'] ?>"required><br>
    <input type="text" name="longg" class="form-control" value="<?php echo $data_tempat['longg'] ?>" required><br>

    <div class="form-group">
      <label for="">pilih kecamatan</label>
      <select name="idKec" required>
        <option value="<?php echo $data_tempat['idKec'] ?>"><?php echo $data_tempat['namaKecamatan'] ?></option>
        <?php foreach ($kecamatan as $key) { ?>
        <option value="<?php echo $key->idKec; ?>"><?php echo $key->namaKecamatan; ?></option>
      <?php } ?>
      </select>
    </div>
      <?php echo form_close(); ?>
    <a href="<?php echo site_url('TempatWisataCont/Editnf/'.$this->uri->segment(3)) ?>">
    <button type="button" class="btn btn-primary">Submit</button>
    </a>


  </body>
    <?php $this->load->view('header/FooterViewAdmin') ?>
</html>
