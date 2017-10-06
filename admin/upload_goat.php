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
<div class="clearfix ">
    <form action="admin/processuploadgoat.php" method="post" name="upload"  enctype="multipart/form-data">
    	<?php
        	$prev_link=basename($_SERVER['REQUEST_URI']);
		?>
    	<input type="hidden" name="prev_link" id="prev_link" value="<?php echo $prev_link; ?>" />
        <div>
        	<input name="desc1"  type="text" id="desc1"  placeholder="Description">
            <input name="tag1"  type="text" id="tag1"  placeholder="Tag #"> 
            <input name="pic1"  type="file" id="pic1" >
        </div><hr />
        <div>
            <input name="desc2"  type="text" id="desc2"  placeholder="Description">
            <input name="tag2"  type="text" id="tag2"  placeholder="Tag #"> 
            <input name="pic2"  type="file" id="pic2" >
        </div><hr />
        <div>
            <input name="desc3"  type="text" id="desc3"  placeholder="Description">
            <input name="tag3"  type="text" id="tag3" placeholder="Tag #"> 
            <input name="pic3"  type="file" id="pic3" >
        </div><hr />
        <div>
            <input name="desc4"  type="text" id="desc4"  placeholder="Description">
            <input name="tag4"  type="text" id="tag4"  placeholder="Tag #"> 
            <input name="pic4"  type="file" id="pic4" >
        </div><hr />
        <div>
            <input name="desc5"  type="text" id="desc5"  placeholder="Description"> 
            <input name="tag5"  type="text" id="tag5"  placeholder="Tag #"> 
            <input name="pic5"  type="file" id="pic5" >
        </div><hr />
        <input type="submit" name="submit" id="submit" value="Upload" class="btn-theme">
        <div class="msg"><?php echo $msg; ?></div>
    </form>
</div>