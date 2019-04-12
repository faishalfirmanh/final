<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Famie - Farm Services &amp; Organic Food Store Template | About</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>/cssfarmie/img/core-img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/cssfarmie/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/cssfarmie/css/baru.css" type="text/css">
</head>

<body>
  <!-- Preloader -->
  <?php $this->load->view('header/HeaderFution') ?>


  <!-- ##### Header Area End ##### -->

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('<?=base_url("/cssfarmie/img/bg-img/18.jpg")?>');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <section class="famie-benefits-area pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="benefits-thumbnail mb-50">
            <img src="<?=base_url("/cssfarmie/img/bg-img/2.jpg")?>" alt="">
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="100ms">
            <img src="<?=base_url("/cssfarmie/img/core-img/digger.png")?>" alt="">
            <h5>Best Services</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="300ms">
            <img src="<?=base_url("/cssfarmie/img/core-img/windmill.png")?>" alt="">
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

        <!-- Single Benefits Area -->
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
  <!-- ##### Famie Benefits Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->


        <!-- Famie Video Play -->


      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  <!-- ##### Testimonial Area Start ##### -->

  <!-- ##### Testimonial Area End ##### -->


  <!-- ##### Team Member Area Start ##### -->


  <!-- ##### Team Member Area End ##### AIzaSyDx8tJGgmC9_Dg0-LZADGXBSeDCryt18uc -->
  <script>
  function myMap() {
  var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx8tJGgmC9_Dg0-LZADGXBSeDCryt18uc&callback=myMap"></script>
  <!-- ##### Footer Area Start ##### -->

  <!-- ##### Footer Area End ##### -->
  <?php $this->load->view('/header/footerFuction') ?>
  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->

</body>

</html>
