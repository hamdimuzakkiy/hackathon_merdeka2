<!-- Left side column. contains the logo and sidebar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Bencana
             <div class= "pull-right">
         
          </div>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <!-- /.box -->
              <div class="box box-solid">
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                      <li><a href="<?php echo base_url() ?>user/list_bencana"><i class="fa fa-home"></i>Menu Utama</a></li>
                      <?php if($id!='guest')
                          echo  '<li><a href="'.base_url().'user/tambah_bencana"><i class="fa fa-ambulance"></i>Galang Bantuan</a></li>';
                      ?>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <!-- About Me Box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
            <?php foreach ($list as $bencana) { ?>
              <div class="nav-tabs-custom">
                <div class="tab-content">
                    <!-- Post -->
                    <div class="post">
                      <div class='row margin-bottom'>
                        <div class='col-sm-6'>
                          <img class='img-responsive' src='<?php echo base_url().'../'.$bencana->url_img; ?>' alt='Photo'>
                        </div><!-- /.col -->
                        <div class='col-sm-6'>
                          <div class='row'>
                            <div class='col-sm-12'>
                            <h2><?php echo $bencana->nama." | ".$bencana->lokasi;  ?></h2>
                               <p>
                                  <?php echo $bencana->deskripsi; ?>
                              </p>
                              <h4><label>Batas Pengumpulan: </label> <?php print $bencana->tanggal_berakhir; ?></h4>
                              <br>
          
                              <button class="btn btn-lg btn-primary" onclick="window.location='<?php echo base_url()."user/detail_bencana/".$bencana->id; ?>';">Sumbang</button>
                            </div><!-- /.col -->
                           
                          </div><!-- /.row -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
                <?php } ?>	
                <?php 

      echo $this->pagination->create_links(); 
?>
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
  </body>
</html>
