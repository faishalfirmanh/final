<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('header/Header_admin_view'); ?>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Mp.css"> -->
    <style type="text/css">
    #map {
     height: 100%;
   }
   /* Optional: Makes the sample page fill the window. */
   html, body {
     height: 70%;
     margin: 30;
     padding:30;
   }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="map"></div>

<?php echo $data_tempat['lat']; ?>
<?php echo $data_tempat['longg']; ?>

<script type="text/javascript">

var map;
      function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: new google.maps.LatLng(<?php echo $data_tempat['lat']; ?>, <?php echo $data_tempat['longg']; ?>),
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
                  position: new google.maps.LatLng(<?php echo $data_tempat['lat']; ?>, <?php echo $data_tempat['longg']; ?>),
                  type: 'library'
              },
              // {
              //     position: new google.maps.LatLng(-33.91539, 151.22820),
              //     type: 'library'
              // },

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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN__TGV0kdA7nwr1Nimjqi8XyqIPmF7zA&callback=initMap">
    </script>
  </body>
    <?php $this->load->view('header/FooterViewAdmin'); ?>
</html>
