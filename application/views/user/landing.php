<!DOCTYPE html>   
  <script src="http://maps.google.com/maps/api/js?sensor=false"type="text/javascript"></script>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-9 col-sm-8" style="padding-right:0px;padding-left:0px;">
        <div id="map" style="width: 100%; min-height: 420px;"></div>
      </div>
      <div class="col-md-3 col-sm-4"style="padding-right:0px;padding-left:0px;">
        <div class="pad box-pane-right bg-green" style="min-height: 420px ">
          <div class="col-md-6 col-sm-4">
            <div class="pad box-pane-right bg-green" style="min-height: 280px">

              <div class="description-block margin-bottom">
                <h2 class="description-text"><?php print $len;?></h2>
                <span class="description-text">Jumlah Posko</span>
              </div><!-- /.description-block -->
              <div class="description-block margin-bottom">
                <h2 class="description-text"><?php 
                $jumlah = 0;
                          foreach ($list_nama as $row) {
                            $jumlah++;
                          }
                          print $jumlah;
                        ?>
                        </h2>
                <span class="description-text">Bencana Alam</span>
              </div><!-- /.description-block -->
              <div class="description-block">
                <h4 class="description-header"></h4>
                <span class="description-text">
                <a href="http://localhost/hackathon_merdeka2/index.php/user/list_bencana" class="btn btn-success pull-right">Lihat List</a>
              </div><!-- /.description-block -->
            </div>
          </div><!-- /.col -->
        </div>
      </div><!-- /.col -->
    </div>
    <div class="row">
    <section class="invoice">
          <!-- title row -->
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <center><h2><strong>SOS</strong></h2><br>
                <h3>"Aplikasi pencatatan titik kumpul secara real time, mencatat kebutuhan,layanan dan juga lokasi titik kumpul"</h3></center>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
            </div><!-- /.col -->
            <div class="col-sm-6 invoice-col">
            <div class="col-sm-4 invoice-col">
                <center><h2><strong>Relawan</strong></h2><br>
                <h4>Dapat mencatat lokasi posko,layanan yang diberikan dan juga kebutuhan yang diperlukan secara realtime</h4></center>
            </div>
            <div class="col-sm-4 invoice-col">
              <center><h2><strong>Korban </strong></h2><br>
                <h4>Mencari Lokasi titik kumpul, dan juga melihat layanan titik kumpul</h4></center>
            </div>
            <div class="col-sm-4 invoice-col">
              <center><h2><strong>Donatur</strong></h2><br>
                <h4>Dapat melihat kebutuhan tiap posko secara realtime sehingga dapat menentukan sumbangan apa yang dibutuhkan</h4></center>
            </div>
            </div><!-- /.col -->
            <div class="col-sm-3 invoice-col">
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
             
            
            </div><!-- /.col -->
            <div class="col-xs-6">
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              
              
              <!-- <a href="" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i>Masuk sebagai relawan</a> -->
            </div>
          </div>
        </section><!-- /.content -->
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

    // var locations = [
    //   ['Bondi Beach'+'<br>'+'<a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+ 'Lihat</a> ', -33.890542, 151.274856, 4,'www.google.com'],
    //   ['Coogee Beach', -33.923036, 151.259052, 5,'www.google.com'],
    //   ['Cronulla Beach', -34.028249, 151.157507, 3,'www.google.com'],
    //   ['Manly Beach', -33.80010128657071, 151.28747820854187, 2, 'www.google.com'],
    //   ['Maroubra Beach', -33.950198, 151.259302, 1,'www.google.com']
    // ];
    
    var locations = [
      <?php 
      for ($i=0; $i < $len; $i++) { ?>
        ['<?php print $bencana[$i]["nama"]; ?>'+'<br>'+'<a href="http://localhost/hackathon_merdeka2/index.php/user/detail_bencana/<?php print $bencana[$i]["id"]; ?>">'+ 'Lihat</a> ',<?php print $bencana[$i]["lat"]; ?>,<?php print $bencana[$i]["lng"]; ?>,<?php print $i+1; ?>,'www.google.com'],    
      <?php }
      ?>
    ]
        

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(-1.3608034433484952, 116.685791015625),
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

