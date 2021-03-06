<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>SOS | Log in</title>
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
	    <!-- iCheck -->
	    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/bootsrap/plugins/iCheck/square/blue.css">
  </head>
<body class="hold-transition register-page">
 <div class="register-box">
  <div class="register-logo">
       <b>S</b>O<b>S</b></a>
  </div>
  <div class="register-box-body">
        <p class="login-box-msg">Daftar Anggota Baru</p>
            <form action="<?php print base_url()?>auth/do_signup" method = "post" enctype="multipart/form-data">
          <div class="form-group has-feedback">
            <input type="text" name = "nama" class="form-control" placeholder = "Nama">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control"  name = "email" placeholder = "Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name = "password" placeholder = "Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name = "alamat" placeholder = "Alamat">
            <span class="glyphicon glyphicon-road form-control-feedback"></span>
          </div>
          <div class="form-group">
             <label>Avatar</label>
              <div class="btn btn-default btn-file">
                <i class="fa fa-image"></i> Image
                <input type="file" name = "pfile" id = "pfiles"  accept="image/gif, image/jpeg, image/png">
              </div>
              <p class="help-block">Hanya Bisa Satu Gambar</p>
           </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>  
        <a href="<?php echo base_url(); ?>auth/login" class="text-center">Sudah Mendaftar</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->







