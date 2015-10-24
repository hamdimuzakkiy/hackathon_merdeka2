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
                    <li><a href="mailbox.html"><i class="fa fa-home"></i> Menu Utama</a></li>
                   
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
                <form action="<?php print base_url()?>user/do_tambah_bencana" method = "post"> 
                  <div class="form-group">
                   <input type="text" class="form-control" placeholder="Nama Bencana" name="namas">
                  </div>
                  <div class="form-group">
                  <input type="text" class="form-control" placeholder="Lokasi Bencana" name="lokasi">
                  </div>
                  <div class="form-group">
                  <label>Batas Pengumpulan</label>
                  <input type="date" class="form-control"   name="tanggal_berakhir">
                  </div>

                  <div class="form-group">
                  <label>Deskripsi Bencana</label>
                    <textarea name="deskripsi" class="form-control" style="height: 300px" >
                    </textarea>
                  </div>
                  <div class="form-group">
                   <label>Masukan Gambar Bencana</label>
                    <div class="btn btn-default btn-file">
                      <i class="fa fa-image"></i> Image
                      <input type="file" name="attachment">
                    </div>
                    <p class="help-block">Hanya Bisa Satu Gambar</p>
                 </div>
                 <div class="form-group">
                 <label>Masukan List Kebutuhan</label>
                 <span class = 'adds'>
                     <td><a class = "btn btn-block btn-sm btn-success" id = "button">Tambah Kebutuhan</a></td>
<span hidden id = 'lengthData'><?php print 0; ?></span>
                 </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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
<script src="<?php echo base_url(); ?>../assets/bootsrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>

  $('#button').click(function(){                
        $('.adds').append('<tr><td><select name="nama[]"><option value="Obat-Obatan">Obat-Obatan</option><option value="Dokter">Dokter</option><option value="Paramedis">Paramedis</option><option value="Masker">Masker</option><option value="Pakaian Dewasa">Pakaian Dewasa</option><option value="Pakaian Anak">Pakaian Anak</option><option value="Makanan Instan">Makanan Instan</option><option value="Mie Instan">Mie Instan</option><option value="Sabun dan Shampo">Sabun dan Shampo</option></select></td>        <td><input  type="Text" name="jumlah[]"></td>           <td><a  class = "remove" style = "display:inline; text-decoration:none; cursor:pointer; color: red;"><i class="fa fa-times"></i>Hapus</a></td></tr><tr></tr>');              
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


