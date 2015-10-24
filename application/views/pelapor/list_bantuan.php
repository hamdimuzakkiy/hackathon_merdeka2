<script type="text/javascript">
    function show_confirm(act,gotoid)
    {
        if(act=="edit")
            var r=confirm("Do you really want to edit ?");
        else
            var r=confirm("Do you really want to delete ?");
        
        if (r==true)window.location="<?php echo base_url();?>pelapor/"+act+"/pelajaran/"+gotoid;
    }
</script>

<section class="content-header">
    <h1>
      List Bantuan Wilayah <?php echo $wilayah_ket->nama; ?>
      <small>Bantuan yang direquest</small>
      
    <div class="pull-right">
      <a href="<?php print base_url() ?>pelapor/register/permintaan"><button type="button" class="btn btn-block btn-success btn-flat"><i class="fa fa-plus "></i> Tambah Data Permintaan</button></a>
    </div>
    </h1>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12 col-lg-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Bantuan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                     <tbody>
                      <?php $no=0; ?>
                      <?php foreach ($bantuan_list as $c_key) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $c_key->jenis_kebutuhan; ?> </td>
                          <td><?php echo $c_key->jumlah; ?></td>
                          <td><?php echo $c_key->status; ?></td>
                          <td align="center">
                              <!--<a href="#" onClick="show_confirm('edit',<?php echo $c_key->id;?>)"><i style="font-size: 28px" class="fa fa-pencil-square-o "></i></a>-->
                              <a href="#" onClick="show_confirm('delete',<?php echo $c_key->id;?>)"><i style="font-size: 28px" class="fa fa-trash-o "></i></a>
                          </td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
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
<script src="<?php echo base_url(); ?>../plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>../plugin/datatables/dataTables.bootstrap.min.js"></script>
     <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>