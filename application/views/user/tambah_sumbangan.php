<form action="<?php print base_url() ?>user/do_tambah_sumbang" method = 'post'>
	<input type="hidden" name = "id" value = "<?php print $id_kebutuhan; ?>">
	<input type="text" name = "terpenuhi" >
	<button>Submit</button>
</form>