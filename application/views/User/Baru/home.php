
<html lang="en">

<head>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

  <title>Hello  &amp; User</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>/cssfarmie/img/core-img/favicon.ico">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/cssfarmie/style.css" type="text/css"> -->
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
    $lat=-7.311126;
    $long=112.428169;

  }
   ?>
     <script type="text/javascript">
     function addMarkersToMap(map) {

        if(navigator.geolocation){// iki
            navigator.geolocation.getCurrentPosition(function(position){
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                let lattitude = document.getElementById("lat").value = position.coords.latitude
                let longitude = document.getElementById("lot").value = position.coords.longitude
                document.getElementById("result").innerHTML = positionInfo;

                let parisMarker = new H.map.Marker({lat: lattitude, lng: longitude}); //bwaan
                map.addObject(parisMarker)// bawaan
            });
        } else{
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }

        }
     </script>
   <style type="text/css">
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


  <!-- <section class="testimonial-area bg-img bg-overlay section-padding-100 jarallax" style="background-image: url('img/bg-img/15.jpg');"> -->
<section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax">
  <center>
    <div id="map"></div>
  </center>
</section>

    <br>
  </section>
  <input type="hidden" id="lat"></input>
  <input type="hidden" id="lot"></input>
  <div id="result"></div>
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
<?php
$tes = $data_tempat;
if($tes!=null ){
?>
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
        <a href="<?=site_url()?>/JalurCont/PetunjukArah/<?php echo $key->id ?>" type="Button" class="btn btn-warning" align="center">Jalur</a>
      </center>

  </div>

</div>
<?php } ?>
<?php echo $this->pagination->create_links(); ?>
 <?php }
else { ?>
<!DOCTYPE html>
<h3>Data tidak ditemukan</h3>
<?php }
 ?>
        <!-- Single Team Member -->


      </div>
    </div>
  </section>
  <!-- ##### News Area End ##### -->
  <?php $this->load->view('/header/footerFuction') ?>
  <!-- ##### Footer Area Start ##### -->

</body>
<script type="text/javascript">

function addMarkersToMap(map) {
  var parisMarker = new H.map.Marker({lat:<?php echo $lat; ?>, lng:<?php echo $long; ?>});
  map.addObject(parisMarker);
}

var platform = new H.service.Platform({
  app_id: '4qSSxfTAP2vjFv3fCYyq',
app_code: 'Q9u5ShF8yhey8ok1-R1HWQ',
  useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

//Step 2: initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map,{
  center: {lat:<?php echo $lat; ?>, lng:<?php echo $long; ?>},
  zoom: 15,
  pixelRatio: pixelRatio
});

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addMarkersToMap(map);
///////////////////////////////////
function showPosition(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(position){
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                document.getElementById("result").innerHTML = positionInfo;
            });
        } else{
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    }
    function locateUser(map) {
      if (nokia.maps.positioning.Manager) {
        var positioning = new nokia.maps.positioning.Manager();
        positioning.getCurrentPosition(
          function (position) {
            var coords = position.coords,
              marker = new nokia.maps.map.StandardMarker(coords),
              accuracyCircle = new nokia.maps.map.Circle(coords, coords.accuracy);
            map.objects.addAll([accuracyCircle, marker]);
            map.zoomTo(accuracyCircle.getBoundingBox());
          },
          function (error) {
            var errorMsg = 'Location could not be determined: ',
              errors = ['PERMISSION_DENIED', 'POSITION_UNAVAILABLE', 'TIMEOUT'];
            if (error.code < 4) {
              errorMsg += errors[error - 1];
            } else {
              errorMsg += 'UNKNOWN ERROR';
            }
            alert(errorMsg);
          },
          {maximumAge: 750}
        );
      }
    }

</script>
</html>
