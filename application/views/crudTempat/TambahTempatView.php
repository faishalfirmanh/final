<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('header/Header_admin_view'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/navbar.css" type="text/css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('TempatWisataCont/Create'); ?>
    <div class="jumbotron jumbotron-fluid">
      <form>
        <div class="form-group">
          <label for="">masukkan foto</label>
          <input type="file" name="foto">
        </div>
        <div class="form-group">
          <label for="">masukkan nama</label>
          <input type="text" class="form-control" name="nama" placeholder="misal candi tikut">
        </div>
        <div class="form-group">
          <label for="">masukkan penjelasan</label>
          <input type="text" class="form-control" name="penjelasan" placeholder="misal alamat atau diskripsi candi">
        </div>
        <div class="form-group">
          <label for="">masukkan jam buka</label>
          <input type="time" name="jambuka">
        </div>
        <div class="form-group">
          <label for="">masukkan harga tiket</label>
          <input type="text" class="form-control" name="tiket">
        </div>
        <div class="form-group">
          <label for="">masukkan latitude</label>
          <input type="text" class="form-control" name="lat">
        </div>
        <div class="form-group">
          <label for="">masukkan longitude</label>
          <input type="text" class="form-control" name="longg">
        </div>
        <div class="form-group">
          <label for="">pilih kategori</label>
          <select name="kategori">
            <option value="candi">candi</option>
            <option value="bukan_candi">bukan candi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">pilih kecamatan</label>
          <select name="kecamatan">
            <?php foreach ($kecamatan as $key) { ?>
            <option value="<?php echo $key->idKec; ?>"><?php echo $key->namaKecamatan; ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <div class="navbar">
            <div class="tombol">
            <button type="submit" name="simpantempat" id="simpantempat" class="btn btn-primary btn-lg btn-primary">Simpan</button>
            </div>
          </div>
        </div>


      </form>
      <?php echo form_close(); ?>

     </div><!-- jombrotan -->
  </body>
        <script type="text/javascript">
        $(document).on('click','#simpantempat',simpantempat)
        .on('click','#reset',reset)
        // .on('click','#updatejalan',updatejalan)
        // .on('click','#editjalan',editjalan)
        // .on('click','#deletejalan',deletejalan);
        function simpantempat() {//simpan jalan
            var datatempat = {'nama':$('#nama').val(),
            'des':$('#des').val()};console.log(datatempat);
            $.ajax({
                url : '<?php echo site_url("TempatWisataCont/Create");?>',
                data : datajalan,
                dataType : 'json',
                type : 'POST',
                success : function(data,status){
                    if (data.status!='error') {
                        $('#daftar').load('<?php echo current_url()." #daftar > *";?>');
                        reset();//form langsung dikosongkan pas selesai input data
                    }else{
                        alert(data.msg);
                    }
                },
                error : function(x,t,m){
                    alert(x.responseText);
                }
            })
        }
        function reset() {//reset form jalan
            $('#nama').val('');
            $('#des').val('');
            $('#id').val('');
            $('#simpan').attr('disabled',false);
            // $('#updatejalan').attr('disabled',true);
        }
        </script>
  <?php $this->load->view('header/FooterViewAdmin'); ?>
</html>
