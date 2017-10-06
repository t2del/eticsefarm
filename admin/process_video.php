<?php
include('../confg.php');
$process=$_GET['video_process'];
if($process=='add_video')
{
	$title = ucwords(str_replace("'","`",$_POST['video_title']));
	$video_source = $_POST['video_source'];
	$video_source = str_replace("'","`",str_replace("560","100%",$video_source));
	$section = $_POST['section'];
	$add_vid = "INSERT INTO _videos (video_title, video_code) VALUES ('".$title."','".$video_source."')";
	if ($conn->query($add_vid) === TRUE)
	{  $v=add; }
	else
	{ $v=0; }
	
}
if($process=='del_video')
{
	$vid_id= $_GET['vid_id'];
	$del_vid = "Delete from _videos where video_id='".$vid_id."'";
	if ($conn->query($del_vid) === TRUE)
	{  $v=del; }
	else
	{ $v=0; }
}

header("location: ../admin-panel.php?src=manage_video&v=".$v."#form");
?>