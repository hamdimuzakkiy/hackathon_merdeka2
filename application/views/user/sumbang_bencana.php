<form action="<?php print base_url() ?>user/do_sumbang_bencana" method = 'post'>
	<input type="hidden" name = "id_kebutuhan" value = "<?php print $id_kebutuhan; ?>">
	<input type="text" name = "jumlah" >
	<button>Submit</button>
</form>