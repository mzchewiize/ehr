<?php
session_start();
require_once("vendor/autoload.php");

if($_SESSION['lang'] == ""){
	$lang = "langEN";
}else{
	$lang = $_SESSION['lang'];
}

$_CONF = json_decode(file_get_contents("http://".$_SERVER['HTTP_HOST']."/ehr/conf.json"));
$_T = json_decode(file_get_contents("http://".$_SERVER['HTTP_HOST']."/ehr/lang/".$lang.".json"));

$url = explode("/", $_SERVER['PHP_SELF']);
$fileName = $url[count($url)-1];

if(!isset($_SESSION['user']) 
	&& $fileName != "login.php" 
	&& $_POST['req'] != "login"){
	
	header( "location: login.php" );
	exit(0);
}

?>