<?php
	if (isset($_GET['si'])) 
	{ $ext_url_admin = "?src=manage_gallery&si=".$_GET['si']."&"; }
	else 
	{ $ext_url_admin = "?src=manage_gallery"; }
?>
<div id="admin_upload">
    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <th width="100" height="30" align="center" valign="top">
                <div>
                    <a href="<?php echo $_SERVER['PHP_SELF'].$ext_url_admin ?>&upload_src=gamefowl#form">Gamefowl</a>
                </div>
            </th>
            <th width="100" align="center" valign="top">
                <div>
                    <a href="<?php echo $_SERVER['PHP_SELF'].$ext_url_admin ?>&upload_src=farm#form">Farm</a>
                </div>
            </th>
            <th width="100" align="center" valign="top">
                <div>
                    <a href="<?php echo $_SERVER['PHP_SELF'].$ext_url_admin ?>&upload_src=goat#form">Goat</a>
                </div>
            </th>
        </tr>
    </table>
    <div class="upload_form">
    <?php 
                if(isset($_GET['upload_src'])) 
                {
                    include('admin/upload_'.$_GET['upload_src'].'.php');
                }	 
	?>
    </div>
</div>