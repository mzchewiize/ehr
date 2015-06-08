<?php
require_once("../reqFiles.php");
require_once("../api/emrModel.php");

$req = $_POST['req'];
$return = array();

if($req == "login"){
	$res = emrLogin($_POST);
	
	if($res[type] != ""){
		$return['error'] = 0;
		
		$_SESSION['user']['username'] = $res['username'];
		$_SESSION['user']['type'] = $res['type'];
		$_SESSION['user']['companyID'] = $res['companyID'];
		
	}else{
		$return['error'] = 1;
	}
}else if($req == "logout"){
	
	$return['error'] = 0;
	unset($_SESSION['user']);
	unset($_SESSION['lang']);

}else if($req == "setLang"){
	
	$return['error'] = 0;
	$_SESSION['lang'] = $_POST['lang'];

}

echo json_encode($return);

?>