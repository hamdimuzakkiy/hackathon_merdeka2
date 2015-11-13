<style type="text/css">
    
    #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

</style>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buat Penggalangan Bantuan
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="box box-solid">
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="<?php echo base_url() ?>user/list_bencana"><i class="fa fa-home"></i>Menu Utama</a></li>
                    <?php if($id!='guest')
                          echo  '<li><a href="'.base_url().'user/tambah_bencana"><i class="fa fa-ambulance"></i>Galang Bantuan</a></li>';
                      ?>
                   <li><a href="<?php echo base_url() ?>user/list_my_bencana"><i class="fa fa-server"></i>Kelola Galang Bantuan</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Penggalangan Bantuan Baru</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <form action="<?php print base_url()?>user/do_tambah_bencana" method = "post" enctype="multipart/form-data"> 
                  <div class="form-group">
                    <label>Nama Bencana</label>
                   <input type="text" class="form-control" placeholder="Nama Bencana" name="namas">
                  </div>
                  <div class="form-group">
                  <label>Lokasi Bencana</label>
                  <input type="text" class="form-control" placeholder="Lokasi Bencana" name="lokasi">
                  </div>
                  <div class="form-group">
                  <label>Lokasi Titik Posko</label>
                  <input type="text" class="form-control" placeholder="Lokasi Titik Posko" name="lokasi_titik">
                  </div>

                  <div class="form-group">
                    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                    <div style="width:100%; height:400px;" id="map"></div>
                    <input type="hidden" name="lat" id = "lat">
                    <input type="hidden" name="lng" id = "lng">
                  </div>

                  <div class="form-group">
                  <label>Jarak Posko Ke Titik Bencana ( dalam Km )</label>
                  <input type="number" class="form-control" placeholder="Jarak Titik Posko" name="jarak">
                  </div>                  

                  <span class="form-group col-md-12">
                  <div class="form-group col-md-6">
                  <label>Pengungsi Balita</label>
                    <input type="number" class=" form-control" placeholder="Balita" name="balita">
                  </div>                  
                  </span>

                  <span class="form-group col-md-12">
                    <div class="form-group col-md-6">
                    <label>Pengungsi Anak Laki - Laki</label>
                      <input type="number" class=" form-control" placeholder="Anak Laki - Laki" name="a_laki">
                    </div>                  
                    <div class="form-group col-md-6">
                    <label>Pengungsi Anak Perempuan</label>
                      <input type="number" class=" form-control" placeholder="Anak Perempuan" name="a_perempuan">
                    </div>                  
                  </span>

                  <span class="form-group col-md-12">
                    <div class="form-group col-md-6">
                    <label>Pengungsi Dewasa Laki - Laki</label>
                      <input type="number" class=" form-control" placeholder="Dewasa Laki - Laki" name="d_laki">
                    </div>                  
                    <div class="form-group col-md-6">
                    <label>Pengungsi Dewasa Perempuan</label>
                      <input type="number" class=" form-control" placeholder="Dewasa Perempuan" name="d_perempuan">
                    </div>                  
                  </span>

                  <span class="form-group col-md-12">
                    <div class="form-group col-md-6">
                    <label>Pengungsi Lansia Laki - Laki</label>
                      <input type="number" class=" form-control" placeholder="Lansia Laki - Laki" name="l_laki">
                    </div>                  
                    <div class="form-group col-md-6">
                    <label>Pengungsi Lansia Perempuan</label>
                      <input type="number" class=" form-control" placeholder="Lansia Perempuan" name="l_perempuan">
                    </div>                  
                  </span>

                  <div class="form-group">
                  <label>Deskripsi Bencana</label>
                    <textarea name="deskripsi" class="form-control" style="height: 300px" >
                    </textarea>
                  </div>
                  <div class="form-group">
                   <label>Masukan Gambar Bencana</label>
                    <div class="btn btn-default btn-file">
                      <i class="fa fa-image"></i> Image
                      <input type="file" name = "pfile" id = "pfiles"  accept="image/gif, image/jpeg, image/png">
                    </div>
                    <p class="help-block">Hanya Bisa Satu Gambar</p>
                 </div>                 
                 <div class="form-group col-md-6">
                 <label>Masukan List Kebutuhan</label>
                 <span class = 'adds'>
                     <td><a class = "btn btn-block btn-sm btn-success" id = "button">Tambah Kebutuhan</a></td>
                      <span hidden id = 'lengthData'><?php print 0; ?></span>
                 </div>
                 <div class="form-group col-md-6">
                 <label>Masukan List Layanan</label>
                 <span class = 'adds2'>
                     <td><a class = "btn btn-block btn-sm btn-success" id = "button2">Tambah Kebutuhan</a></td>
                      <span hidden id = 'lengthData2'><?php print 0; ?></span>
                 </div>
                </div><!-- /.box-body -->                
                <div class="box-footer">                
                  <div class="pull-right">
                    <button  type="submit" class="btn btn-lg btn-primary">Submit</button>
                  </div>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
    </div><!-- ./wrapper -->
     <!-- Control Sidebar -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>../assets/bootsrap/dist/js/demo.js"></script>    
<script>

  $('#button').click(function(){                
        $('.adds').append('<tr><td class="pull-right" style="padding-right:10px;padding-top:10px;"><select class="form-control" name="nama[]"><option value="Obat-Obatan">Obat-Obatan</option><option value="Dokter">Dokter</option><option value="Paramedis">Paramedis</option><option value="Masker">Masker</option><option value="Pakaian Dewasa">Pakaian Dewasa</option><option value="Pakaian Anak">Pakaian Anak</option><option value="Makanan Instan">Makanan Instan</option><option value="Mie Instan">Mie Instan</option><option value="Sabun dan Shampo">Sabun dan Shampo</option></select></td><td><input  type="Text" class="form-control" name="jumlah[]"></td>           <td><a  class = "remove" style = "display:inline; text-decoration:none; cursor:pointer; color: red;padding-left:7px;">Hapus</a></td></tr><tr></tr>');              
        //$('.adds').append($( "#dpd" ).html());
        $('.remove').click(function () {
            $(this).parents().eq(1).remove();            
        });                                            
    });

    // remove laporan KIT 
    $('.removes').click(function () {
        $(this).parents().eq(1).remove();                                    
    });

    $('#button2').click(function(){                
        $('.adds2').append('<tr><td class="pull-right" style="padding-right:10px;padding-top:10px;"><select class="form-control" name="nama2[]"><option value="Kesehatan">Kesehatan</option><option value="Dapur Umum">Dapur Umum</option><option value="Peristirahatan">Peristirahatan</option></select></td>           <td><a  class = "remove2" style = "display:inline; text-decoration:none; cursor:pointer; color: red;padding-left:7px;">Hapus</a></td></tr><tr></tr>');              
        //$('.adds').append($( "#dpd" ).html());
        $('.remove2').click(function () {
            $(this).parents().eq(1).remove();            
        });                                            
    });

    // remove laporan KIT 
    $('.removes2').click(function () {
        $(this).parents().eq(1).remove();                                    
    });
</script>
<script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {



  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    // markers.forEach(function(marker) {
    //   marker.setMap(null);
    // });
    // markers = [];
    marker = null;

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {

      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      lat = (place.geometry.location.lat());
      lng = (place.geometry.location.lng());
      document.getElementById('lat').value = lat
      document.getElementById('lng').value = lng
      // markers.push(new google.maps.Marker({        
      //   map: map,
      //   draggable: true,
      //   icon: icon,
      //   title: place.name,
      //   position: place.geometry.location        
      // }));

      marker = new google.maps.Marker({        
        map: map,
        draggable: true,
        icon: icon,
        title: place.name,
        animation: google.maps.Animation.DROP,
        position: place.geometry.location        
      });      

        google.maps.event.addListener(marker, 'dragend', function() 
      {          
          lat = (marker.getPosition().lat());
          lng = (marker.getPosition().lng());

          document.getElementById('lat').value = lat
          document.getElementById('lng').value = lng          
      });

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
} 
  function geocodePosition(pos) 
  {
     geocoder = new google.maps.Geocoder();
     geocoder.geocode
      ({
          latLng: pos
      }, 
          function(results, status) 
          {
              if (status == google.maps.GeocoderStatus.OK) 
              {
                  $("#mapSearchInput").val(results[0].formatted_address);
                  $("#mapErrorMsg").hide(100);
              } 
              else 
              {
                  $("#mapErrorMsg").html('Cannot determine address at this location.'+status).show(100);
              }
          }
      );
  }
      
    
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"
         async defer></script>


