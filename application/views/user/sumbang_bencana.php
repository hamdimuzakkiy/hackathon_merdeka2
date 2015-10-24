<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Sumbang
            <?php foreach ($detail_bencana as $bencana) {?>
             <div class= "pull-right">
          <a href="<?php echo base_url(); ?>user/detail_bencana/<?php echo $bencana->id; ?>" class="btn btn-primary btn-block"><b>Kembali Permintaan Bantuan</b></a>
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
                  <h3 class="profile-username text-center"><?php echo $bencana->nama;?></h3>
                    <?php } ?>
                  <?php foreach ($detail_kebutuhan as $kebutuhan) {?>
                  <p class="text-muted text-center"><?php print $kebutuhan->nama;?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                    <?php
                    $a = $kebutuhan->jumlah;
                    $b = $kebutuhan->terpenuhi;
                    $c = $a-$b;
                    if($c <= 0) $c = 0;
                    ?>
                      <b>Kekurangan</b> <a class="pull-right"><?php print $c;?></a>
                    </li>
                    
      
                  </ul>
                </div><!-- /.box-body -->
                <?php } ?>
              </div><!-- /.box -->

              <!-- About Me Box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                
               <div class="tab-pane" id="settings">
               <form action="<?php print base_url() ?>user/do_sumbang_bencana/<?php echo $bencana->id ?>" class="form-horizontal" method = 'post'>
                   <div class="row"  style="padding-left: 10px;">
                       <div class="col-md-9">
                           <h1>Form Commit Bantuan</h1>
                       </div>
                       <div class="col-md-9">
                           <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
                                </div>
                            </div>
                       </div>
                       <div class="col-md-9">
                           <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Bukti</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bukti" placeholder="Bukti">
                                </div>
                            </div>
                       </div>
                      <input type="hidden" name = "id_kebutuhan" value = "<?php print $id_kebutuhan; ?>">
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
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






	

	