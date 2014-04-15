<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);
*/
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

$msg = 0;

if($_GET['message']!="" && $_GET['sender']!="") {
	
	require_once("classes/phpmailer/class.phpmailer.php");
	$messaggio = new PHPmailer();
	
	$messaggio->IsHTML(true);
	$messaggio->From='info@azote.it';
	$messaggio->AddAddress('info@azote.it');
	$messaggio->AddReplyTo('info@azote.it');
	$messaggio->Subject='The Consultants | "'.substr($_GET["message"],0,14).'..."';
	$messaggio->Body=$_GET["message"].'<br><br><strong>Telefono o mail per la risposta</strong><br>'.$_GET["sender"];
	
	if($messaggio->Send()){
		$msg = 1;
	}

}

echo $msg;
?>