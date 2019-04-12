<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Hello  &amp; User</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>/cssfarmie/img/core-img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/cssfarmie/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/cssfarmie/css/baru.css" type="text/css">
  <script src="<?php echo base_url(); ?>/mapicon/dist/js/map-icons.js" type="text/javascript"></script>
  <link rel=stylesheet href="<?php echo base_url(); ?>/mapicon/dist/css/map-icons.css" type="text/css"></script>

  <!-- Core Stylesheet -->
  <?php
  if ($this->session->userdata('lat')!=null&&$this->session->userdata('long')!=null)
  {
    $lat=$this->session->userdata('lat');
    $long=$this->session->userdata('long');
  }
  else {
    $lat=-7.946093;
    $long=112.615494;
  }

   ?>
   <style>
     /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
     #map {
       height: 425px;
       width: 80%;
     }
     /* Optional: Makes the sample page fill the window. */
     html, body {
       height: 80%;
       margin: 0;
       padding: 0;
     }
   </style>
</head>

<body>
  <!-- Preloader -->
    <?php $this->load->view('header/HeaderFution') ?>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">



    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <section class="famie-benefits-area section-padding-100-0 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="benefits-thumbnail mb-50">
            <img src="<?=base_url("/cssfarmie/img/bg-img/TES.jpg")?>" alt="">
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="100ms">
            <img src="<?=base_url("cssfarmie/img/core-img/digger.png")?>" alt="">
            <h5>Best Services</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="300ms">
            <img src="<?=base_url("cssfarmie/img/core-img/windmill.png")?>" alt="">
            <h5>Farm Experiences</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="500ms">
            <img src="<?=base_url("/cssfarmie/img/core-img/cereals.png")?>" alt="">
            <h5>100% Natural</h5>
          </div>
        </div>


        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="700ms">
            <img src="<?=base_url("/cssfarmie/img/core-img/tractor.png")?>" alt="">
            <h5>Farm Equipment</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="900ms">
            <img src="<?=base_url("/cssfarmie/img/core-img/sunrise.png")?>" alt="">
            <h5>Organic food</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonial-area bg-img bg-overlay section-padding-100 jarallax" style="background-image: url('img/bg-img/15.jpg');">
    <center>
      <span class="map-icon map-icon-point-of-interest"></span>
      <div id="map"></div>
    </center>
    <br>
  </section>

  <section class="team-member-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>Daftar Tempat Wisata</p>
            <h2><span>Sejarah</span> Silahkan Berkunjung</h2>
            <img src="<?=base_url("/cssfarmie/img/core-img/decor2.png")?>" alt="">
          </div>
        </div>
      </div>
      <?php echo form_open_multipart('UserCont/Homepilih/'); ?>
        <form>
          <div class="">
            <label for="">pilih kategori</label>
            <select name="kategori">
              <option value="candi">candi</option>
              <option value="bukan_candi">bukan candi</option>
            </select><br>
            <label for="">pilih kecamatan</label>
            <select name="kecamatan">
              <?php foreach ($kecamatan as $key) { ?>
              <option value="<?php echo $key->idKec; ?>"><?php echo $key->namaKecamatan; ?></option>
            <?php } ?>
            </select>
          </div>
          <div class="">
            <div class="">
              <div class="tombol">
              <button type="submit" class="btn btn-primary btn-lg btn-primary">Cari</button>
              </div>
            </div>
          </div>
        </form>
        <?php echo form_close(); ?>
<br>
      <div class="row">

        <!-- Single Team Member -->
        <?php
          $no = $this->uri->segment('3') + 1;
          foreach ($data_tempat as $key) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="100ms">
            <!-- Team Thumbnail -->
            <div class="team-img">
              <img src=<?=base_url("assets/upload")."/".$key->foto?> width="30%" height="30%">
              <!-- Social Info -->

            </div>
            <!-- Team Member Info -->
            <div class="team-member-info">
              <h5><?php echo $key->nama; ?></h5>
              <h6><?php echo word_limiter ($key->penjelasan,4); ?></h6>
            </div>
              <center>
                <a href="<?=site_url()?>/UserCont/baca/<?php echo $key->id ?>" type="Button" class="btn btn-info" align="center">Baca</a>
                <a href="<?=site_url()?>/UserCont/peta/<?php echo $key->id ?>" type="Button" class="btn btn-success" align="center">Peta</a>
              </center>

          </div>

        </div>
      <?php } ?>
      <?php echo $this->pagination->create_links(); ?>

      </div>
    </div>
  </section>
  <!-- ##### News Area End ##### -->
  <?php $this->load->view('/header/footerFuction') ?>
  <!-- ##### Footer Area Start ##### -->

</body>
<script>
var map;
      function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>),
              mapTypeId: 'roadmap'
          });

          var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
          var icons = {
              library: {
                  icon: iconBase + 'library_maps.png'
              },
              info: {
                  icon: iconBase + 'info-i_maps.png'
              },


          };


          var features = [
              {
                  position: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>),
                  type: 'info',
              },

          ];

          // Create markers.
          features.forEach(function(feature) {
              var marker = new google.maps.Marker({
                  position: feature.position,
                  icon: icons[feature.type].icon,
                  map: map
              });
          });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLzlThSr-GpLXnwICjCvAxg6VOTT_Tbcs&callback=initMap"
async defer></script>
</html>
