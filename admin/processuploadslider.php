<?php
	include('../confg.php');
	$prev_link = $_POST['prev_link'];
	$desc  = array("0",$_POST['desc1'], $_POST['desc2'], $_POST['desc3'], $_POST['desc4'], $_POST['desc5']);
	$pic  = array("0",$_FILES['pic1']["name"], $_FILES['pic2']["name"], $_FILES['pic3']["name"], $_FILES['pic4']["name"], $_FILES['pic5']["name"]);
	for($i=1;$i<=5;$i++)
	{
		$filename = $pic[$i];
		$file_basename = substr($filename, 0, strripos($filename, '.'));	// get file name
		$file_ext = substr($filename, strripos($filename, '.'));	// get file extention
		
		$rand1=mt_rand(1,999999999);
		$rand2=mt_rand(1,999999999);
		
		$newfilename = strtoupper($desc[$i])."_".$rand1.'_'.$rand2.$file_ext;	// new filename
		$imgurl = '../img/slides/'.$newfilename;	// new file location
		echo $newfilename.' '.$desc[$i].'<br>';
		if($_FILES["pic".$i]["name"]!="")
		{
			//echo 'check pic <br>';
			if(move_uploaded_file($_FILES["pic".$i]["tmp_name"], $imgurl))
			{
				//echo 'upload pic <br>';
				$insert_slider = "INSERT INTO index_slider (description, imgurl) VALUES ('".$desc[$i]."','".$newfilename."')";
				if ($conn->query($insert_slider) === TRUE)
				{  $v=1; //echo 'insert pic to db <br>'; 
				}
				else
				{ unlink($imgurl); $v=0; }
			}
		}
		if($i==5)
		{ 
			header('location: ../'.$prev_link.'&v='.$v.'#form'); 
		}
	}
?>