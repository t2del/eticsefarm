<?php
	
// begin database connection
if($_SERVER['REMOTE_ADDR']!="::1")
{ // live connection
	//include('configura.php'); // redirect from http to https 
    $host_name  = "148.66.137.32";
	}
	else // localhost connection
	{
	$host_name  = "localhost";
}
	$database   = "eticsefarm";
    $user_name  = "denmac";
    $password   = "4b022d7323df2ea12538faeb5e64cdef";
$conn = mysqli_connect($host_name, $user_name, $password, $database);
if (mysqli_connect_errno()) // Check connection
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
// end database connection
	
	$samndean = array("1ccaeba13af23be65ff1b614503b2dc2f7e4bab0"=>"2618baba79484527e9f405ccf2446a72246d8593", "b4feb0cbb4b232a9321cf09c802b7ca24cb2c09c"=>"fbcc55b742478406f06342b1ddfd32c5a91a1901");

    $conn = mysqli_connect($host_name, $user_name, $password, $database);
	if (mysqli_connect_errno()) // Check connection
	{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
	
	$qry_info = "select * from _information ";
?>