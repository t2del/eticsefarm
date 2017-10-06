    <div id="form" class="boxify_noshadow">
    	<div id="admin_header" class="clearfix ">
        	<a href='admin-panel.php' class='user'><?php echo $_SESSION["user"]; ?></a>
            
            <a href="logout.php" class="logout" >logout</a>
        </div>
    <a href="admin-panel.php?src=index_slider#form" class="btn btn-large btn-info">Index slider</a>
    <a href="admin-panel.php?src=manage_gallery#form" class="btn btn-large btn-info">Gallery</a>
    <a href="admin-panel.php?src=manage_video#form" class="btn btn-large btn-info">Video</a>
    <a href="admin-panel.php?src=editor#form" class="btn btn-large btn-info">Edit Content</a>
    <hr />
    <?php 
	if(isset($_GET['src']))
	{
		if($_GET['src']=='editor')
		{
	?>
    <div class="clearfix">
    	<div>
                <a href="admin-panel.php?src=editor&content_page=edit_index#form" class="btn btn-theme">Index page</a>
                <a href="admin-panel.php?src=editor&content_page=edit_about#form" class="btn btn-theme">About page</a>
                <a href="admin-panel.php?src=editor&content_page=edit_information#form" class="btn btn-theme">Information</a>
        </div>
    </div>
    <?php 
		}
	}	
    	if(isset($_GET['src']))
		{
			if($_GET['src']=='index_slider')
			{
				include('admin/upload_slider.php');
			}
			if($_GET['src']=='manage_video')
			{
				include('admin/upload_video.php');
			}
			if($_GET['src']=='manage_gallery')
			{
				include('admin/upload_gallery.php');
			}
		}
	?>
    </div>