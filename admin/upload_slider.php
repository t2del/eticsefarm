<?php
	if(isset($_GET['v']))
	{
		if($_GET['v']==0)
		{ $msg="Error uploading!"; }
		else
		{ $msg="Sucess!"; }	
	}
	else
	{ $msg=""; }
 ?>
	<div id="admin_upload">
     <table cellpadding="0" cellspacing="0" border="0" >
     	<tr>
        	<th align="center" valign="middle"><strong>Upload slider photos: </strong></th>
        </tr>
        <form action="admin/processuploadslider.php" method="post" name="upload" enctype="multipart/form-data">
        	<?php $prev_link=basename($_SERVER['REQUEST_URI']); ?>
            <input type="hidden" name="prev_link" id="prev_link" value="<?php echo $prev_link; ?>" />
        <tr>
            <td><input name="desc1"  type="text" id="desc1"  placeholder="Description"><input name="pic1"  type="file" id="pic1" ></td>
        </tr>
        <tr>
            <td><input name="desc2"  type="text" id="desc2"  placeholder="Description"><input name="pic2"  type="file" id="pic2" ></td>
        </tr>
        <tr>
            <td><input name="desc3"  type="text" id="desc3"  placeholder="Description"><input name="pic3"  type="file" id="pic3" ></td>
        </tr>
        <tr>
            <td><input name="desc4"  type="text" id="desc4"  placeholder="Description"><input name="pic4"  type="file" id="pic4" ></td>
        </tr>
        <tr>
            <td><input name="desc5"  type="text" id="desc5"  placeholder="Description"><input name="pic5"  type="file" id="pic1" ></td>
        </tr>
        <tr>
        	<td><div class="msg"><?php echo $msg; ?></div></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" id="submit" value="Upload" class="btn-theme"></td>
        </tr>
        </form>
	</table>
    </div>