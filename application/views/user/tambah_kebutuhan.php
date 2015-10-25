<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kebutuhan
            <?php foreach ($detail_bencana as $bencana) {?>
             <div class= "pull-right">
          <a href="<?php echo base_url(); ?>user/detail_my_bencana/<?php echo $bencana->id; ?>" class="btn btn-primary btn-block"><b>Kembali Kelola Bantuan</b></a>
          </div>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                	
                
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'../'.$bencana->url_img; ?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $bencana->nama?></h3>
                    <?php } ?>
                  
              </div><!-- /.box -->

              <!-- About Me Box -->
              
            </div><!-- /.col -->
            </div>
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                
               <div class="tab-pane" id="settings">
            
               <form action="<?php print base_url() ?>user/do_tambah_kebutuhan" class="form-horizontal" method = 'post'>
                   <div class="row"  style="padding-left: 10px;">
                       <div class="col-md-9">
                           <h1>Tambah Kebutuhan</h1>
                       
                       

                       <span class = 'adds'>
                     <td><a class = "btn btn-block btn-sm btn-success" id = "button">Tambah Kebutuhan</a></td>
                 </div>
                 </div>
                      <input type="hidden" name = 'id' value="<?php print $id; ?>">
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                        </div>
                      </div>
                   </div>
                    </form>
                  </div><!-- /.tab-pane -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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
  </body>
</html>
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
</script>







	

