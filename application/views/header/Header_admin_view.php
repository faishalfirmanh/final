<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin</title>
    <?php $this->load->view('LinkView'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/navbar.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/tombol.css" type="text/css">
    </head>
  <body>
   <div class="header">   <!--ini klass custom css kusus bisa dipanggil dengan hanya nama header -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand textAdmin" href="#">hai..ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link buttonNavbarTambah" href="<?php echo site_url()?>/TempatWisataCont/Create"><span class="glyphicon glyphicon-screenshot"></span> tambah tempat</a>
            <!-- <a class="nav-item nav-link buttnKeluar btn-info" href="<?php echo site_url(); ?>/HomeCont/peta"><span class="glyphicon glyphicon-globe"></span>Daftar Kunjungan</a> -->
            <a class="nav-item nav-link butonNavList btn-info" href="<?php echo site_url(); ?>/TempatWisataCont"><span class="glyphicon glyphicon-list"></span> Daftar Tempat</a>
            <a class="nav-link buttnKeluar btn-info" href="<?php echo site_url()?>/LoginCont/keluar"><span class="glyphicon glyphicon-log-out"></span> LogOut</a>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>
