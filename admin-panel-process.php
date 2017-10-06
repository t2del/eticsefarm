<?php
include('confg.php');
if(isset($_POST['submit']) and isset($_POST['login'])) // login
{	
	$user=sha1($_POST['user']);
	$pass=sha1($_POST['pass']);
	$prev_link=$_POST['prev_link'];
	foreach($samndean as $x => $x_value) 
	{
		if($user==$x and $pass==$x_value)
		{
			$_SESSION["user"] = "Admin-".$_POST['user'];
			if($prev_link=='admin-panel.php')
			{ }
			else
			{ header('location: '.$prev_link); }
		}
	}
}

if(isset($_GET['delete_fa_id']) and isset($_GET['imgurl'])) { // delete gallery pics
	$fa_id=$_GET['delete_fa_id'];
	$del_imgurl=$_GET['imgurl'];
	$qry_del = "delete from _farm_animals where fa_id=".$fa_id;
	if ($conn->query($qry_del) === TRUE) 
	{ 
		unlink($del_imgurl); 
		header('Location: ' . $_SERVER['HTTP_REFERER'].'#form');	
	}
}
if(isset($_GET['slider_id']) and isset($_GET['imgurl'])) { // delete slider pics
	$slider_id=$_GET['slider_id'];
	$del_imgurl=$_GET['imgurl'];
	$qry_del = "delete from index_slider where slider_id=".$slider_id;
	if ($conn->query($qry_del) === TRUE) 
	{ 
		unlink($del_imgurl); 
		header('Location: ' . $_SERVER['HTTP_REFERER'].'#form');	
	}
}
?>