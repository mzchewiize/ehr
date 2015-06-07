<?php
session_start();
require_once("vendor/autoload.php");
require_once("conf/conf.php");

$url = explode("/", $_SERVER['PHP_SELF']);
$fileName = $url[count($url)-1];

if(!isset($_SESSION['user']) 
	&& $fileName != "login.php" 
	&& $_POST['req'] != "login"){
	
	header( "location: login.php" );
	exit(0);
}

?>