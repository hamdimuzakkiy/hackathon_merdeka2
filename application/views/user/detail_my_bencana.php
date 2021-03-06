
      <!-- Left side column. contains the logo and sidebar -->
      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">      <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Posko
    <div class= "pull-right">
      <a href="<?php echo base_url(); ?>user/list_bencana" class="btn btn-primary btn-block"><b>Kembali ke List</b></a>
    </div>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <?php foreach ($detail_koor as $koor){ ?>
        <div class="col-md-3">
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
                      <br>
                            <!-- <div class= "pull-right"> -->
                      <a href="<?php echo base_url(); ?>user/selesai/<?php print $id_bencana ?>" class="btn btn-warning btn-block"><b>Selesai</b></a>
                            <!-- </div> -->
                  </div><!-- /.col -->                        
                  <div class='col-sm-6'>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <h2><?php echo $bencana->nama; ?></h2>
                          <p>
                            <?php echo $bencana->deskripsi; ?>
                          </p>
                          <br>
                            </div><!-- /.col -->                           
                          </div><!-- /.row -->

                          <div class='row'>
                            <div class='col-sm-12'>
                            <h4><b>Titik Lokasi Posko </b> : <?php echo $bencana->lokasi_titik; ?></h4>                                                             
                            </div><!-- /.col --> 
                          </div><!-- /.row -->

                          <div class='row'>
                            <div class='col-sm-12'>
                              <h4><b>Jarak Posko Ke Titik Bencana </b> : <?php echo $bencana->jarak; ?> Km</h4>                                                             
                            </div><!-- /.col -->                           
                          </div><!-- /.row -->   
                          </div><!-- /.row -->
                       

                                                
                    <div class='row'></div>
                        <form action='<?php echo base_url()."user/update_pengungsi"."/".$bencana->id; ?>' method="post" class="form-horizontal">
                          <div class='col-md-12'><h4>Pengungsi </h4> </div>
                          <div class="col-lg-12">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Balita</label>
                                  <div class="col-sm-8">
                                    <input type="number" value="<?php print $bencana->balita; ?>" name="balita" style="text-align: center">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Anak Laki-laki</label>
                                  <div class="col-sm-8">
                                    <input type="number" value="<?php print $bencana->a_laki; ?>" name="a_laki" style="text-align: center"> 
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Anak Perempuan</label>
                                  <div class="col-sm-8">
                                    <input type="number" value="<?php print $bencana->a_perempuan; ?>" name="a_perempuan" style="text-align: center">
                                  </div>
                                </div>
                              </div><!-- /.col -->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Dewasa Laki-Laki</label>
                                  <div class="col-sm-8">
                                    <input type="number" value="<?php print $bencana->d_laki; ?>" name="d_laki" style="text-align: center"> 
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Dewasa Perempuan</label>
                                  <div class="col-sm-8">
                                    <input type="number" value="<?php print $bencana->d_perempuan; ?>" name="d_perempuan" style="text-align: center"> 
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Lansia Laki-laki</label>
                                  <div class="col-sm-8">
                                   <input type="number" value="<?php print $bencana->l_laki; ?>" name="l_laki" style="text-align: center"> 
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Lansia Perempuan</label>
                                  <div class="col-sm-8">
                                    <input type="number" value="<?php print $bencana->l_perempuan; ?>" name="l_perempuan" style="text-align: center"> 
                                  </div>
                                </div>
                              </div><!-- /.col -->
                            </div><!-- /.row -->
                          <div class="col-lg-8">
                          </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-lg btn-primary pull-right" >Update</button>
                            </div><!-- /.post -->
                        </form>
                    </div>
                    <div class="col-md-12">
                    <div class="post clearfix">
                      <form class='form-horizontal'>
                        <div class='form-group'>
                        <div class="col-md-12">
                            <h4>Kebutuhan</h4>
                        </div>
                        <?php foreach ($detail_kebutuhan as $row) {?>
                            <div class="col-lg-9 progress-group">
                                <h4><span class="progress-text"><?php print $row->nama ?></span>
                            <span class="progress-number"><b>Tersedia: <?php print $row->terpenuhi ?></b>/ Dibutuhkan :<?php print $row->jumlah ?></span></h4>
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
                             <a class="btn btn-lg btn-success pull-right" href='<?php echo base_url()."user/tambah_sumbangan"."/".$row->id; ?>'>Update Data</a>
                          </div> 
                              <?php //if($id!='guest')
                                //echo  '<button class="btn btn-danger pull-right btn-block btn-sm">Sumbang</button>';
                              ?>
                      </form>
                      <?php } ?> 
                    
                    </div><!-- /.post -->    
                    </div>                
                    <a class="btn btn-lg btn-primary pull-right" href='<?php echo base_url()."user/tambah_kebutuhan"."/".$bencana->id; ?>'>Tambah Kebutuhan</a>      
                    <div class="post clearfix">
                      <form class='form-horizontal'>
                        <div class='form-group'>
                        <span class="col-lg-12"><h4>Layanan</h4></span>
                        <?php foreach ($detail_layanan as $row) {?>
                            <div class="col-lg-9 progress-group">
                                <h4><span class="progress-text"><?php print $row->nama_layanan ?></span>                                                            
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
                 <div class="post">
                      <div class='row margin-bottom'>
                        <?php foreach ($list_organisasi as $organisasi){ ?>
                        <div class='col-sm-6 pull-left'>
                          <div class='row'>
                            <div class='col-sm-12'>
                            <h2><?php echo $organisasi->nama; ?></h2>
                               <p><?php echo $organisasi->lokasi; ?>
                               <h4><b>Hubungi </b> : <?php echo $organisasi->telpon; ?></h4>
                              <br>
                            </div><!-- /.col -->                           
                          </div><!-- /.row -->
                        </div><!-- /.col -->
                        <div class='col-sm-2 pull-right'>
                            <br>
                            <img class='img-responsive img-rounded img-push' src='<?php echo base_url().'../'.$organisasi->url_img; ?>' alt='Photo' width="100%" height="100%">
                        </div><!-- /.col -->
                        <?php } ?>
                      </div><!-- /.row -->
                    </div><!-- /.post -->
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
