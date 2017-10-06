<?php
$qry_info = "select * from _information ";
	function information_details($qry) {
		include('confg.php');
		$result_info = $conn->query($qry);
		$row_info = $result_info->fetch_assoc();
		echo nl2br($row_info['info_details']);
	}
	function information_section($qry) {
		include('confg.php');
		$result_info = $conn->query($qry);
		$row_info = $result_info->fetch_assoc();
		echo $row_info['info_section'];
	}
	function logout() {
		session_unset(); 
		session_destroy();
		header('location: admin-panel.php');
	}
?>