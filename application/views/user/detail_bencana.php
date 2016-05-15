
      <!-- Left side column. contains the logo and sidebar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Permohonan Bantuan
             <div class= "pull-right">
                 <a href="<?php echo base_url(); ?>user/list_bencana" class="btn btn-primary btn-block"><b>Kembali ke List</b></a>
          </div>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
           <?php foreach ($detail_koor as $koor){ ?>
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'../'.$koor->url_img; ?>" alt="User profile picture" width="128px" height="128px">
                  <h3 class="profile-username text-center"><?php echo $koor->nama; ?></h3>
                  <p class="text-muted text-center"><?php echo $koor->email; ?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Email </b> <a class="pull-right"><?php echo $koor->email; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat</b> <a class="pull-right"><?php echo $koor->alamat; ?></a>
                    </li>
                  </ul>
                </div><!-- /.box-body -->

              </div><!-- /.box -->

              <!-- About Me Box -->

            </div><!-- /.col -->
          <?php } ?>
            <div class="col-md-9">
              <div class="nav-tabs-custom">

                <div class="tab-content">

                    <!-- Post -->
                    <?php foreach ($detail_bencana as $bencana){ ?>
                    <div class="post">
                      <div class='row margin-bottom'>
                        <div class='col-sm-6'>
                            <img class='img-responsive' src='<?php echo base_url().'../'.$bencana->url_img; ?>' alt='Photo'>
                        </div><!-- /.col -->
                        <div class='col-sm-6'>
                          <div class='row'>
                            <div class='col-sm-12'>
                            <h2><?php echo $bencana->nama; ?></h2>
                               <p>
                                  <?php echo $bencana->deskripsi; ?>
                              </p>
                              <br>


                            <div class='row'>
                            <div class='col-sm-12'>
                            <h4><b>Titik Lokasi Posko</b> <br> <?php echo $bencana->lokasi_titik; ?></h4><br>
                            </div><!-- /.col -->
                          </div><!-- /.row -->

                          <div class='row'>
                            <div class='col-sm-12'>
                            <h4><b>Jarak Posko ke Titik Bencana </b> <br><?php echo $bencana->jarak; ?> Km</h4><br>
                            </div><!-- /.col -->
                          </div><!-- /.row -->

                          <div class='row'>
                            <div class='col-sm-12'>
                            <h4><b>Pengungsi </b> </h4>
                            <div class='col-sm-4'>
                              Balita
                            </div>
                            <div class='col-sm-8'>
                              <?php print $bencana->balita; ?>
                            </div>
                            <div class='col-sm-4'>
                              Anak Laki - Laki
                            </div>
                            <div class='col-sm-8'>
                               <?php print $bencana->a_laki; ?>
                            </div>
                            <div class='col-sm-4'>
                              Anak Perempuan
                            </div>
                            <div class='col-sm-8'>
                               <?php print $bencana->a_perempuan; ?>
                            </div>
                            <div class='col-sm-4'>
                              Dewasa Laki - Laki
                            </div>
                            <div class='col-sm-8'>
                              <?php print $bencana->d_laki; ?>
                            </div>
                            <div class='col-sm-4'>
                              Dewasa Perempuan
                            </div>
                            <div class='col-sm-8'>
                               <?php print $bencana->d_perempuan; ?>
                            </div>
                            <div class='col-sm-4'>
                              Lansia Laki - Laki
                            </div>
                            <div class='col-sm-8'>
                              <?php print $bencana->l_laki; ?>
                            </div>
                            <div class='col-sm-4'>
                              Lansia Perempuan
                            </div>
                            <div class='col-sm-8'>
                              <?php print $bencana->l_perempuan; ?>
                            </div>
                            </div><!-- /.col -->
                          </div><!-- /.row -->


                          </div><!-- /.row -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.post -->
                    <div class="post clearfix">
                      <form class='form-horizontal'>
                        <div class='form-group'>
                        <div class="col-lg-12"><h4>Kebutuhan</h4></div>
                        <?php foreach ($detail_kebutuhan as $row) {?>
                            <div class="col-lg-9 progress-group">
                                <span class="progress-text"><?php print $row->nama ?></span>
                            <span class="progress-number">Diterima: <?php print $row->terpenuhi ?>/ Dibutuhkan :<?php print $row->jumlah ?></span>
                                <div class="progress sm">
                                    <?php
                                    $a = $row->terpenuhi;
                                    $b = $row->jumlah;
                                    $hasil = ($a/$b)*100;
                                    ?>
                                    <div class="progress-bar progress-bar-green" style="width:<?php print $hasil ?>%"></div>
                                </div>
                            </div>


                          <div class='col-sm-3'>
                             <!-- <a class="btn btn-lg btn-primary" href='<?php echo base_url()."user/sumbang_bencana"."/".$row->id; ?>'>Commit Menyumbang</a> -->
                          </div>
                              <?php //if($id!='guest')
                                //echo  '<button class="btn btn-danger pull-right btn-block btn-sm">Sumbang</button>';
                              ?>
                      </form>
                      <?php } ?>
                    </div><!-- /.post -->
                    <div class="post clearfix">
                      <form class='form-horizontal'>
                        <div class='form-group'>
                        <div class="col-lg-12"><h4>Layanan</h4></div>
                        <?php foreach ($detail_layanan as $row) {?>
                            <div class="col-lg-9 progress-group">
                                <h5><span class="progress-text"><?php print $row->nama_layanan ?></span>
                            </div>


                          <div class='col-sm-3'>
                             <!-- <a class="btn btn-lg btn-primary" href='<?php echo base_url()."user/sumbang_bencana"."/".$row->id; ?>'>Commit Menyumbang</a> -->
                          </div>
                              <?php //if($id!='guest')
                                //echo  '<button class="btn btn-danger pull-right btn-block btn-sm">Sumbang</button>';
                              ?>
                      </form>
                      <?php } ?>
                    </div><!-- /.post -->
                    <?php } ?>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
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
