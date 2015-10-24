<?php 
		
		$data = array(
          'class'       => 'form-control select2',
          'style'       => 'width: 100%',
          'name'        =>  'id_wilayah',
        );

?>

<form action="<?php print base_url()?>auth/do_signup" method = "post">
	<input type="email" name = "email" placeholder = "Email">
	<input type="password" name = "password" placeholder = "Password">
	<input type="text" name = "nama" placeholder = "Nama">
	<input type="text" name = "tlp" placeholder = "Nomor Telepon">
	<?php echo form_dropdown($data, $list_wilayah); ?>
	<button>Submit</button>
</form>