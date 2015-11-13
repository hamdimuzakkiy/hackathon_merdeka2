<!DOCTYPE html> 
  <script src="http://maps.google.com/maps/api/js?sensor=false"type="text/javascript"></script>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-9 col-sm-8" style="padding-right:0px;padding-left:0px;">
        <div id="map" style="width: 100%; min-height: 420px;"></div>
      </div>
      <div class="col-md-3 col-sm-4"style="padding-right:0px;padding-left:0px;">
        <div class="pad box-pane-right bg-green" style="min-height: 420px ">
        </div>
      </div><!-- /.col -->
    </div>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.0
    </div>
    <strong>Sangkuriang</a>.</strong> All rights reserved.
  </footer>
  <script src="<?php echo base_url(); ?>../assets/bootsrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/dist/js/demo.js"></script>
  <script type="text/javascript">
    var locations = [
      ['Bondi Beach'+'<br>'+'<a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+ 'Lihat</a> ', -33.890542, 151.274856, 4,'www.google.com'],
      ['Coogee Beach', -33.923036, 151.259052, 5,'www.google.com'],
      ['Cronulla Beach', -34.028249, 151.157507, 3,'www.google.com'],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2, 'www.google.com'],
      ['Maroubra Beach', -33.950198, 151.259302, 1,'www.google.com']
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        url: locations[i][4],
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
        
      })(marker, i));
    }
  </script>

