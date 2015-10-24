<section class="content-header">
    <h1>
      Data Permintaan Logistik Bantuan Bencana Alam
      <small>Menambahkan Data Permintaan</small>
    </h1>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-6 col-lg-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Permintaan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php print base_url() ?>pelapor/do_register">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleLogistik">Nama Barang Logistik</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama Barang Logistik" name="jenis_kebutuhan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Request Logistik</label>
                      <input type="number" class="form-control" placeholder="Masukan Total Barang" name="jumlah">
                    </div>
                    
              
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
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