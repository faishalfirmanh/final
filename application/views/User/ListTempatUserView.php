
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('header/HeaderUser'); ?>
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
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <title>List</title>
  </head>
    <!-- <?php $this->load->view('LinkView'); ?> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <body>
    <div id="map"></div>
    <?php echo form_open_multipart('HomeCont/Homepilih/'); ?>
    <div class="jumbotron jumbotron-fluid">
      <form>
        <div class="form-group">
          <label for="">pilih kategori</label>
          <select name="kategori">
            <option value="candi">candi</option>
            <option value="bukan_candi">bukan candi</option>
          </select>
        </div>
        <div class="form-group">
          <div class="navbar">
            <div class="tombol">
            <button type="submit" class="btn btn-primary btn-lg btn-primary">Cari</button>
            </div>
          </div>
        </div>


      </form>
      <?php echo form_close(); ?>

      <?php
        $no = $this->uri->segment('3') + 1;
        foreach ($data_tempat as $key) { ?>
        <div class="card">
          <div class="card-body bg-info text-white" style="width: 28rem;">
            <div>
            <div class="" align="center">
              <img src=<?=base_url("assets/upload")."/".$key->foto?>>
            </div>
            <h5 class="card-title"><?php echo $key->nama; ?></h5>
            <p class="card-text"><?php echo word_limiter ($key->penjelasan,4); ?></p>
            <div class="" align="center">
                <a href="<?=site_url()?>/HomeCont/baca/<?php echo $key->id ?>" type="Button" class="btn btn-info" align="center">Baca</a>
              <a href="<?=site_url()?>/HomeCont/peta/<?php echo $key->id ?>" type="Button" class="btn btn-success" align="center">Peta</a>
            </div>
            <br>
          </div>
          </div>

        </div>
        <?php } ?>
        <?php echo $this->pagination->create_links(); ?>

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
                  }
              };

              var features = [
                  {
                      position: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>),
                      type: 'library'
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx8tJGgmC9_Dg0-LZADGXBSeDCryt18uc&callback=initMap"
    async defer></script>

  </body>

</html>
