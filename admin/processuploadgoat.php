<?php
	include('../confg.php');
	$prev_link = $_POST['prev_link'];
	$breed_id  = array("0",$_POST['breed1'], $_POST['breed2'], $_POST['breed3'], $_POST['breed4'], $_POST['breed5']);
	$tag  = array("0",$_POST['tag1'], $_POST['tag2'], $_POST['tag3'], $_POST['tag4'], $_POST['tag5']);
	$pic  = array("0",$_FILES['pic1']["name"], $_FILES['pic2']["name"], $_FILES['pic3']["name"], $_FILES['pic4']["name"], $_FILES['pic5']["name"]);
	$search_tag = 'goat, billy, kid, buck ';
	$fa_type = "goat";
	for($i=1;$i<=5;$i++)
	{
		$filename = $pic[$i];
		$file_basename = substr($filename, 0, strripos($filename, '.'));	// get file name
		$file_ext = substr($filename, strripos($filename, '.'));	// get file extention
		
		$rand1=mt_rand(1,999999999);
		$rand2=mt_rand(1,999999999);
		
		//$qry_breedname = "SELECT * FROM _gamefowls where gamefowl_ID='$breed_id[$i]'";
		//$result = $conn->query($qry_breedname);
		//$result_breedname = $result->fetch_assoc();
		//$new_result_breedname=str_replace(" ","_",$result_breedname['gamefowl_breed']);
		$newfilename = strtoupper($fa_type)."_".$tag[$i].'_'.$rand1.'_'.$rand2.$file_ext;	// new filename
		$imgurl = '../img/gallery/goat/'.$newfilename;	// new file location
		//$search_tag .= ' '.$result_breedname['gamefowl_breed'];
		if($_FILES["pic".$i]["name"]!="")
		{
			if(move_uploaded_file($_FILES["pic".$i]["tmp_name"], $imgurl))
			{
				$insert_gamefowl = "INSERT INTO _farm_animals (gamefowl_ID, fa_tag, fa_img, fa_type, fa_search_tag) VALUES ('".$breed_id[$i]."','".$tag[$i]."', '".$newfilename."', '".$fa_type."', '".$search_tag."')";
				if ($conn->query($insert_gamefowl) === TRUE)
				{  $v=1; }
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