<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php $this->load->view('header/HeaderUser') ?>
  </head>
  <body>
    ini tampilan home user
    <div class="container">
    	<div class="row">
    		<div class="col-md-10">
    		<!-- <img id="bgbaca" src="<?php echo base_url();?>images/rn.jpg" width="700px" height="800px" alt="bg" align-text="center" > -->
    			<?php foreach ($club_data as $key)  {?>
    		<h1 id="judulBaca" class="text-center"><?php echo $key->judul;?></h1>
    		<center>
    			<img id="gam"  class="img-responsive" src=<?=base_url("assets/uploads")."/".$key->foto?>>
    			<p id="pr">
    			<?php echo $key->penjelasan ;?>
    			</p>
    		</center>
     		<?php } ?>
    		</div>
    	</div>
    </div>
  </body>
  <?php $this->load->view('header/FooterUser') ?>
</html>
