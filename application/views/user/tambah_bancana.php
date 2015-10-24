<form action="<?php print base_url()?>user/do_tambah_bencana" method = "post">  
    <input type="text" placeholder="Nama" name="nama">
    <input type="text" placeholder="Lokasi" name="lokasi">
    <input type="text" placeholder="Deskripsi" name="deskripsi">
    <input type="date" placeholder="Email" name="tanggal_berakhir">    
    <button type="submit">Sign In</button>    
    <span class = 'adds'>
    </span>
</form>

<td><a class = "btn btn-block btn-lg btn-success" id = "button">Tambah</a></td>
<span hidden id = 'lengthData'><?php print 0; ?></span>
<script src="<?php echo base_url(); ?>../assets/bootsrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>

  $('#button').click(function(){                
        // var panjang = document.getElementById("lengthData").innerHTML;

        // $('.adds').append('<tr><td><input class="form-control" type="Text" name="jenis_pelumas'+panjang+'"></td><td><input class="form-control" type="Text" name="persediaan_awal'+panjang+'"></td><td><a  class = "remove" style = "display:inline; text-decoration:none; cursor:pointer; color: red;"><i class="fa fa-times">X</i></a></td></tr>');

        $('.adds').append('<tr><td><input type="Text" name="namas[]"></td><td><input  type="Text" name="jumlah[]"></td><td><a  class = "remove" style = "display:inline; text-decoration:none; cursor:pointer; color: red;"><i class="fa fa-times">X</i></a></td></tr>');

        // document.getElementById("lengthData").innerHTML = panjang++;                
        
        $('.remove').click(function () {
            $(this).parents().eq(1).remove();            
        });                                            
    });

    // remove laporan KIT 
    $('.removes').click(function () {
        $(this).parents().eq(1).remove();                                    
    });
</script>