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
                      <input type="file" name="pfile">
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


