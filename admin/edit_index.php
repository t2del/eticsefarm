<div class="col-lg-6">
	<textarea id="edit_index_main" name="edit_index_main">
		<?php information_details($qry_info. " where info_section='index_content'"); ?>
    </textarea>
</div>

<div class="col-lg-6">
	<textarea id="edit_index_aside" name="edit_index_aside">
    	<?php information_details($qry_info. " where info_section='index_social'"); ?>
    </textarea>
</div>