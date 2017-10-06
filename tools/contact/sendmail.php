<?php
session_start();

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$phone = stripslashes($_POST['phone']);
$message = stripslashes($_POST['message']);


$error = '';



	if(!$error)
	{
		$mail = mail(WEBMASTER_EMAIL, "Inquiry: ", $message,
		 "From: ".$name." <".$email."> <Phone: ".$phone."> \r\n"
		."Reply-To: ".$email."\r\n"
		."X-Mailer: PHP/" . phpversion());
	
	
		if($mail)
		{
			$_SESSION['mail_sent']=1;
		}
	}
	else
	{
		$_SESSION['mail_sent']=0;
	}
header('location: ../../contact');
}
?>