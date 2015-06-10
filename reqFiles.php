<?php
session_start();
require_once("vendor/autoload.php");

$_CONF = parse_ini_file("conf.ini", true);

if($_SESSION['lang'] == ""){
	$lang = "langEN";
}else{
	$lang = $_SESSION['lang'];
}

$_T = json_decode(file_get_contents($_CONF['info']['rootDir']."/lang/".$lang.".json"));

$url = explode("/", $_SERVER['PHP_SELF']);
$fileName = $url[count($url)-1];

if(!isset($_SESSION['user']) 
	&& $fileName != "login.php" 
	&& $_POST['req'] != "login"){
	
	header( "location: login.php" );
	exit(0);
}

?>
