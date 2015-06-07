<?php
require_once("../reqFiles.php");
require_once("../services/DatabaseServices.class.php");

$db = new DatabaseServices($_CONF->dbStg);

function emrLogin($params){
	global $db;
	
	$username = $params['username'];
	$password = md5($_POST['password']);
	
	$sql = "SELECT * 
			FROM accounts 
			WHERE username = '$username' 
			AND password = '$password'";
	$query = $db->sqlQuery($sql);
	$res = $db->fetchArray($query);
	
	return $res;
}

?>