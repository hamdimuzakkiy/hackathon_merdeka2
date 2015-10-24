<?php 

      echo $this->pagination->create_links(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | User Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootsrap/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootsrap/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootsrap/dist/css/skins/_all-skins.min.css">
  </head>
   <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="../../index2.html" class="navbar-brand"><b>S</b>O<b>S</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                        <p>
                          Alexander Pierce - Web Developer
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      
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
                    <li><a href="mailbox.html"><i class="fa fa-home"></i> Menu Utama</a></li>
                   
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
                          <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                        </div><!-- /.col -->
                        <div class='col-sm-6'>
                          <div class='row'>
                            <div class='col-sm-12'>
                            <h2><?php echo $bencana->nama." | ".$bencana->lokasi;  ?></h2>
                               <p>
                                  <?php echo $bencana->deskripsi; ?>
                              </p>
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
